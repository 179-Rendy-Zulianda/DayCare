<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candice Kids - Cerdas Mandiri Ceria</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-sky-200 text-gray-800">
    <!-- Hero Section -->
    <header class="relative text-center p-6">
        <a href="{{ route('login') }}" class="absolute top-6 right-6 bg-yellow-100 px-4 py-2 rounded-full text-sm font-semibold hover:bg-yellow-200">Sign In</a>

        <img src="{{ asset('img/pelangi.png') }}" alt="pelangi" class="mx-auto" style="width: 280px; height: auto;" />
        <h1 class="text-6xl font-bold text-orange-500 mt-4">Candice <span class="text-sky-600">kids</span></h1>
        <p class="text-3xl text-green-400">Cerdas Mandiri Ceria</p>
        <p class="mt-4 max-w-2xl mx-auto text-sm md:text-base">Candice Kids menawarkan kemudahan kepada para Bunda sebagai tempat penitipan anak yang didukung dengan banyak keunggulan dan fasilitas yang sudah dipercaya banyak orang tua untuk sang buah hati tercinta!</p>
        <img src="{{ asset('img/group-kids.png') }}" alt="Kids Group" class="mx-auto" style="width: auto; height: 180px;">
    </header>

    <!-- Alasan Memilih Kami -->
    <section class="text-center mt-10">
        <h2 class="text-xl md:text-2xl font-bold bg-white inline-block px-6 py-2 rounded-full mb-6">Alasan Memilih Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 px-6">
            <div class="bg-white p-4 rounded-xl shadow text-sm">
                <h3 class="font-bold mb-2">Kurikulum Berkualitas dan Adaptif</h3>
                <p class="text-left">Didesain oleh praktisi berpengalaman dan disesuaikan dengan tingkat perkembangan anak, mencakup:</p>
                <ul class="list-disc text-left ml-4">
                    <li>Pembinaan karakter positif</li>
                    <li>Pengenalan IPTEK</li>
                    <li>Pemahaman budaya & komunikasi positif</li>
                    <li>Perkembangan sosial dan lingkungan hidup</li>
                </ul>
            </div>
            <div class="bg-white p-4 rounded-xl shadow text-sm">
                <h3 class="font-bold mb-2">Tenaga Pengajar Profesional dan Peduli</h3>
                <ul class="list-disc text-left ml-4">
                    <li>Ramah dan menyenangkan</li>
                    <li>Latar belakang pendidikan beragam</li>
                    <li>Mendapat pelatihan peningkatan kualitas</li>
                    <li>Dibimbing oleh pakar pendidikan</li>
                </ul>
            </div>
            <div class="bg-white p-4 rounded-xl shadow text-sm">
                <h3 class="font-bold mb-2">Fasilitas Lengkap & Aman</h3>
                <ul class="list-disc text-left ml-4">
                    <li>Ruang belajar nyaman & atraktif</li>
                    <li>Fasilitas outdoor lengkap (perosotan, ayunan, dll)</li>
                    <li>Dokter umum & gigi</li>
                    <li>Snack, minuman, dan perpustakaan anak</li>
                    <li>Freeplay indoor & outdoor</li>
                </ul>
            </div>
            <div class="bg-white p-4 rounded-xl shadow text-sm">
                <h3 class="font-bold mb-2">Program Pembelajaran yang Menyeluruh Untuk Anak:</h3>
                <ul class="list-disc text-left ml-4">
                    <li>Sosialisasi & karakter</li>
                    <li>Kemandirian</li>
                    <li>IPTEK dan olahraga</li>
                    <li>Perpustakaan anak</li>
                    <li>Untuk Orang Tua:</li>
                    <ul class="list-disc ml-6">
                        <li>Parents meeting</li>
                        <li>Konsultasi perkembangan & kesehatan anak</li>
                    </ul>
                </ul>
            </div>
        </div>
    </section>

    <!-- Program Pengayaan -->
    <section class="text-center mt-14">
        <h2 class="text-xl md:text-2xl font-bold bg-white inline-block px-6 py-2 rounded-full mb-6">Program Pengayaan</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 px-6">
            <img src="{{ asset('img/program1.png') }}" alt="Program 1" class="rounded-full w-40 h-40 mx-auto object-cover">
            <img src="{{ asset('img/program2.png') }}" alt="Program 2" class="rounded-full w-40 h-40 mx-auto object-cover">
            <img src="{{ asset('img/program3.png') }}" alt="Program 3" class="rounded-full w-40 h-40 mx-auto object-cover">
            <img src="{{ asset('img/program4.png') }}" alt="Program 4" class="rounded-full w-40 h-40 mx-auto object-cover">
        </div>
    </section>

    <!-- Lokasi Kami -->
    <section class="text-center mt-14 px-6">
        <h2 class="text-xl md:text-2xl font-bold bg-white inline-block px-6 py-2 rounded-full mb-4">Lokasi Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center mx-auto max-w-4xl">
            <div>
                <iframe 
                    src="https://www.google.com/maps?q=59PP%2BQCV,+Pandeyan,+Umbulharjo,+Yogyakarta&output=embed"
                    width="100%" height="250" style="border:0;" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <p class="mt-4 bg-white px-4 py-2 rounded-xl text-sm shadow">59PP+QCV, Pandeyan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55161</p>
                <a href="https://wa.me/6289633446296?text=Halo%20CandiceKids%2C%20saya%20ingin%20bertanya" class="mb-10 inline-block mt-4 bg-white px-6 py-2 rounded-full border hover:bg-gray-100">Hubungi Kami</a>
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('img/kidsfooter.png') }}" alt="Kids Footer" class="w-48 md:w-56">
            </div>
        </div>
    </section>
</body>
</html>
