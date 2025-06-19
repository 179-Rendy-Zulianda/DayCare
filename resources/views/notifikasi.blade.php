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
                <li class="flex items-center gap-2"><span>🏠</span> <a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="flex items-center gap-2"><span>📄</span><a href="{{ route('daftar') }}">Daftar</a></li>
                <li class="flex items-center gap-2"><span>📖</span><a href="{{ route('absen') }}">Absen Anak</a></li>
                <li class="flex items-center gap-2"><span>📝</span><a href="{{ route('aktivitas') }}">Aktivitas Harian</a></li>
                <li class="flex items-center gap-2"><span>💬</span><a href="{{ route('chat') }}">Chat Pengasuh</a></li>
                <li class="flex items-center gap-2"><span>💳</span><a href="{{ route('tagihan') }}">Tagihan & Pembayaran</a></li>
                <li class="flex items-center gap-2"><span>📈</span><a href="{{ route('perkembangan') }}">Perkembangan Anak</a></li>
                <li class="flex items-center gap-2"><span>📅</span><a href="{{ route('jadwal') }}">Jadwal</a></li>
                <li class="bg-yellow-300 rounded-lg px-3 py-2 flex items-center gap-2">
                    <span>🏠</span> <a href="{{ route('notifikasi') }}">Notifikasi Darurat</a>
                </li><li class="flex items-center gap-2">
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
                <div class="border-b pb-4 mb-6 text-center">
                    <h1 class="text-2xl font-bold text-gray-800">Notifikasi Darurat</h1>
                    <div class="emergency-header rounded-lg px-4 py-2 mt-2 inline-block">
                        <strong>Notifikasi Darurat/Penting</strong>
                    </div>
                    <div class="mt-4">
                        <img src="{{ asset('img/danger.png') }}" alt="Danger Icon" class="mx-auto w-16 h-16">
                    </div>
                </div>
                
                <!-- Daftar Notifikasi -->
                <div class="space-y-4">
                    <!-- Notifikasi 1 -->
                    <div class="notification-card bg-white rounded-lg p-4 border border-gray-300">
                        <h3 class="font-bold text-lg mb-1">Subjek: Anak Sedang Sakit</h3>
                        <p class="mb-2">Anak anda mengalami demam, Mohon segera di jemput</p>
                        <p class="text-sm text-gray-500">11 Juni 2025</p>
                    </div>
                    
                    <!-- Notifikasi 2 -->
                    <div class="notification-card bg-white rounded-lg p-4 border border-gray-300">
                        <h3 class="font-bold text-lg mb-1">Subjek: Kegiatan Outdoor</h3>
                        <p class="mb-2">Tolong bawa perlengkapan hujan untuk kegiatan outdoor</p>
                        <p class="text-sm text-gray-500">21 Mei 2025</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
</body>
</html>
