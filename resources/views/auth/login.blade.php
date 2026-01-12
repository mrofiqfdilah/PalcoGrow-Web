<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PALCOGrow | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
      <link rel="icon" href="{{ asset('image/favicon.svg') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body class="min-h-screen bg-black relative flex items-center justify-center px-4">

    <div class="mt-10 mb-10 relative z-10 w-full max-w-md bg-white rounded-2xl shadow-xl px-8 pt-6 pb-10">

        <div class="flex justify-center ">

  <div class="w-20 h-20 mb-3 rounded-full bg-[#3E6553] flex items-center justify-center shadow-lg">
    <svg xmlns="http://www.w3.org/2000/svg"
         width="24" height="24"
         viewBox="0 0 24 24"
         fill="none"
         stroke="currentColor"
         stroke-width="2"
         stroke-linecap="round"
         stroke-linejoin="round"
         class="lucide lucide-leaf w-10 h-10 text-[#fff]"
         aria-hidden="true">
        <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"></path>
        <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
    </svg>
</div>

        </div>

        <h1 class="text-center text-xl font-semibold text-green-800">
            PALCO Grow
        </h1>
        <p class="text-center text-gray-500 mt-1 mb-7">
            Masuk ke akun Anda
        </p>

        <form action="{{ route('login_store') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block text-sm font-medium mb-1">Email</label>
                <div class="relative">
                    <i class="ri-mail-line absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    <input name="email" type="email"
                        class="w-full bg-gray-100 rounded-xl pl-11 pr-4 py-3 outline-none focus:ring-2 focus:ring-green-600"
                        placeholder="nama@email.com">
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Password</label>
                <div class="relative">
                    <i class="ri-lock-line absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    <input name="password" type="password" id="passwordInput"
                        class="w-full bg-gray-100 rounded-xl pl-11 pr-12 py-3 outline-none focus:ring-2 focus:ring-green-600"
                        placeholder="••••••••">
                    <i id="togglePassword"
                        class="ri-eye-off-line absolute right-4 top-1/2 -translate-y-1/2 cursor-pointer text-gray-400"></i>
                </div>
            </div>

            <button type="submit" class="w-full bg-[#3E6553]  text-white py-3 rounded-xl font-semibold transition">
                Masuk
            </button>

            <div class="flex items-center gap-4 text-[#6B7280] font-medium text-[16px]">
                <div class="flex-1 h-px bg-gray-300"></div>
                atau
                <div class="flex-1 h-px bg-gray-300"></div>
            </div>

            <button type="button"
                class="w-full border border-gray-300 rounded-xl py-3 flex items-center justify-center gap-3 font-medium">
                <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5">
                Masuk dengan Google
            </button>

            <p class="text-center text-[15px] ">
                Belum punya akun?
                <a href="{{ route('register') }}" class="text-green-700 font-semibold hover:underline">
                    Daftar di sini
                </a>
            </p>
        </form>
    </div>

    <script src="{{ asset('js/EyePassword.js') }}"></script>

    @include('sweetalert::alert')

</body>

</html>
