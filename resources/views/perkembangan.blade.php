<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkembangan Anak - CandiceKids</title>
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
        .skill-category {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .development-card {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
            border: 2px solid #f59e0b;
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
                <li class="bg-gradient-to-r from-yellow-300 to-orange-300 rounded-xl px-4 py-3 flex items-center gap-3 shadow-md">
                    <a href="{{ route('perkembangan') }}" class="flex items-center gap-3 w-full">
                        <span class="text-xl">📈</span>
                        <span class="font-semibold text-gray-800">Perkembangan Anak</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('jadwal') }}" class="flex items-center gap-3 w-full">
                        <span class="text-xl">📅</span>
                        <span class="text-gray-700 hover:text-orange-600">Jadwal</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('notifikasi') }}" class="flex items-center gap-3 w-full">
                        <span class="text-xl">🚨</span>
                        <span class="text-gray-700 hover:text-orange-600">Notifikasi Darurat</span>
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
                <li class="bg-gradient-to-r from-yellow-300 to-orange-300 rounded-xl px-4 py-3 flex items-center gap-3 shadow-md">
                    <a href="{{ route('perkembangan') }}" class="flex items-center gap-3 w-full">
                        <span class="text-lg">📈</span>
                        <span class="font-semibold text-gray-800">Perkembangan Anak</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('jadwal') }}" class="flex items-center gap-3 w-full">
                        <span class="text-lg">📅</span>
                        <span class="text-gray-700">Jadwal</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('notifikasi') }}" class="flex items-center gap-3 w-full">
                        <span class="text-lg">🚨</span>
                        <span class="text-gray-700">Notifikasi Darurat</span>
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

            <div class="glass-effect rounded-2xl shadow-xl p-4 sm:p-6 lg:p-8 h-full">
                <!-- Header -->
                <div class="border-b border-gray-200 pb-4 mb-6">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="text-3xl sm:text-4xl">📈</span>
                        <div>
                            <h1 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-800">Perkembangan Anak</h1>
                            <p class="text-sm sm:text-base text-gray-600">Laporan Perkembangan Anak</p>
                        </div>
                    </div>
                </div>
                
                <!-- Data Perkembangan -->
                <div class="development-card rounded-2xl p-4 sm:p-6 space-y-4 sm:space-y-6">
                    <!-- Child Selector -->
                    <div class="relative">
                        <button class="child-name text-lg sm:text-xl bg-white/80 backdrop-blur-sm px-4 py-3 rounded-xl focus:outline-none flex items-center justify-between w-full sm:w-auto border-2 border-orange-200 hover:border-orange-300 transition-colors" onclick="toggleDropdown()">
                            <div class="flex items-center gap-3">
                                <span class="text-2xl">👶</span>
                                <span class="font-semibold text-gray-800">Nien Samiati</span>
                            </div>
                            <span class="text-orange-600">▼</span>
                        </button>
                        <div id="dropdown" class="hidden absolute bg-white/90 backdrop-blur-sm shadow-xl rounded-xl mt-2 w-full sm:w-64 z-50 border border-gray-200">
                            <ul class="py-2">
                                <li class="px-4 py-3 hover:bg-orange-100 cursor-pointer flex items-center gap-3 transition-colors">
                                    <span class="text-lg">👶</span>
                                    <span class="font-medium">Nien Samiati</span>
                                </li>
                                <li class="px-4 py-3 hover:bg-orange-100 cursor-pointer flex items-center gap-3 transition-colors">
                                    <span class="text-lg">👧</span>
                                    <span class="font-medium">Anak Lain</span>
                                </li>
                                <li class="px-4 py-3 hover:bg-orange-100 cursor-pointer flex items-center gap-3 transition-colors border-t border-gray-200">
                                    <span class="text-lg">➕</span>
                                    <span class="font-medium text-orange-600">Tambah Anak</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Development Content -->
                    <div class="flex flex-col lg:flex-row gap-4 sm:gap-6">
                        <!-- Image Section -->
                        <div class="flex-shrink-0">
                            <img src="{{ asset('img/perkembangan.png') }}" alt="Perkembangan Anak" 
                                 class="w-full sm:w-60 lg:w-80 h-auto rounded-2xl shadow-lg border-4 border-orange-200">
                        </div>
                        
                        <!-- Skills Section -->
                        <div class="flex-1 glass-effect rounded-2xl p-4 sm:p-6 border-2 border-orange-200">
                            <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                                <span class="text-2xl">🎯</span>
                                Kemampuan Anak
                            </h3>
                            
                            <div class="space-y-4 sm:space-y-6">
                                <!-- Motor Skills -->
                                <div class="bg-white/60 rounded-xl p-3 sm:p-4 border-l-4 border-blue-500">
                                    <h4 class="skill-category text-base sm:text-lg font-bold mb-2 flex items-center gap-2">
                                        <span class="text-xl">🏃‍♀️</span>
                                        Perkembangan Kemampuan Motorik
                                    </h4>
                                    <p class="text-sm sm:text-base text-gray-700">Nien semakin baik dalam menggambar dan mewarnai</p>
                                </div>
                                
                                <!-- Language Skills -->
                                <div class="bg-white/60 rounded-xl p-3 sm:p-4 border-l-4 border-green-500">
                                    <h4 class="skill-category text-base sm:text-lg font-bold mb-2 flex items-center gap-2">
                                        <span class="text-xl">🗣️</span>
                                        Kemampuan Bahasa
                                    </h4>
                                    <p class="text-sm sm:text-base text-gray-700">Kosakata Nien bertambah, berbicara dalam kalimat sederhana</p>
                                </div>
                                
                                <!-- Social Skills -->
                                <div class="bg-white/60 rounded-xl p-3 sm:p-4 border-l-4 border-purple-500">
                                    <h4 class="skill-category text-base sm:text-lg font-bold mb-2 flex items-center gap-2">
                                        <span class="text-xl">👥</span>
                                        Kemampuan Sosial
                                    </h4>
                                    <p class="text-sm sm:text-base text-gray-700">Nien suka bermain bersama teman-temannya</p>
                                </div>
                                
                                <!-- Independence -->
                                <div class="bg-white/60 rounded-xl p-3 sm:p-4 border-l-4 border-orange-500">
                                    <h4 class="skill-category text-base sm:text-lg font-bold mb-2 flex items-center gap-2">
                                        <span class="text-xl">🌟</span>
                                        Kemandirian
                                    </h4>
                                    <p class="text-sm sm:text-base text-gray-700">Nien dapat makan sendiri dengan minimal bantuan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Mobile menu toggle
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            const mobileSidebar = document.getElementById('mobileSidebar');
            mobileSidebar.classList.toggle('mobile-menu');
            mobileSidebar.classList.toggle('mobile-menu.open');
        });

        // Close sidebar when clicking overlay
        document.getElementById('closeMobileMenu').addEventListener('click', function() {
            const mobileSidebar = document.getElementById('mobileSidebar');
            mobileSidebar.classList.remove('mobile-menu');
            mobileSidebar.classList.remove('mobile-menu.open');
        });

        // Dropdown toggle
        function toggleDropdown() {
            const dropdown = document.getElementById('dropdown');
            dropdown.classList.toggle('hidden');
        }

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const dropdown = document.getElementById('dropdown');
            const button = document.querySelector('.child-name');
            
            if (!button.contains(event.target) && !dropdown.contains(event.target)) {
                dropdown.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
