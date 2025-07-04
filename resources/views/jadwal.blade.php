<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal - CandiceKids</title>
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
        .schedule-item {
            transition: all 0.3s ease;
        }
        .schedule-item:hover {
            background-color: rgba(254, 240, 138, 0.3);
            transform: translateX(5px);
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
                <li class="bg-gradient-to-r from-yellow-300 to-orange-300 rounded-xl px-4 py-3 flex items-center gap-3 shadow-md">
                    <a href="{{ route('jadwal') }}" class="flex items-center gap-3 w-full">
                        <span class="text-xl">📅</span>
                        <span class="font-semibold text-gray-800">Jadwal</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('notifikasi') }}" class="flex items-center gap-3 w-full">
                        <span class="text-xl">🚨</span>
                        <span class="text-gray-700 hover:text-orange-600">Notifikasi Darurat</span>
                    </a>
                </li>
                <li class="hover:bg-red-100 rounded-xl px-4 py-3 flex items-center gap-3">
                    <form method="POST" action="{{ route('logout') }}" class="flex items-center gap-3 w-full">
                        @csrf
                        <span class="text-xl">🚪</span>
                        <button type="submit" class="text-gray-700 w-full text-left">Log Out</button>
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
                <li class="bg-gradient-to-r from-yellow-300 to-orange-300 rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('jadwal') }}" class="flex items-center gap-3 w-full">
                        <span class="text-lg">📅</span>
                        <span class="font-semibold text-gray-800">Jadwal</span>
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

            <div class="glass-effect rounded-2xl p-6 lg:p-8 card-hover">
                <!-- Header -->
                <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center mb-6">
                    <h1 class="text-2xl lg:text-3xl font-bold text-orange-600 mb-2 lg:mb-0">Lihat Jadwal</h1>
                    <div class="text-sm lg:text-base text-gray-500 bg-white/50 px-4 py-2 rounded-full">
                        📅 Jadwal Harian
                    </div>
                </div>

                <!-- Schedule Cards for Mobile -->
                <div class="lg:hidden space-y-4">
                    <div class="schedule-item bg-white/60 backdrop-blur-sm rounded-xl p-4 border-l-4 border-blue-400">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="text-2xl">🌅</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">07:30 - 08:00</span>
                        </div>
                        <p class="font-semibold text-gray-800">Kedatangan</p>
                    </div>

                    <div class="schedule-item bg-white/60 backdrop-blur-sm rounded-xl p-4 border-l-4 border-green-400">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="text-2xl">🎮</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">08:00 - 09:00</span>
                        </div>
                        <p class="font-semibold text-gray-800">Free play dan toilet training</p>
                    </div>

                    <div class="schedule-item bg-white/60 backdrop-blur-sm rounded-xl p-4 border-l-4 border-yellow-400">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="text-2xl">🍎</span>
                            <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium">09:00 - 09:30</span>
                        </div>
                        <p class="font-semibold text-gray-800">Snack time, pijakan sebelum main/circle time</p>
                    </div>

                    <div class="schedule-item bg-white/60 backdrop-blur-sm rounded-xl p-4 border-l-4 border-purple-400">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="text-2xl">📚</span>
                            <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium">09:30 - 10:30</span>
                        </div>
                        <p class="font-semibold text-gray-800">Class Activity</p>
                    </div>

                    <div class="schedule-item bg-white/60 backdrop-blur-sm rounded-xl p-4 border-l-4 border-indigo-400">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="text-2xl">🎯</span>
                            <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm font-medium">10:30 - 11:00</span>
                        </div>
                        <p class="font-semibold text-gray-800">Closing Time</p>
                    </div>

                    <div class="schedule-item bg-white/60 backdrop-blur-sm rounded-xl p-4 border-l-4 border-red-400">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="text-2xl">🍽️</span>
                            <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-medium">11:00 - 12:30</span>
                        </div>
                        <p class="font-semibold text-gray-800">Lunch Time dan persiapan tidur siang</p>
                    </div>

                    <div class="schedule-item bg-white/60 backdrop-blur-sm rounded-xl p-4 border-l-4 border-gray-400">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="text-2xl">😴</span>
                            <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm font-medium">12:30 - 14:30</span>
                        </div>
                        <p class="font-semibold text-gray-800">Rest Time</p>
                    </div>

                    <div class="schedule-item bg-white/60 backdrop-blur-sm rounded-xl p-4 border-l-4 border-teal-400">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="text-2xl">🚿</span>
                            <span class="bg-teal-100 text-teal-800 px-3 py-1 rounded-full text-sm font-medium">14:30 - 15:00</span>
                        </div>
                        <p class="font-semibold text-gray-800">Mandi</p>
                    </div>

                    <div class="schedule-item bg-white/60 backdrop-blur-sm rounded-xl p-4 border-l-4 border-pink-400">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="text-2xl">🎪</span>
                            <span class="bg-pink-100 text-pink-800 px-3 py-1 rounded-full text-sm font-medium">15:00 - 16:30</span>
                        </div>
                        <p class="font-semibold text-gray-800">Free play dan persiapan pulang</p>
                    </div>
                </div>

                <!-- Table for Desktop -->
                <div class="hidden lg:block">
                    <div class="glass-effect rounded-2xl overflow-hidden shadow-lg">
                        <div class="overflow-x-auto">
                            <table class="min-w-full">
                                <thead class="bg-gradient-to-r from-orange-400 to-yellow-400">
                                    <tr>
                                        <th class="py-4 px-6 text-white font-semibold text-left">Waktu</th>
                                        <th class="py-4 px-6 text-white font-semibold text-left">Kegiatan</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white/80 backdrop-blur-sm">
                                    <tr class="hover:bg-yellow-50/80 transition-colors border-b border-gray-100">
                                        <td class="py-4 px-6 font-medium text-gray-800">07:30 - 08:00</td>
                                        <td class="py-4 px-6 text-gray-700">🌅 Kedatangan</td>
                                    </tr>
                                    <tr class="hover:bg-yellow-50/80 transition-colors border-b border-gray-100">
                                        <td class="py-4 px-6 font-medium text-gray-800">08:00 - 09:00</td>
                                        <td class="py-4 px-6 text-gray-700">🎮 Free play dan toilet training</td>
                                    </tr>
                                    <tr class="hover:bg-yellow-50/80 transition-colors border-b border-gray-100">
                                        <td class="py-4 px-6 font-medium text-gray-800">09:00 - 09:30</td>
                                        <td class="py-4 px-6 text-gray-700">🍎 Snack time, pijakan sebelum main/circle time</td>
                                    </tr>
                                    <tr class="hover:bg-yellow-50/80 transition-colors border-b border-gray-100">
                                        <td class="py-4 px-6 font-medium text-gray-800">09:30 - 10:30</td>
                                        <td class="py-4 px-6 text-gray-700">📚 Class Activity</td>
                                    </tr>
                                    <tr class="hover:bg-yellow-50/80 transition-colors border-b border-gray-100">
                                        <td class="py-4 px-6 font-medium text-gray-800">10:30 - 11:00</td>
                                        <td class="py-4 px-6 text-gray-700">🎯 Closing Time</td>
                                    </tr>
                                    <tr class="hover:bg-yellow-50/80 transition-colors border-b border-gray-100">
                                        <td class="py-4 px-6 font-medium text-gray-800">11:00 - 12:30</td>
                                        <td class="py-4 px-6 text-gray-700">🍽️ Lunch Time dan persiapan tidur siang</td>
                                    </tr>
                                    <tr class="hover:bg-yellow-50/80 transition-colors border-b border-gray-100">
                                        <td class="py-4 px-6 font-medium text-gray-800">12:30 - 14:30</td>
                                        <td class="py-4 px-6 text-gray-700">😴 Rest Time</td>
                                    </tr>
                                    <tr class="hover:bg-yellow-50/80 transition-colors border-b border-gray-100">
                                        <td class="py-4 px-6 font-medium text-gray-800">14:30 - 15:00</td>
                                        <td class="py-4 px-6 text-gray-700">🚿 Mandi</td>
                                    </tr>
                                    <tr class="hover:bg-yellow-50/80 transition-colors">
                                        <td class="py-4 px-6 font-medium text-gray-800">15:00 - 16:30</td>
                                        <td class="py-4 px-6 text-gray-700">🎪 Free play dan persiapan pulang</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
