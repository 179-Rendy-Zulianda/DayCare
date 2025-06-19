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
                <li class="bg-yellow-300 rounded-lg px-3 py-2 flex items-center gap-2">
                    <span>🏠</span> <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="flex items-center gap-2"><span>📄</span><a href="{{ route('daftar') }}">Daftar</a></li>
                <li class="flex items-center gap-2"><span>📖</span><a href="{{ route('absen') }}">Absen Anak</a></li>
                <li class="flex items-center gap-2"><span>📝</span><a href="{{ route('aktivitas') }}">Aktivitas Harian</a></li>
                <li class="flex items-center gap-2"><span>💬</span><a href="{{ route('chat') }}">Chat Pengasuh</a></li>
                <li class="flex items-center gap-2"><span>💳</span><a href="{{ route('tagihan') }}">Tagihan & Pembayaran</a></li>
                <li class="flex items-center gap-2"><span>📈</span><a href="{{ route('perkembangan') }}">Perkembangan Anak</a></li>
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
        <main class="flex-1 p-10">
            <div class="grid grid-cols-3 gap-6">
                <div class="bg-white rounded-xl text-center p-6 cursor-pointer hover:shadow-lg">
                    <img src="{{ asset('img/Ebook.png') }}" alt="Absen Anak" class="mx-auto mb-4 w-16 h-16">
                    <a href="{{ route('absen') }}" class="block">Lihat Absen Anak</a>
                </div>
                <div class="bg-white rounded-xl text-center p-6 cursor-pointer hover:shadow-lg">
                    <img src="{{ asset('img/Tuition.png') }}" alt="Daily Activities" class="mx-auto mb-4 w-16 h-16">
                    <a href="{{ route('aktivitas') }}" class="block">Daily Activities</a>
                </div>
                <div class="bg-white rounded-xl text-center p-6 cursor-pointer hover:shadow-lg">
                    <img src="{{ asset('img/SMS.png') }}" alt="Chat Pengasuh" class="mx-auto mb-4 w-16 h-16">
                    <a href="{{ route('chat') }}" class="block">Chat Pengasuh</a>
                </div>
                <div class="bg-white rounded-xl text-center p-6 cursor-pointer hover:shadow-lg">
                    <img src="{{ asset('img/Card Payment.png') }}" alt="Bayar & Tagihan" class="mx-auto mb-4 w-16 h-16">
                    <a href="{{ route('tagihan') }}" class="block">Lihat Bayar & Tagihan</a>
                </div>
                <div class="bg-white rounded-xl text-center p-6 cursor-pointer hover:shadow-lg">
                    <img src="{{ asset('img/Total Sales.png') }}" alt="Perkembangan Anak" class="mx-auto mb-4 w-16 h-16">
                    <a href="{{ route('perkembangan') }}" class="block">Laporan Perkembangan Anak</a>
                </div>
                <div class="bg-white rounded-xl text-center p-6 cursor-pointer hover:shadow-lg">
                    <img src="{{ asset('img/Schedule.png') }}" alt="Jadwal" class="mx-auto mb-4 w-16 h-16">
                    <a href="{{ route('jadwal') }}" class="block">Lihat Jadwal</a>
                </div>
            </div>

            <div class="mt-8 text-center">
                <button class="bg-white text-orange-500 font-semibold px-6 py-2 rounded-full">
                    🔔 Notifikasi Darurat/Penting
                </button>

                <div class="mt-4">
                    <button class="bg-yellow-300 text-black font-bold px-6 py-2 rounded-full">
                        Daftar Sekarang
                    </button>
                </div>
            </div>

            <!-- Optional: Gambar anak-anak -->
            <div class="absolute bottom-0 right-10">
               <img src="{{ asset('public/img/kids.png') }}" alt="Anak-anak" class="w-40">
            </div>
        </main>
    </div>
</body>
</html>
