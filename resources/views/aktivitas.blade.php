<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktivitas Harian - CandiceKids</title>
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
                <li class="flex items-center gap-2"><span>🏠</span><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="flex items-center gap-2"><span>📄</span><a href="{{ route('daftar') }}">Daftar</a></li>
                <li class="flex items-center gap-2"><span>📖</span><a href="{{ route('absen') }}">Absen Anak</a></li>
                <li class="bg-yellow-300 rounded-lg px-3 py-2 flex items-center gap-2">
                    <span>📝</span> <a href="{{ route('aktivitas') }}">Aktivitas Harian</a>
                </li>
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
            <div class="bg-white rounded-xl p-6">
                <h2 class="text-2xl font-bold text-orange-800 mb-6">Aktivitas Harian</h2>
                
                <!-- Tanggal -->
                <div class="text-right mb-6 text-gray-500">
                    {{ now()->format('d/m/Y') }}
                </div>
                
                <!-- Daftar Aktivitas -->
                <div class="space-y-6">
                    <!-- Aktivitas 1 -->
                    <div class="border-b pb-4">
                        <ul class="space-y-2 ml-4">
                            <div class="grid grid-cols-2 gap-4 items-center">
                                <div>
                                    <div class="flex justify-between items-center mb-4">
                                        <span>Belajar bentuk dan warna</span>
                                        <span class="text-gray-500">09.00 - 10.00</span>
                                    </div>
                                    <div class="flex justify-between items-center mb-4">
                                        <span>Makan siang</span>
                                        <span class="text-gray-500">11.30</span>
                                    </div>
                                    <div class="flex justify-between items-center mb-4">
                                        <span>Tidur siang</span>
                                        <span class="text-gray-500">12.30 - 14.00</span>
                                    </div>
                                    <div class="flex justify-between items-center mb-4">
                                        <span>Senam Irama</span>
                                        <span class="text-gray-500">15.00 - 16.00</span>
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <img src="{{ asset('img/aktivitas.png') }}" alt="Aktivitas Harian" class="w-60 h-45">
                                </div>
                            </div>
                        </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>