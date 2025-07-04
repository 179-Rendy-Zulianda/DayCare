<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi - CandiceKids</title>
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
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        .mobile-menu {
            transform: translateX(-100%);
            transition: transform 0.3s ease-in-out;
        }
        .mobile-menu.open {
            transform: translateX(0);
        }
        .sidebar-item {
            transition: all 0.3s ease;
        }
        .sidebar-item:hover {
            background-color: rgba(254, 240, 138, 0.8);
        }
        .notification-item {
            transition: all 0.3s ease;
        }
        .notification-item:hover {
            background-color: rgba(254, 240, 138, 0.3);
            transform: translateX(5px);
        }
        .emergency-pulse {
            animation: emergency-pulse 2s infinite;
        }
        @keyframes emergency-pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-sky-200 via-purple-100 to-pink-100 font-sans min-h-screen">
    <!-- Mobile Menu Toggle -->
    <div class="lg:hidden fixed top-4 left-4 z-50">
        <button id="mobileMenuBtn" class="bg-white/80 backdrop-blur-sm p-3 rounded-full shadow-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <div class="flex min-h-screen">
        <!-- Sidebar - Desktop -->
        <aside class="hidden lg:block bg-white/80 backdrop-blur-sm w-64 p-6 shadow-xl">
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-orange-600">Candice<span class="text-cyan-700">Kids</span></h1>
                <p class="text-xs text-pink-500 font-medium">Cerdas Mandiri Ceria</p>
            </div>

            <ul class="space-y-3">
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 w-full">
                        <span class="text-xl">🏠</span>
                        <span class="text-gray-700 hover:text-orange-600">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('daftar') }}" class="flex items-center gap-3 w-full">
                        <span class="text-xl">📄</span>
                        <span class="text-gray-700 hover:text-orange-600">Daftar</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('absen') }}" class="flex items-center gap-3 w-full">
                        <span class="text-xl">📖</span>
                        <span class="text-gray-700 hover:text-orange-600">Absen Anak</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('aktivitas') }}" class="flex items-center gap-3 w-full">
                        <span class="text-xl">📝</span>
                        <span class="text-gray-700 hover:text-orange-600">Aktivitas Harian</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('chat') }}" class="flex items-center gap-3 w-full">
                        <span class="text-xl">💬</span>
                        <span class="text-gray-700 hover:text-orange-600">Chat Pengasuh</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('tagihan') }}" class="flex items-center gap-3 w-full">
                        <span class="text-xl">💳</span>
                        <span class="text-gray-700 hover:text-orange-600">Tagihan & Pembayaran</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('perkembangan') }}" class="flex items-center gap-3 w-full">
                        <span class="text-xl">📈</span>
                        <span class="text-gray-700 hover:text-orange-600">Perkembangan Anak</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('jadwal') }}" class="flex items-center gap-3 w-full">
                        <span class="text-xl">📅</span>
                        <span class="text-gray-700 hover:text-orange-600">Jadwal</span>
                    </a>
                </li>
                <li class="bg-gradient-to-r from-red-300 to-orange-300 rounded-xl px-4 py-3 flex items-center gap-3 shadow-md">
                    <a href="{{ route('notifikasi') }}" class="flex items-center gap-3 w-full">
                        <span class="text-xl">🚨</span>
                        <span class="font-semibold text-gray-800">Notifikasi Darurat</span>
                    </a>
                </li>
                <li class="hover:bg-red-100 rounded-xl px-4 py-3 flex items-center gap-3 transition-all duration-300">
                    <form method="POST" action="{{ route('logout') }}" class="flex items-center gap-3 w-full">
                        @csrf
                        <span class="text-xl">🚪</span>
                        <button type="submit" class="text-gray-700 hover:text-red-600 w-full text-left">Log Out</button>
                    </form>
                </li>
            </ul>
        </aside>

        <!-- Mobile Sidebar -->
        <aside id="mobileSidebar" class="mobile-menu fixed inset-y-0 left-0 z-40 w-64 bg-white/95 backdrop-blur-sm p-6 shadow-2xl lg:hidden">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-xl font-bold text-orange-600">Candice<span class="text-cyan-700">Kids</span></h1>
                <button id="closeMobileMenu" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <ul class="space-y-2">
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 w-full">
                        <span class="text-lg">🏠</span>
                        <span class="text-gray-700">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('daftar') }}" class="flex items-center gap-3 w-full">
                        <span class="text-lg">📄</span>
                        <span class="text-gray-700">Daftar</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('absen') }}" class="flex items-center gap-3 w-full">
                        <span class="text-lg">📖</span>
                        <span class="text-gray-700">Absen Anak</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('aktivitas') }}" class="flex items-center gap-3 w-full">
                        <span class="text-lg">📝</span>
                        <span class="text-gray-700">Aktivitas Harian</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('chat') }}" class="flex items-center gap-3 w-full">
                        <span class="text-lg">💬</span>
                        <span class="text-gray-700">Chat Pengasuh</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('tagihan') }}" class="flex items-center gap-3 w-full">
                        <span class="text-lg">💳</span>
                        <span class="text-gray-700">Tagihan & Pembayaran</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('perkembangan') }}" class="flex items-center gap-3 w-full">
                        <span class="text-lg">📈</span>
                        <span class="text-gray-700">Perkembangan Anak</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('jadwal') }}" class="flex items-center gap-3 w-full">
                        <span class="text-lg">📅</span>
                        <span class="text-gray-700">Jadwal</span>
                    </a>
                </li>
                <li class="bg-gradient-to-r from-red-300 to-orange-300 rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('notifikasi') }}" class="flex items-center gap-3 w-full">
                        <span class="text-lg">🚨</span>
                        <span class="font-semibold text-gray-800">Notifikasi Darurat</span>
                    </a>
                </li>
                <li class="hover:bg-red-100 rounded-xl px-4 py-3 flex items-center gap-3">
                    <form method="POST" action="{{ route('logout') }}" class="flex items-center gap-3 w-full">
                        @csrf
                        <span class="text-lg">🚪</span>
                        <button type="submit" class="text-gray-700 w-full text-left">Log Out</button>
                    </form>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-4 lg:p-6 pt-20 lg:pt-6">
            <!-- Header for Mobile -->
            <div class="lg:hidden mb-6 text-center">
                <h1 class="text-2xl font-bold text-orange-600">Candice<span class="text-cyan-700">Kids</span></h1>
                <p class="text-sm text-pink-500 font-medium">Cerdas Mandiri Ceria</p>
            </div>

            <div class="glass-effect rounded-2xl p-6 lg:p-8 card-hover">
                <!-- Header -->
                <div class="text-center mb-6 lg:mb-8">
                    <h1 class="text-2xl lg:text-3xl font-bold text-red-600 mb-4">🚨 Notifikasi Darurat</h1>
                    
                    <div class="glass-effect rounded-xl px-6 py-3 mb-4 inline-block emergency-pulse">
                        <strong class="text-red-700 text-sm lg:text-base">⚠️ Notifikasi Darurat/Penting</strong>
                    </div>
                    
                    <div class="mt-4">
                        <img src="{{ asset('img/danger.png') }}" alt="Danger Icon" 
                             class="mx-auto w-12 h-12 lg:w-16 lg:h-16 emergency-pulse">
                    </div>
                </div>
                
                <!-- Daftar Notifikasi -->
                <div class="space-y-4 lg:space-y-6">
                    <!-- Notifikasi 1 -->
                    <div class="notification-item glass-effect rounded-xl p-4 lg:p-6 border-l-4 border-red-400">
                        <div class="flex items-start gap-3">
                            <div class="text-2xl lg:text-3xl">🤒</div>
                            <div class="flex-1">
                                <h3 class="font-bold text-lg lg:text-xl mb-2 text-red-700">Anak Sedang Sakit</h3>
                                <p class="mb-3 text-sm lg:text-base text-gray-700 leading-relaxed">
                                    Anak anda mengalami demam, Mohon segera di jemput
                                </p>
                                <div class="flex items-center gap-2">
                                    <span class="text-xs lg:text-sm text-gray-500">📅 11 Juni 2025</span>
                                    <span class="bg-red-100 text-red-800 px-2 py-1 rounded-full text-xs font-medium">URGENT</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Notifikasi 2 -->
                    <div class="notification-item glass-effect rounded-xl p-4 lg:p-6 border-l-4 border-yellow-400">
                        <div class="flex items-start gap-3">
                            <div class="text-2xl lg:text-3xl">🌧️</div>
                            <div class="flex-1">
                                <h3 class="font-bold text-lg lg:text-xl mb-2 text-yellow-700">Kegiatan Outdoor</h3>
                                <p class="mb-3 text-sm lg:text-base text-gray-700 leading-relaxed">
                                    Tolong bawa perlengkapan hujan untuk kegiatan outdoor
                                </p>
                                <div class="flex items-center gap-2">
                                    <span class="text-xs lg:text-sm text-gray-500">📅 21 Mei 2025</span>
                                    <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs font-medium">INFO</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Notifikasi 3 (Tambahan untuk demo) -->
                    <div class="notification-item glass-effect rounded-xl p-4 lg:p-6 border-l-4 border-blue-400">
                        <div class="flex items-start gap-3">
                            <div class="text-2xl lg:text-3xl">🎉</div>
                            <div class="flex-1">
                                <h3 class="font-bold text-lg lg:text-xl mb-2 text-blue-700">Peringatan Hari Anak</h3>
                                <p class="mb-3 text-sm lg:text-base text-gray-700 leading-relaxed">
                                    Besok akan ada perayaan Hari Anak Nasional dengan berbagai kegiatan seru
                                </p>
                                <div class="flex items-center gap-2">
                                    <span class="text-xs lg:text-sm text-gray-500">📅 23 Juli 2025</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs font-medium">EVENT</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="mt-8 text-center space-y-4">
                    <button class="glass-effect text-red-600 font-semibold px-6 py-3 rounded-full hover:bg-white/40 transition-all duration-300 shadow-lg">
                        🔔 Mark All as Read
                    </button>
                    
                    <div>
                        <button class="bg-gradient-to-r from-red-400 to-orange-400 text-white font-bold px-8 py-3 rounded-full hover:from-red-500 hover:to-orange-500 transition-all duration-300 shadow-lg">
                            📞 Hubungi Pengasuh
                        </button>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobileOverlay" class="fixed inset-0 bg-black/50 z-30 lg:hidden hidden"></div>

    <script>
        // Mobile menu functionality
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileSidebar = document.getElementById('mobileSidebar');
        const closeMobileMenu = document.getElementById('closeMobileMenu');
        const mobileOverlay = document.getElementById('mobileOverlay');

        function openMobileMenu() {
            mobileSidebar.classList.add('open');
            mobileOverlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeMobileMenuFunc() {
            mobileSidebar.classList.remove('open');
            mobileOverlay.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        mobileMenuBtn.addEventListener('click', openMobileMenu);
        closeMobileMenu.addEventListener('click', closeMobileMenuFunc);
        mobileOverlay.addEventListener('click', closeMobileMenuFunc);

        // Close menu when clicking on links
        const mobileLinks = mobileSidebar.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', closeMobileMenuFunc);
        });
    </script>
</body>
</html>