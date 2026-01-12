<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register_create()
    {
        return view('auth.register');
    }

    public function register_store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:100',
            'email'    => 'required|email:dns|unique:users,email',
            'password' => 'required|string|min:8',
            'no_hp'    => 'required|string|min:10|max:15',
        ]);

        User::create([
            'name'     => strip_tags($request->name),
            'email'    => strip_tags($request->email),
            'password' => Hash::make($request->password),
            'no_hp'    => strip_tags($request->no_hp),
            'role'     => 'user',
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil, silakan login');
    }

    public function login_create()
    {
        return view('auth.login');
    }

    public function login_store(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        $this->ensureIsNotRateLimited($request);

        $credentials = [
            'email'    => strip_tags($request->email),
            'password' => $request->password,
        ];

        if (!Auth::attempt($credentials)) {
            RateLimiter::hit($this->throttleKey($request));

            throw ValidationException::withMessages([
                'email' => 'Email atau password salah.',
            ]);
        }

        RateLimiter::clear($this->throttleKey($request));

        $request->session()->regenerate();

        return redirect()->route('home')->with('success', 'Login Berhasil, Selamat Datang!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Logout Berhasil');
    }

    protected function ensureIsNotRateLimited(Request $request)
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey($request), 5)) {
            return;
        }

        throw ValidationException::withMessages([
            'email' => 'Terlalu banyak percobaan login. Coba lagi dalam 1 menit',
        ]);
    }

    protected function throttleKey(Request $request)
    {
        return Str::lower($request->email) . '|' . $request->ip();
    }
}
