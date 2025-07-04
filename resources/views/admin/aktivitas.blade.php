<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Aktivitas - Admin CandiceKids</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .glass-effect { background: rgba(255,255,255,0.25); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.18); }
        .card-hover { transition: all 0.3s ease; }
        .card-hover:hover { transform: translateY(-2px); box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); }
        .mobile-menu { transform: translateX(-100%); transition: transform 0.3s ease-in-out; }
        .mobile-menu.open { transform: translateX(0); }
        .sidebar-item { transition: all 0.3s ease; }
        .sidebar-item:hover { background-color: rgba(254,240,138,0.8); }
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
                <p class="text-xs text-pink-500 font-medium">Admin Panel</p>
            </div>
            <ul class="space-y-3">
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 w-full">
                        <span class="text-xl">🛠️</span>
                        <span class="text-gray-700 hover:text-orange-600">Dashboard Admin</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('admin.user') }}" class="flex items-center gap-3 w-full">
                        <span class="text-xl">👤</span>
                        <span class="text-gray-700 hover:text-orange-600">Data User</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('admin.anak') }}" class="flex items-center gap-3 w-full">
                        <span class="text-xl">🧒</span>
                        <span class="text-gray-700 hover:text-orange-600">Data Anak</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('admin.tagihan') }}" class="flex items-center gap-3 w-full">
                        <span class="text-xl">💳</span>
                        <span class="text-gray-700 hover:text-orange-600">Data Tagihan</span>
                    </a>
                </li>
                <li class="bg-gradient-to-r from-yellow-300 to-orange-300 rounded-xl px-4 py-3 flex items-center gap-3 shadow-md">
                    <a href="{{ route('admin.aktivitas') }}" class="flex items-center gap-3 w-full">
                        <span class="text-xl">📝</span>
                        <span class="font-semibold text-gray-800">Data Aktivitas</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('admin.notifikasi') }}" class="flex items-center gap-3 w-full">
                        <span class="text-xl">🚨</span>
                        <span class="text-gray-700 hover:text-orange-600">Data Notifikasi</span>
                    </a>
                </li>
                <li class="hover:bg-red-100 rounded-xl px-4 py-3 flex items-center gap-3 transition-all duration-300">
                    <form method="POST" action="#" class="flex items-center gap-3 w-full">
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
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 w-full">
                        <span class="text-lg">🛠️</span>
                        <span class="text-gray-700">Dashboard Admin</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('admin.user') }}" class="flex items-center gap-3 w-full">
                        <span class="text-lg">👤</span>
                        <span class="text-gray-700">Data User</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('admin.anak') }}" class="flex items-center gap-3 w-full">
                        <span class="text-lg">🧒</span>
                        <span class="text-gray-700">Data Anak</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('admin.tagihan') }}" class="flex items-center gap-3 w-full">
                        <span class="text-lg">💳</span>
                        <span class="text-gray-700">Data Tagihan</span>
                    </a>
                </li>
                <li class="bg-gradient-to-r from-yellow-300 to-orange-300 rounded-xl px-4 py-3 flex items-center gap-3 shadow-md">
                    <a href="{{ route('admin.aktivitas') }}" class="flex items-center gap-3 w-full">
                        <span class="text-lg">📝</span>
                        <span class="font-semibold text-gray-800">Data Aktivitas</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-xl px-4 py-3 flex items-center gap-3">
                    <a href="{{ route('admin.notifikasi') }}" class="flex items-center gap-3 w-full">
                        <span class="text-lg">🚨</span>
                        <span class="text-gray-700">Data Notifikasi</span>
                    </a>
                </li>
                <li class="hover:bg-red-100 rounded-xl px-4 py-3 flex items-center gap-3">
                    <form method="POST" action="#" class="flex items-center gap-3 w-full">
                        <span class="text-lg">🚪</span>
                        <button type="submit" class="text-gray-700 w-full text-left">Log Out</button>
                    </form>
                </li>
            </ul>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 p-4 lg:p-10 pt-20 lg:pt-10">
            <div class="lg:hidden mb-6 text-center">
                <h1 class="text-2xl font-bold text-orange-600">Candice<span class="text-cyan-700">Kids</span></h1>
                <p class="text-sm text-pink-500 font-medium">Admin Panel</p>
            </div>
            <div class="glass-effect rounded-2xl shadow-xl p-6">
                <h2 class="text-xl font-bold mb-4 text-orange-700">Data Aktivitas</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm">
                        <thead class="bg-gradient-to-r from-orange-400 to-yellow-400 text-white">
                            <tr>
                                <th class="py-3 px-4">Nama Anak</th>
                                <th class="py-3 px-4">Tanggal</th>
                                <th class="py-3 px-4">Aktivitas</th>
                                <th class="py-3 px-4">Catatan</th>
                                <th class="py-3 px-4">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white/80">
                            <tr class="hover:bg-yellow-50/80 transition-colors border-b border-gray-100">
                                <td class="py-3 px-4">Alya</td>
                                <td class="py-3 px-4">2024-06-20</td>
                                <td class="py-3 px-4">Menggambar</td>
                                <td class="py-3 px-4">Sangat kreatif</td>
                                <td class="py-3 px-4 space-x-2">
                                    <button class="px-3 py-1 rounded-full bg-blue-200 text-blue-800 font-semibold text-xs">Edit</button>
                                    <button class="px-3 py-1 rounded-full bg-red-200 text-red-800 font-semibold text-xs">Hapus</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-yellow-50/80 transition-colors border-b border-gray-100">
                                <td class="py-3 px-4">Raka</td>
                                <td class="py-3 px-4">2024-06-20</td>
                                <td class="py-3 px-4">Bernyanyi</td>
                                <td class="py-3 px-4">Suaranya bagus</td>
                                <td class="py-3 px-4 space-x-2">
                                    <button class="px-3 py-1 rounded-full bg-blue-200 text-blue-800 font-semibold text-xs">Edit</button>
                                    <button class="px-3 py-1 rounded-full bg-red-200 text-red-800 font-semibold text-xs">Hapus</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-yellow-50/80 transition-colors">
                                <td class="py-3 px-4">Nina</td>
                                <td class="py-3 px-4">2024-06-20</td>
                                <td class="py-3 px-4">Mewarnai</td>
                                <td class="py-3 px-4">Butuh bimbingan</td>
                                <td class="py-3 px-4 space-x-2">
                                    <button class="px-3 py-1 rounded-full bg-blue-200 text-blue-800 font-semibold text-xs">Edit</button>
                                    <button class="px-3 py-1 rounded-full bg-red-200 text-red-800 font-semibold text-xs">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
    <script>
        // Mobile menu functionality
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileSidebar = document.getElementById('mobileSidebar');
        const closeMobileMenu = document.getElementById('closeMobileMenu');
        function openMobileMenu() { mobileSidebar.classList.add('open'); document.body.style.overflow = 'hidden'; }
        function closeMobileMenuFunc() { mobileSidebar.classList.remove('open'); document.body.style.overflow = 'auto'; }
        mobileMenuBtn.addEventListener('click', openMobileMenu);
        closeMobileMenu.addEventListener('click', closeMobileMenuFunc);
        const mobileLinks = mobileSidebar.querySelectorAll('a');
        mobileLinks.forEach(link => { link.addEventListener('click', closeMobileMenuFunc); });
    </script>
</body>
</html> 