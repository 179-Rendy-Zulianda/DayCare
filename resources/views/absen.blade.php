<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Anak - CandiceKids</title>
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
                <li class="bg-gradient-to-r from-yellow-300 to-orange-300 rounded-xl px-4 py-3 flex items-center gap-3 shadow-md">
                    <a href="{{ route('absen') }}" class="flex items-center gap-3 w-full">
                        <span class="text-xl">📖</span>
                        <span class="font-semibold text-gray-800">Absen Anak</span>
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
                <li class="bg-gradient-to-r from-yellow-300 to-orange-300 rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('absen') }}" class="flex items-center gap-3 w-full">
                        <span class="text-lg">📖</span>
                        <span class="font-semibold text-gray-800">Absen Anak</span>
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

            <h1 class="text-2xl lg:text-3xl font-bold text-center mb-6 lg:mb-8 text-gray-800">Absensi Anak</h1>

            <!-- Filter Section -->
            <div class="glass-effect rounded-2xl p-4 lg:p-6 mb-6">
                <div class="flex flex-col sm:flex-row justify-center gap-4 items-end">
                    <div class="flex-1">
                        <label for="tanggal_awal" class="block mb-2 text-sm font-semibold text-gray-700">Tanggal Awal</label>
                        <input type="date" id="tanggal_awal" name="tanggal_awal" 
                               class="w-full rounded-xl px-4 py-3 bg-white/80 backdrop-blur-sm border border-white/20 focus:outline-none focus:ring-2 focus:ring-orange-400 transition-all" 
                               value="{{ date('Y-m-d') }}">
                    </div>
                    <div class="flex-1">
                        <label for="tanggal_akhir" class="block mb-2 text-sm font-semibold text-gray-700">Tanggal Akhir</label>
                        <input type="date" id="tanggal_akhir" name="tanggal_akhir" 
                               class="w-full rounded-xl px-4 py-3 bg-white/80 backdrop-blur-sm border border-white/20 focus:outline-none focus:ring-2 focus:ring-orange-400 transition-all" 
                               value="{{ date('Y-m-d') }}">
                    </div>
                    <button class="bg-gradient-to-r from-orange-400 to-yellow-400 hover:from-orange-500 hover:to-yellow-500 text-white font-semibold px-6 py-3 rounded-xl transition-all duration-300 shadow-lg card-hover">
                        Tampilkan
                    </button>
                </div>
            </div>

            <!-- Table Section -->
            <div class="glass-effect rounded-2xl overflow-hidden shadow-lg">
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead class="bg-gradient-to-r from-orange-400 to-yellow-400">
                            <tr>
                                <th class="py-4 px-4 text-white font-semibold text-sm lg:text-base">Tanggal</th>
                                <th class="py-4 px-4 text-white font-semibold text-sm lg:text-base">Status</th>
                                <th class="py-4 px-4 text-white font-semibold text-sm lg:text-base">Waktu Masuk</th>
                                <th class="py-4 px-4 text-white font-semibold text-sm lg:text-base">Waktu Keluar</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white/80 backdrop-blur-sm">
                            <tr class="hover:bg-yellow-50/80 transition-colors border-b border-gray-100">
                                <td class="py-4 px-4 text-sm lg:text-base">10/04/2024</td>
                                <td class="py-4 px-4">
                                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-xs font-medium">Izin</span>
                                </td>
                                <td class="py-4 px-4 text-sm lg:text-base">08:10</td>
                                <td class="py-4 px-4 text-sm lg:text-base">17:10</td>
                            </tr>
                            <tr class="hover:bg-yellow-50/80 transition-colors border-b border-gray-100">
                                <td class="py-4 px-4 text-sm lg:text-base">15/05/2024</td>
                                <td class="py-4 px-4">
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-medium">Hadir</span>
                                </td>
                                <td class="py-4 px-4 text-sm lg:text-base">07:45</td>
                                <td class="py-4 px-4 text-sm lg:text-base">16:00</td>
                            </tr>
                            <tr class="hover:bg-yellow-50/80 transition-colors border-b border-gray-100">
                                <td class="py-4 px-4 text-sm lg:text-base">23/02/2024</td>
                                <td class="py-4 px-4">
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-medium">Hadir</span>
                                </td>
                                <td class="py-4 px-4 text-sm lg:text-base">07:09</td>
                                <td class="py-4 px-4 text-sm lg:text-base">16:30</td>
                            </tr>
                            <tr class="hover:bg-yellow-50/80 transition-colors border-b border-gray-100">
                                <td class="py-4 px-4 text-sm lg:text-base">15/03/2024</td>
                                <td class="py-4 px-4">
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-medium">Hadir</span>
                                </td>
                                <td class="py-4 px-4 text-sm lg:text-base">07:15</td>
                                <td class="py-4 px-4 text-sm lg:text-base">16:05</td>
                            </tr>
                            <tr class="hover:bg-yellow-50/80 transition-colors">
                                <td class="py-4 px-4 text-sm lg:text-base">17/04/2024</td>
                                <td class="py-4 px-4">
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-medium">Hadir</span>
                                </td>
                                <td class="py-4 px-4 text-sm lg:text-base">08:00</td>
                                <td class="py-4 px-4 text-sm lg:text-base">15:24</td>
                            </tr>
                        </tbody>
                    </table>
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