<?php

namespace App\Http\Controllers\User;

use App\Models\Deteksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class AgridentController extends Controller
{
    public function agrident_page()
    {
        return view('user.deteksi_penyakit');
    }

    public function agrident_store(Request $request)
    {
        $request->validate([
            'image_path' => 'required|image'
        ]);

        $file = $request->file('image_path');
        $path = $file->store('deteksi', 'public');

        $base64Image = base64_encode(file_get_contents($file));
        $mimeType    = $file->getMimeType();

        $prompt = <<<PROMPT
Analisis gambar tanaman berikut.

BALAS HANYA DALAM FORMAT JSON VALID, TANPA TEKS TAMBAHAN.

Format:
{
  "nama_tanaman": "",
  "nama_penyakit": "",
  "status": "Ringan | Sedang | Berat",
  "jadwal_perawatan": ""
}

Aturan:
- Jika tanaman sehat, isi nama_penyakit = "Sehat"
- status wajib salah satu dari: Ringan, Sedang, Berat
- jadwal_perawatan berisi langkah perawatan praktis
PROMPT;

        // 5. Panggil Gemini
        $response = Http::post(
            "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=" . config('services.gemini.key'),
            [
                'contents' => [
                    [
                        'role' => 'user',
                        'parts' => [
                            ['text' => $prompt],
                            [
                                'inlineData' => [
                                    'mimeType' => $mimeType,
                                    'data' => $base64Image
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        );

        $rawText = $response->json('candidates.0.content.parts.0.text');

        $cleanText = trim($rawText);

        $cleanText = preg_replace('/```json|```/', '', $cleanText);

        if (strpos($cleanText, '{') !== false) {
            $cleanText = substr($cleanText, strpos($cleanText, '{'));
        }

        $data = json_decode($cleanText, true);

        if (!$data) {
            return response()->json([
                'error' => 'Response Gemini bukan JSON valid',
                'raw'   => $rawText
            ], 422);
        }

        // 8. Simpan ke DB
        $deteksi = Deteksi::create([
            'nama_tanaman'     => $data['nama_tanaman'] ?? '-',
            'nama_penyakit'    => $data['nama_penyakit'] ?? '-',
            'status'           => $data['status'] ?? 'Ringan',
            'jadwal_perawatan' => $data['jadwal_perawatan'] ?? '-',
            'image_path'       => $path
        ]);

        return response()->json($deteksi);
    }
}
