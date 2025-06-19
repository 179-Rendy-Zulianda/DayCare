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
                <li class="bg-yellow-300 rounded-lg px-3 py-2  flex items-center gap-2"><span>💳</span><a href="{{ route('tagihan') }}">Tagihan & Pembayaran</a></li>
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
 <main class="flex-1 p-6">
            <div class="bg-white rounded-lg shadow-md p-6 h-full">
                <!-- Header -->
                <div class="border-b pb-4 mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">Tagihan & Pembayaran</h1>
                </div>
                
                <!-- Tagihan Saat Ini -->
                <div class="payment-card rounded-lg p-4 mb-6">
                    <h2 class="font-bold text-lg mb-2">Tagihan Pembayaran</h2>
                    <div class="amount-display">Rp560.000</div>
                </div>
                
                <!-- Riwayat Tagihan -->
                <div class="riwayat-tagihan rounded-lg p-4 bg-gray-100 mb-8">
                    <h3 class="font-bold text-lg mb-3">Riwayat Tagihan</h3>
                    <div class="space-y-2">
                        <div class="history-item bg-white rounded-lg p-3 shadow-sm">
                            <div class="font-medium">Bayar Bulan September</div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">4 Oktober 2024</span>
                                <span class="font-bold">Rp1.450.000</span>
                            </div>
                        </div>
                        <div class="history-item bg-white rounded-lg p-3 shadow-sm">
                            <div class="font-medium">Bayar Bulan October</div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">4 Oktober 2024</span>
                                <span class="font-bold">Rp500.000</span>
                            </div>
                        </div>
                        <div class="history-item bg-white rounded-lg p-3 shadow-sm">
                            <div class="font-medium">Bayar Bulan Agustus</div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">4 Oktober 2024</span>
                                <span class="font-bold">Rp550.000</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Lihat Tagihan -->
                <div class="text-center">
                    <button class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Lihat Tagihan</button>
                </div>
        </main>
    </div>
</body>
</html>
