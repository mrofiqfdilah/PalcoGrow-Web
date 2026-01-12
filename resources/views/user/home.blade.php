<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PALCO Grow | Agrident AI</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="icon" href="{{ asset('image/favicon.svg') }}">
       <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>

<body class="bg-[#EEF4F1]">
    <nav id="navbar" class="fixed top-0 w-full z-50 transition-all duration-300 bg-transparent">
        <div class="max-w-[1150px] mx-auto px-6 py-4">

            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-[#3E6553]" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z" />
                        <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12" />
                    </svg>
                    <h1 class="text-xl font-semibold">PALCO Grow</h1>
                </div>

                <button id="toggleBtn" class="md:hidden text-2xl">
                    <i id="icon" class="ri-menu-line"></i>
                </button>

                <ul class="hidden md:flex gap-8 font-medium">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Artikel</a></li>
                    <li><a href="#">Hubungi Kami</a></li>
                    <li><a href="#">Akun</a></li>
                </ul>
            </div>

            <div id="mobileMenu" class="md:hidden mt-6 hidden transition-all duration-300 relative z-50">
            </div>



        </div>
    </nav>

    <div id="menuOverlay" class="fixed inset-0 bg-black/30 backdrop-blur-sm hidden z-40 md:hidden">
    </div>

    <section class="pt-32 pb-20 " data-aos="fade-up" data-aos-duration="1500" data-aos-offset="200">
        <div class="max-w-[1150px] mx-auto px-6 grid grid-cols-1 md:grid-cols-2 items-center gap-12">

            <div class="order-1 md:order-1">
                <span
                    class="inline-block mb-4 px-4 py-2 text-sm font-semibold text-white rounded-full bg-gradient-to-r from-green-500 to-green-700 shadow-md">
                    🌱 Solusi Pertanian Digital
                </span>


                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-6">
                    Pantau Pertumbuhan Tanaman
                    dan Jual Hasil Panen Anda!
                </h1>

                <p class="text-gray-600 text-lg mb-8 max-w-xl">
                    PALCO Grow membantu petani memonitor perkembangan tanaman secara real-time,
                    mendapatkan rekomendasi cerdas, serta memasarkan hasil panen dengan mudah.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <button
                        class="px-8 py-4 bg-[#3E6553] text-white rounded-xl font-medium hover:bg-green-700 transition shadow-lg">
                        Pantau Sekarang
                    </button>

                    <button
                        class="px-8 py-4 border border-[#3E6553] text-[#3E6553] rounded-xl font-medium hover:bg-green-50 transition">
                        Pelajari Lebih Lanjut
                    </button>
                </div>
            </div>

            <div class="order-2 md:order-2 flex justify-center">
                <img src="{{ asset('image/home.png') }}" alt="Pertanian Digital" class="w-full max-w-md drop-shadow-xl rounded-2xl">
            </div>

        </div>
    </section>


    <section class="py-24" data-aos="fade-up" data-aos-duration="1500">
        <div class="max-w-[1150px] mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <!-- IMAGE LEFT -->
            <div class="relative">

                <img src="{{ asset('image/about.png') }}" alt="Agro Platform" class="relative z-10 rounded-lg w-full object-cover" />
            </div>

            <!-- CONTENT RIGHT -->
            <div>
                <h2 class="text-4xl font-bold leading-tight text-gray-900 mb-6">
                    Siapa Kami &<br>
                    Mengapa Memilih PALCO Grow
                </h2>

                <p class="text-gray-600 text-lg mb-8">
                    PALCO Grow adalah ekosistem pertanian cerdas berbasis AI yang membantu petani
                    dan pecinta tanaman dalam memantau, merawat, serta memperdagangkan tanaman
                    secara lebih efisien dan berkelanjutan.
                </p>

                <ul class="space-y-5 mb-10">
                    <li class="flex items-start gap-4">
                        <i class="ri-leaf-line text-green-700 text-xl mt-1"></i>
                        <span class="text-gray-700">
                            <strong>Agrident AI</strong> — mendeteksi penyakit tanaman secara instan
                            menggunakan analisis gambar berbasis kecerdasan buatan.
                        </span>
                    </li>

                    <li class="flex items-start gap-4">
                        <i class="ri-alarm-warning-line text-green-700 text-xl mt-1"></i>
                        <span class="text-gray-700">
                            <strong>Agrolarm</strong> — sistem peringatan cerdas untuk kondisi kritis
                            tanaman dan lingkungan.
                        </span>
                    </li>

                    <li class="flex items-start gap-4">
                        <i class="ri-store-2-line text-green-700 text-xl mt-1"></i>
                        <span class="text-gray-700">
                            <strong>Agrocries Marketplace</strong> — platform jual beli tanaman,
                            bibit, dan hasil panen dalam satu ekosistem.
                        </span>
                    </li>
                </ul>

                <a href="#"
                    class="inline-flex items-center gap-2 text-green-800 font-semibold hover:gap-3 transition-all">
                    Jelajahi Produk
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>

        </div>
    </section>

    <section class="py-[60px]" data-aos="fade-up" data-aos-duration="1500">
        <div class="max-w-[1150px] mx-auto px-6">

            <!-- Wrapper hijau -->
            <div class="bg-[#3F634F] rounded-3xl px-8 py-16">

                <!-- Title -->
                <h2 class="text-center text-3xl md:text-4xl font-bold text-white mb-14">
                    Langkah Mudah Memulai<br class="hidden md:block">
                    Pertanian Digital Anda
                </h2>

                <!-- Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                    <!-- Card 1 -->
                    <a href="{{ route('agrident_ai') }}" class="group bg-white rounded-2xl p-8 transition-all duration-300
                           hover:-translate-y-2 hover:shadow-xl">

                        <div class="w-14 h-14 flex items-center justify-center rounded-lg
                               bg-[#3F634F] mb-6 transition
                               group-hover:bg-green-600">
                            <i class="ri-leaf-line text-white text-2xl"></i>
                        </div>

                        <h3 class="font-semibold text-lg mb-2 text-gray-900">
                            Deteksi Penyakit Tanaman
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Gunakan Agrident AI untuk mengenali penyakit tanaman
                            hanya dengan foto secara instan.
                        </p>
                    </a>

                    <!-- Card 2 -->
                    <a href="/agrolarm" class="group bg-white rounded-2xl p-8 transition-all duration-300
                           hover:-translate-y-2 hover:shadow-xl">

                        <div class="w-14 h-14 flex items-center justify-center rounded-lg
                               bg-[#3F634F] mb-6 transition
                               group-hover:bg-green-600">
                            <i class="ri-alarm-warning-line text-white text-2xl"></i>
                        </div>

                        <h3 class="font-semibold text-lg mb-2 text-gray-900">
                            Pantau Kondisi Tanaman
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Terima peringatan dini jika tanaman atau lingkungan
                            berada dalam kondisi kritis.
                        </p>
                    </a>

                    <!-- Card 3 -->
                    <a href="/marketplace" class="group bg-white rounded-2xl p-8 transition-all duration-300
                           hover:-translate-y-2 hover:shadow-xl">

                        <div class="w-14 h-14 flex items-center justify-center rounded-lg
                               bg-[#3F634F] mb-6 transition
                               group-hover:bg-green-600">
                            <i class="ri-store-2-line text-white text-2xl"></i>
                        </div>

                        <h3 class="font-semibold text-lg mb-2 text-gray-900">
                            Jual & Beli Hasil Panen
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Pasarkan hasil panen, bibit, dan tanaman langsung
                            melalui Agrocries Marketplace.
                        </p>
                    </a>

                </div>
            </div>

        </div>
    </section>

    <section class="py-24 bg-[#EEF4F1]" data-aos="fade-up" data-aos-duration="1500">
        <div class="max-w-[1150px] mx-auto px-6">

            <!-- Title -->
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-16 max-w-xl">
                Beberapa pertanyaan<br>
                yang sering diajukan
            </h2>

            <!-- FAQ GRID -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                <!-- LEFT -->
                <div class="space-y-6">

                    <div
                        class="faq-item rounded-md bg-white p-6 cursor-pointer hover:shadow-md transition-colors duration-300 ease-in-out">
                        <div class="flex items-center justify-between">
                            <h3 class="font-medium text-gray-800">Apa penyebab daun menjadi pucat?</h3>
                            <span class="faq-icon text-2xl hidden md:block font-semibold">+</span>
                        </div>
                        <div class="faq-content mt-2 text-gray-700"
                            style="max-height: 0; opacity: 0; overflow: hidden; transition: max-height 0.3s ease, opacity 0.3s ease;">
                            Daun pucat biasanya disebabkan oleh kurangnya nutrisi atau cahaya matahari yang tidak cukup.
                        </div>
                    </div>

                    <div
                        class="faq-item rounded-md bg-white p-6 cursor-pointer hover:shadow-md transition-colors duration-300 ease-in-out">
                        <div class="flex items-center justify-between">
                            <h3 class="font-medium text-gray-800">Apa penyebab daun menjadi pucat?</h3>
                            <span class="faq-icon text-2xl font-semibold hidden md:block">+</span>
                        </div>
                        <div class="faq-content mt-2 text-gray-700"
                            style="max-height: 0; opacity: 0; overflow: hidden; transition: max-height 0.3s ease, opacity 0.3s ease;">
                            Daun pucat biasanya disebabkan oleh kurangnya nutrisi atau cahaya matahari yang tidak cukup.
                        </div>
                    </div>

                    <div
                        class="faq-item rounded-md bg-white p-6 cursor-pointer hover:shadow-md transition-colors duration-300 ease-in-out">
                        <div class="flex items-center justify-between">
                            <h3 class="font-medium text-gray-800">Apa penyebab daun menjadi pucat?</h3>
                            <span class="faq-icon text-2xl font-semibold hidden md:block">+</span>
                        </div>
                        <div class="faq-content mt-2 text-gray-700"
                            style="max-height: 0; opacity: 0; overflow: hidden; transition: max-height 0.3s ease, opacity 0.3s ease;">
                            Daun pucat biasanya disebabkan oleh kurangnya nutrisi atau cahaya matahari yang tidak cukup.
                        </div>
                    </div>

                </div>

                <!-- RIGHT -->
                <div class="space-y-6">

                    <div
                        class="faq-item rounded-md bg-white p-6 cursor-pointer hover:shadow-md transition-colors duration-300 ease-in-out">
                        <div class="flex items-center justify-between">
                            <h3 class="font-medium text-gray-800">Apa penyebab daun menjadi pucat?</h3>
                            <span class="faq-icon text-2xl font-semibold hidden md:block">+</span>
                        </div>
                        <div class="faq-content mt-2 text-gray-700"
                            style="max-height: 0; opacity: 0; overflow: hidden; transition: max-height 0.3s ease, opacity 0.3s ease;">
                            Daun pucat biasanya disebabkan oleh kurangnya nutrisi atau cahaya matahari yang tidak cukup.
                        </div>
                    </div>

                    <div
                        class="faq-item rounded-md bg-white p-6 cursor-pointer hover:shadow-md transition-colors duration-300 ease-in-out">
                        <div class="flex items-center justify-between">
                            <h3 class="font-medium text-gray-800">Apa penyebab daun menjadi pucat?</h3>
                            <span class="faq-icon text-2xl font-semibold hidden md:block">+</span>
                        </div>
                        <div class="faq-content mt-2 text-gray-700"
                            style="max-height: 0; opacity: 0; overflow: hidden; transition: max-height 0.3s ease, opacity 0.3s ease;">
                            Daun pucat biasanya disebabkan oleh kurangnya nutrisi atau cahaya matahari yang tidak cukup.
                        </div>
                    </div>

                    <div
                        class="faq-item rounded-md bg-white p-6 cursor-pointer hover:shadow-md transition-colors duration-300 ease-in-out">
                        <div class="flex items-center justify-between">
                            <h3 class="font-medium text-gray-800">Apa penyebab daun menjadi pucat?</h3>
                            <span class="faq-icon text-2xl font-semibold hidden md:block">+</span>
                        </div>
                        <div class="faq-content mt-2 text-gray-700"
                            style="max-height: 0; opacity: 0; overflow: hidden; transition: max-height 0.3s ease, opacity 0.3s ease;">
                            Daun pucat biasanya disebabkan oleh kurangnya nutrisi atau cahaya matahari yang tidak cukup.
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="kontak py-24 bg-[#EEF4F1]" data-aos="fade-up" data-aos-duration="1500">
        <div class="max-w-[1150px] mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-8">

            <!-- LEFT info -->
            <div class="left space-y-8">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 max-w-xl">
                    Reach out to us today<br>via any of the given information
                </h1>

                <div class="rounded-2xl flex items-center space-x-4">
                    <i class="ri-phone-line text-3xl text-green-700"></i>
                    <div class="text-gray-800 font-medium">
                        Call us for instant support<br>
                        <span class="text-gray-800 font-bold text-lg">+999 888 777</span>
                    </div>
                </div>

                <div class="rounded-2xl flex items-center space-x-4">
                    <i class="ri-mail-line text-3xl text-green-700"></i>
                    <div class="text-gray-800 font-medium">
                        Write us by mail<br>
                        <span class="text-gray-800 font-bold text-lg">rofiq@gmail.com</span>
                    </div>
                </div>
            </div>

            <!-- RIGHT form -->
            <div class="right bg-white rounded-2xl p-6 shadow-md">
                <form action="#" class="space-y-6">

                    <input type="email" name="email" placeholder="Your Email" required
                        class="w-full p-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-700 transition" />

                    <input type="text" name="subject" placeholder="Subject" required
                        class="w-full p-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-700 transition" />

                    <textarea name="message" rows="5" placeholder="Your Message" required
                        class="w-full p-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-700 transition resize-none"></textarea>

                    <button type="submit"
                        class="bg-[#3E6553] text-white font-semibold py-3 px-6 rounded-lg hover:bg-green-800 transition">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <section class="footer bg-white py-16">
        <div class="max-w-[1150px] mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12">

            <!-- Tentang Kami -->
            <div class="space-y-6">
                <h3 class="text-xl font-semibold text-gray-900">Tentang Kami</h3>

                <p class="text-gray-600 text-sm">
                    Alamat: Jl. Semarang no 5, Malang, Jawa Timur, Indonesia
                </p>
                <p class="text-gray-600 text-sm">
                    Telp: <a href="tel:+999888777" class="text-green-700 hover:underline">+999 888 777</a><br />
                    Email: <a href="mailto:rofiq@gmail.com" class="text-green-700 hover:underline">rofiq@gmail.com</a>
                </p>
            </div>

            <!-- Link Navigasi -->
            <div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Navigasi</h3>
                <ul class="space-y-3 text-gray-700">
                    <li><a href="#" class="hover:text-green-700 transition">Beranda</a></li>
                    <li><a href="#" class="hover:text-green-700 transition">Tentang Kami</a></li>
                    <li><a href="#" class="hover:text-green-700 transition">Layanan</a></li>
                    <li><a href="#" class="hover:text-green-700 transition">Blog</a></li>
                    <li><a href="#" class="hover:text-green-700 transition">Kontak</a></li>
                </ul>
            </div>

            <!-- Bantuan & Dukungan -->
            <div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Bantuan & Dukungan</h3>
                <ul class="space-y-3 text-gray-700">
                    <li><a href="#" class="hover:text-green-700 transition">FAQ</a></li>
                    <li><a href="#" class="hover:text-green-700 transition">Panduan Perawatan</a></li>
                    <li><a href="#" class="hover:text-green-700 transition">Kebijakan Privasi</a></li>
                    <li><a href="#" class="hover:text-green-700 transition">Syarat & Ketentuan</a></li>
                </ul>
            </div>

            <!-- Ikuti Kami -->
            <div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Ikuti Kami</h3>
                <div class="flex space-x-6 text-green-700 text-3xl">
                    <a href="#" aria-label="Facebook" class="hover:text-green-900 transition"><i
                            class="ri-facebook-fill"></i></a>
                    <a href="#" aria-label="Twitter" class="hover:text-green-900 transition"><i
                            class="ri-twitter-fill"></i></a>
                    <a href="#" aria-label="Instagram" class="hover:text-green-900 transition"><i
                            class="ri-instagram-fill"></i></a>
                    <a href="#" aria-label="LinkedIn" class="hover:text-green-900 transition"><i
                            class="ri-linkedin-fill"></i></a>
                </div>
            </div>

        </div>

        <!-- Copyright -->
        <div class="border-t mb-[-50px] border-gray-200 mt-12 pt-6">
            <p class="text-center text-gray-600 text-sm">
                &copy; 2026 Rofiq Fadilah. All rights reserved.
            </p>
        </div>
    </section>

    <style>
        .faq-item.active {
            background-color: #3F634F;
        }

        .faq-item.active h3,
        .faq-item.active .faq-icon,
        .faq-item.active .faq-content {
            color: white;
        }
    </style>


<script src="{{ asset('js/home.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</body>

</html>
