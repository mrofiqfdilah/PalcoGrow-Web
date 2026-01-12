<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PALCO Grow | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="icon" href="{{ asset('image/favicon.svg') }}">
       <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>

<body class="bg-[#EEF4F1]">

<nav id="navbar"
    class="fixed top-0 w-full z-50 transition-all duration-300 bg-[#3E6553]">
    <div class="max-w-[1150px] mx-auto px-6 py-4">

        <div class="flex items-center gap-4">

            <a href="javascript:history.back()"
                class="w-10 h-10 flex items-center justify-center rounded-full bg-white/70 backdrop-blur hover:bg-white transition">
                <i class="ri-arrow-left-line text-xl text-[#3E6553]"></i>
            </a>

            <div class="leading-tight">
                <h1 class="text-[22px] mb-1 font-semibold text-[#fff]">Agrident AI</h1>
                <p class="text-[16px] text-gray-300">Identifikasi & Deteksi Penyakit</p>
            </div>

        </div>

    </div>
</nav>


    <h2 class="mt-40">Analisis Tanaman dari Gambar 🌱</h2>

    <input type="file" name="image_path" id="image" accept="image/*" />
    <img id="preview">

    <br>
    <button onclick="submitImage()">Analisis</button>

    <h3>Hasil Deteksi:</h3>
    <pre id="result">-</pre>


<script>
    const navbar = document.getElementById("navbar");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 20) {
            navbar.classList.add("bg-white/80", "backdrop-blur", "shadow-sm");
            navbar.classList.remove("bg-transparent");
        } else {
            navbar.classList.remove("bg-white/80", "backdrop-blur", "shadow-sm");
            navbar.classList.add("bg-transparent");
        }
    });

function previewImage() {
    const file = document.getElementById("image").files[0];
    const img  = document.getElementById("preview");

    if (!file) return;

    img.src = URL.createObjectURL(file);
    img.style.display = "block";
}

document.getElementById("image").addEventListener("change", previewImage);

async function submitImage() {
    const fileInput = document.getElementById("image");
    const resultEl  = document.getElementById("result");

    if (!fileInput.files.length) {
        resultEl.textContent = "Silakan upload gambar tanaman terlebih dahulu.";
        return;
    }

    const formData = new FormData();
    formData.append("image_path", fileInput.files[0]);

    resultEl.textContent = "🔍 Menganalisis tanaman...";

    try {
        const response = await fetch("{{ route('agrident_store') }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content")
            },
            body: formData
        });

        const data = await response.json();

        if (!response.ok) {
            resultEl.textContent = data.error || "Terjadi kesalahan.";
            return;
        }

        resultEl.textContent = `
🌱 Nama Tanaman   : ${data.nama_tanaman}
🦠 Penyakit       : ${data.nama_penyakit}
⚠️ Status         : ${data.status}

🧪 Perawatan:
${data.jadwal_perawatan}
        `;

    } catch (err) {
        resultEl.textContent = "Error: " + err.message;
    }
}
</script>



<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</body>

</html>
