<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Pengasuh - CandiceKids</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-sky-200 font-sans">
    <div class="flex min-h-screen">
        <!-- Sidebar (sama seperti dashboard) -->
        <aside class="bg-yellow-100 w-64 p-4">
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-orange-800">Candice<span class="text-cyan-800">Kids</span></h1>
                <p class="text-xs text-pink-500">Cerdas Mandiri Ceria</p>
            </div>

            <ul class="space-y-3">
                <li class="flex items-center gap-2"><span>🏠</span><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="flex items-center gap-2"><span>📄</span><a href="{{ route('daftar') }}">Daftar</a></li>
                <li class="flex items-center gap-2"><span>📖</span><a href="{{ route('absen') }}">Absen Anak</a></li>
                <li class="flex items-center gap-2"><span>📝</span><a href="{{ route('aktivitas') }}">Aktivitas Harian</a></li>
                <li class="bg-yellow-300 rounded-lg px-3 py-2 flex items-center gap-2">
                    <span>💬</span> <a href="{{ route('chat') }}">Chat Pengasuh</a>
                </li>
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

        <!-- Main Content Area untuk Chat -->
        <main class="flex-1 p-10">
            <div class="bg-white rounded-xl p-6 h-full">
                <h2 class="text-2xl font-bold text-orange-800 mb-6">Chat Pengasuh</h2>
                
                <!-- Header Chat -->
                <div class="border-b pb-4 mb-4">
                    <h3 class="font-semibold">Corelta Mundial: Chris</h3>
                </div>
                
                <!-- Area Pesan -->
                <div class="space-y-4 mb-6 h-[400px] overflow-y-auto">
                    <!-- Pesan Masuk -->
                    <div class="flex justify-start">
                        <div class="bg-yellow-100 rounded-lg p-3 max-w-[70%]">
                            <p class="font-semibold">Selamat Pagi</p>
                            <p class="text-xs text-gray-500 mt-1">10:30 AM</p>
                        </div>
                    </div>
                    
                    <!-- Pesan Keluar -->
                    <div class="flex justify-end">
                        <div class="bg-sky-100 rounded-lg p-3 max-w-[70%]">
                            <p class="font-semibold">Pagi</p>
                            <p class="text-xs text-gray-500 mt-1">10:32 AM</p>
                        </div>
                    </div>
                </div>
                
                <!-- Input Pesan -->
                <div class="border-t pt-4">
                    <form class="flex gap-2">
                        <input 
                            type="text" 
                            placeholder="Tulis Pesan" 
                            class="flex-1 border border-gray-300 rounded-full px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-300"
                        >
                        <button 
                            type="submit" 
                            class="bg-yellow-300 hover:bg-yellow-400 text-black font-bold px-6 py-2 rounded-full transition"
                        >
                            Kirim
                        </button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>
</html>