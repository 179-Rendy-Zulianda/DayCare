<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - CandiceKids</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-sky-200 font-sans">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="bg-yellow-100 w-64 p-4">
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-orange-800">Candice<span class="text-cyan-800">Kids</span></h1>
                <p class="text-xs text-pink-500">Cerdas Mandiri Ceria</p>
            </div>

            <ul class="space-y-3">
                <li class="flex items-center gap-2">
                    <span>🏠</span> <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="flex items-center gap-2"><span>📄</span><a href="{{ route('daftar') }}">Daftar</a></li>
                <li class="flex items-center gap-2"><span>📖</span><a href="{{ route('absen') }}">Absen Anak</a></li>
                <li class="flex items-center gap-2"><span>📝</span><a href="{{ route('aktivitas') }}">Aktivitas Harian</a></li>
                <li class="flex items-center gap-2"><span>💬</span><a href="{{ route('chat') }}">Chat Pengasuh</a></li>
                <li class="flex items-center gap-2"><span>💳</span><a href="{{ route('tagihan') }}">Tagihan & Pembayaran</a></li>
                <li class="bg-yellow-300 rounded-lg px-3 py-2  flex items-center gap-2"><span>📈</span><a href="{{ route('perkembangan') }}">Perkembangan Anak</a></li>
                <li class="flex items-center gap-2"><span>📅</span><a href="{{ route('jadwal') }}">Jadwal</a></li>
                <li class="flex items-center gap-2"><span>🚨</span><a href="{{ route('notifikasi') }}">Notifikasi Darurat</a></li>
                <li class="flex items-center gap-2">
    <span>🚪</span>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="hover:text-orange-600">Log Out</button>
    </form>
</li>
            </ul>
        </aside>

        <!-- Main Content -->
<main class="flex-1 p-6">
            <div class="bg-white rounded-lg shadow-md p-6 h-full">
                <!-- Header -->
                <div class="border-b pb-4 mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">Perkembangan Anak</h1>
                    <h2 class="text-lg font-semibold mt-2">Laporan Perkembangan Anak</h2>
                </div>
                
                <!-- Data Perkembangan -->
                <div class="development-card rounded-lg p-2 space-y-2">
                    <div class="relative"></div>
                        <button class="child-name text-xl bg-yellow-300 px-4 py-2 rounded-lg focus:outline-none flex items-center gap-2" onclick="toggleDropdown()">
                            Nien Samiati
                            <span>▼</span>
                        </button>
                        <div id="dropdown" class="hidden absolute bg-white shadow-md rounded-lg mt-2 w-48">
                            <ul class="py-2">
                                <li class="px-4 py-2 hover:bg-yellow-100 cursor-pointer">Nien Samiati</li>
                                <li class="px-4 py-2 hover:bg-yellow-100 cursor-pointer">Anak Lain</li>
                                <li class="px-4 py-2 hover:bg-yellow-100 cursor-pointer">Tambah Anak</li>
                            </ul>
                        </div>
                    </div>

                    <script>
                        function toggleDropdown() {
                            const dropdown = document.getElementById('dropdown');
                            dropdown.classList.toggle('hidden');
                        }
                    </script>
                    
                    <div class="flex flex-col gap-4">
                        <div class="flex items-start gap-4">
                            <img src="{{ asset('img/perkembangan.png') }}" alt="Perkembangan Anak" class="w-60 h-60 rounded-lg">
                            <div class="flex flex-col gap-4 border border-black rounded-lg p-4"></div>
                                <div>
                                    <h4 class="skill-category font-bold">Perkembangan Kemampuan Motorik</h4>
                                    <p class="mt-1">Nien semakin baik dalam menggambar dan mewarnai</p>
                                </div>
                                <div>
                                    <h4 class="skill-category font-bold">Kemampuan Bahasa</h4>
                                    <p class="mt-1">Kosakata Nien bertambah, berbicara dalam kalimat sederhana</p>
                                </div>
                                <div>
                                    <h4 class="skill-category font-bold">Kemampuan Sosial</h4>
                                    <p class="mt-1">Nien suka bermain bersama teman-temannya</p>
                                </div>
                                <div>
                                    <h4 class="skill-category font-bold">Kemandirian</h4>
                                    <p class="mt-1">Nien dapat makan sendiri dengan minimal bantuan</p>
                                </div>
                            </div>
                        </div>
    </div>
</body>
</html>
