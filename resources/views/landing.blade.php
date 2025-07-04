<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candice Kids - Cerdas Mandiri Ceria</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .glass-effect {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .gradient-text {
            background: linear-gradient(135deg, #f97316 0%, #0ea5e9 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-sky-200 via-purple-100 to-pink-100 text-gray-800 min-h-screen">
    <!-- Hero Section -->
    <header class="relative text-center p-4 lg:p-6">
        <!-- Sign In Button -->
        <a href="{{ route('login') }}" class="absolute top-4 lg:top-6 right-4 lg:right-6 glass-effect px-4 py-2 rounded-full text-sm font-semibold hover:bg-white/40 transition-all duration-300 shadow-lg z-10">
            🔐 Sign In
        </a>

        <!-- Hero Content -->
        <div class="pt-16 lg:pt-20">
            <div class="floating">
                <img src="{{ asset('img/pelangi.png') }}" alt="pelangi" class="mx-auto w-48 lg:w-72 h-auto" />
            </div>
            
            <h1 class="text-4xl lg:text-6xl font-bold gradient-text mt-4 mb-2">
                Candice <span class="text-sky-600">Kids</span>
            </h1>
            
            <p class="text-xl lg:text-3xl text-green-600 font-semibold mb-4">
                Cerdas Mandiri Ceria
            </p>
            
            <p class="mt-4 max-w-2xl mx-auto text-sm lg:text-base px-4 lg:px-0 leading-relaxed">
                Candice Kids menawarkan kemudahan kepada para Bunda sebagai tempat penitipan anak yang didukung dengan banyak keunggulan dan fasilitas yang sudah dipercaya banyak orang tua untuk sang buah hati tercinta!
            </p>
            
            <div class="floating mt-6">
                <img src="{{ asset('img/group-kids.png') }}" alt="Kids Group" class="mx-auto w-32 lg:w-48 h-auto">
            </div>
        </div>
    </header>

    <!-- Alasan Memilih Kami -->
    <section class="text-center mt-8 lg:mt-16 px-4 lg:px-6">
        <div class="glass-effect rounded-2xl p-6 lg:p-8 mb-8">
            <h2 class="text-xl lg:text-3xl font-bold bg-gradient-to-r from-orange-400 to-yellow-400 bg-clip-text text-transparent mb-6">
                ✨ Alasan Memilih Kami
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
                <!-- Card 1 -->
                <div class="glass-effect p-4 lg:p-6 rounded-2xl card-hover">
                    <div class="text-3xl mb-3">📚</div>
                    <h3 class="font-bold mb-3 text-sm lg:text-base">Kurikulum Berkualitas dan Adaptif</h3>
                    <p class="text-left text-xs lg:text-sm mb-3">Didesain oleh praktisi berpengalaman dan disesuaikan dengan tingkat perkembangan anak, mencakup:</p>
                    <ul class="list-disc text-left ml-4 text-xs lg:text-sm space-y-1">
                        <li>Pembinaan karakter positif</li>
                        <li>Pengenalan IPTEK</li>
                        <li>Pemahaman budaya & komunikasi positif</li>
                        <li>Perkembangan sosial dan lingkungan hidup</li>
                    </ul>
                </div>

                <!-- Card 2 -->
                <div class="glass-effect p-4 lg:p-6 rounded-2xl card-hover">
                    <div class="text-3xl mb-3">👩‍🏫</div>
                    <h3 class="font-bold mb-3 text-sm lg:text-base">Tenaga Pengajar Profesional dan Peduli</h3>
                    <ul class="list-disc text-left ml-4 text-xs lg:text-sm space-y-1">
                        <li>Ramah dan menyenangkan</li>
                        <li>Latar belakang pendidikan beragam</li>
                        <li>Mendapat pelatihan peningkatan kualitas</li>
                        <li>Dibimbing oleh pakar pendidikan</li>
                    </ul>
                </div>

                <!-- Card 3 -->
                <div class="glass-effect p-4 lg:p-6 rounded-2xl card-hover">
                    <div class="text-3xl mb-3">🏫</div>
                    <h3 class="font-bold mb-3 text-sm lg:text-base">Fasilitas Lengkap & Aman</h3>
                    <ul class="list-disc text-left ml-4 text-xs lg:text-sm space-y-1">
                        <li>Ruang belajar nyaman & atraktif</li>
                        <li>Fasilitas outdoor lengkap (perosotan, ayunan, dll)</li>
                        <li>Dokter umum & gigi</li>
                        <li>Snack, minuman, dan perpustakaan anak</li>
                        <li>Freeplay indoor & outdoor</li>
                    </ul>
                </div>

                <!-- Card 4 -->
                <div class="glass-effect p-4 lg:p-6 rounded-2xl card-hover">
                    <div class="text-3xl mb-3">🎯</div>
                    <h3 class="font-bold mb-3 text-sm lg:text-base">Program Pembelajaran yang Menyeluruh</h3>
                    <p class="text-left text-xs lg:text-sm mb-2 font-semibold">Untuk Anak:</p>
                    <ul class="list-disc text-left ml-4 text-xs lg:text-sm space-y-1 mb-3">
                        <li>Sosialisasi & karakter</li>
                        <li>Kemandirian</li>
                        <li>IPTEK dan olahraga</li>
                        <li>Perpustakaan anak</li>
                    </ul>
                    <p class="text-left text-xs lg:text-sm mb-2 font-semibold">Untuk Orang Tua:</p>
                    <ul class="list-disc text-left ml-4 text-xs lg:text-sm space-y-1">
                        <li>Parents meeting</li>
                        <li>Konsultasi perkembangan & kesehatan anak</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Pengayaan -->
    <section class="text-center mt-8 lg:mt-16 px-4 lg:px-6">
        <div class="glass-effect rounded-2xl p-6 lg:p-8">
            <h2 class="text-xl lg:text-3xl font-bold bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent mb-6">
                🎨 Program Pengayaan
            </h2>
            
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
                <div class="card-hover">
                    <img src="{{ asset('img/program1.png') }}" alt="Program 1" 
                         class="rounded-2xl w-full h-32 lg:h-40 object-cover shadow-lg hover:shadow-xl transition-all duration-300">
                </div>
                <div class="card-hover">
                    <img src="{{ asset('img/program2.png') }}" alt="Program 2" 
                         class="rounded-2xl w-full h-32 lg:h-40 object-cover shadow-lg hover:shadow-xl transition-all duration-300">
                </div>
                <div class="card-hover">
                    <img src="{{ asset('img/program3.png') }}" alt="Program 3" 
                         class="rounded-2xl w-full h-32 lg:h-40 object-cover shadow-lg hover:shadow-xl transition-all duration-300">
                </div>
                <div class="card-hover">
                    <img src="{{ asset('img/program4.png') }}" alt="Program 4" 
                         class="rounded-2xl w-full h-32 lg:h-40 object-cover shadow-lg hover:shadow-xl transition-all duration-300">
                </div>
            </div>
        </div>
    </section>

    <!-- Lokasi Kami -->
<<<<<<< HEAD
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
=======
    <section class="text-center mt-8 lg:mt-16 px-4 lg:px-6 pb-8">
        <div class="glass-effect rounded-2xl p-6 lg:p-8">
            <h2 class="text-xl lg:text-3xl font-bold bg-gradient-to-r from-green-400 to-blue-400 bg-clip-text text-transparent mb-6">
                📍 Lokasi Kami
            </h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8 items-center mx-auto max-w-6xl">
                <div class="space-y-4">
                    <div class="card-hover">
                        <img src="{{ asset('img/maps.png') }}" alt="Maps" 
                             class="w-full rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                    </div>
                    
                    <div class="glass-effect px-4 py-3 rounded-xl text-sm lg:text-base">
                        <p class="font-semibold">📍 Alamat:</p>
                        <p>59PP+QCV, Pandeyan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55161</p>
                    </div>
                    
                    <a href="#hubungi" 
                       class="inline-block glass-effect px-6 py-3 rounded-full hover:bg-white/40 transition-all duration-300 shadow-lg font-semibold">
                        📞 Hubungi Kami
                    </a>
                </div>
                
                <div class="flex justify-center">
                    <div class="floating">
                        <img src="{{ asset('img/kidsfooter.png') }}" alt="Kids Footer" 
                             class="w-40 lg:w-56 h-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-6 glass-effect mt-8">
        <p class="text-sm lg:text-base text-gray-700">
            © 2024 Candice Kids - Cerdas Mandiri Ceria. All rights reserved.
        </p>
    </footer>
>>>>>>> ec72212d0241cec5a9a55aaf3e673c7f32e7d189
</body>
</html>
