<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Anak - CandiceKids</title>
    @vite('resources/css/app.css')
    <style>
        .sidebar-item {
            transition: all 0.3s ease;
        }
        .sidebar-item:hover {
            background-color: #fef08a;
        }
        .absen-card {
            background-color: #ffffff;
            border-radius: 0.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-sky-200 font-sans">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="bg-yellow-100 w-64 p-4">
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-orange-800">Candice<span class="text-cyan-800">Kids</span></h1>
                <p class="text-xs text-pink-500">Cerdas Mandiri Ceria</p>
            </div>

            <ul class="space-y-1">
                <li class="sidebar-item rounded-lg px-3 py-2">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-2">
                        <span class="text-lg">📊</span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-lg px-3 py-2">
                    <a href="{{ route('daftar') }}" class="flex items-center gap-2">
                        <span class="text-lg">📄</span>
                        <span>Daftar</span>
                    </a>
                </li>
                <li class="bg-yellow-300 rounded-lg px-3 py-2">
                    <a href="{{ route('absen') }}" class="flex items-center gap-2">
                        <span class="text-lg">📖</span>
                        <span>Absen Anak</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-lg px-3 py-2">
                    <a href="{{ route('aktivitas') }}" class="flex items-center gap-2">
                        <span class="text-lg">📝</span>
                        <span>Aktivitas Harian</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-lg px-3 py-2">
                    <a href="{{ route('chat') }}" class="flex items-center gap-2">
                        <span class="text-lg">💬</span>
                        <span>Chat Pengasuh</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-lg px-3 py-2">
                    <a href="{{ route('tagihan') }}" class="flex items-center gap-2">
                        <span class="text-lg">💳</span>
                        <span>Tagihan & Pembayaran</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-lg px-3 py-2">
                    <a href="{{ route('perkembangan') }}" class="flex items-center gap-2">
                        <span class="text-lg">📈</span>
                        <span>Perkembangan Anak</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-lg px-3 py-2">
                    <a href="{{ route('jadwal') }}" class="flex items-center gap-2">
                        <span class="text-lg">📅</span>
                        <span>Jadwal</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-lg px-3 py-2">
                    <a href="{{ route('notifikasi') }}" class="flex items-center gap-2">
                        <span class="text-lg">🚨</span>
                        <span>Notifikasi Darurat</span>
                    </a>
                </li>
                <li class="sidebar-item rounded-lg px-3 py-2">
                    <form method="POST" action="{{ route('logout') }}" class="flex items-center gap-2">
                        @csrf
                        <span class="text-lg">🚪</span>
                        <button type="submit">Log Out</button>
                    </form>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
        <h1 class="text-3xl font-bold text-center mb-8">Absensi Anak</h1>

<div class="flex justify-center gap-4 mb-6">
    <div>
        <label for="tanggal_awal" class="block mb-1 text-sm font-semibold">Tanggal</label>
        <input type="date" id="tanggal_awal" name="tanggal_awal" class="rounded px-3 py-2 bg-white" value="{{ date('Y-m-d') }}">
    </div>
    <div>
        <label for="tanggal_akhir" class="block mb-1 text-sm font-semibold">Hingga Tanggal</label>
        <input type="date" id="tanggal_akhir" name="tanggal_akhir" class="rounded px-3 py-2 bg-white" value="{{ date('Y-m-d') }}">
    </div>
    <button class="bg-white hover:bg-white-400 px-4 py-2 rounded self-end">Tampilkan</button>
</div>

<div class="overflow-x-auto">
    <table class="min-w-full text-center bg-yellow-50 rounded-lg shadow-md">
        <thead class="bg-white">
            <tr>
                <th class="py-3 px-4 border-b">Tanggal</th>
                <th class="py-3 px-4 border-b">Status</th>
                <th class="py-3 px-4 border-b">Waktu Masuk</th>
                <th class="py-3 px-4 border-b">Waktu Keluar</th>
            </tr>
        </thead>
        <tbody>
            <tr class="hover:bg-yellow-100">
                <td class="py-3 px-4 border-b">10/04/2024</td>
                <td class="py-3 px-4 border-b">Izin</td>
                <td class="py-3 px-4 border-b">08:10</td>
                <td class="py-3 px-4 border-b">17:10</td>
            </tr>
            <tr class="hover:bg-yellow-100">
                <td class="py-3 px-4 border-b">15/05/2024</td>
                <td class="py-3 px-4 border-b">Hadir</td>
                <td class="py-3 px-4 border-b">07:65</td>
                <td class="py-3 px-4 border-b">16:00</td>
            </tr>
            <tr class="hover:bg-yellow-100">
                <td class="py-3 px-4 border-b">23/02/2024</td>
                <td class="py-3 px-4 border-b">Hadir</td>
                <td class="py-3 px-4 border-b">07:09</td>
                <td class="py-3 px-4 border-b">16:30</td>
            </tr>
            <tr class="hover:bg-yellow-100">
                <td class="py-3 px-4 border-b">15/03/2024</td>
                <td class="py-3 px-4 border-b">Hadir</td>
                <td class="py-3 px-4 border-b">07:15</td>
                <td class="py-3 px-4 border-b">16:05</td>
            </tr>
            <tr class="hover:bg-yellow-100">
                <td class="py-3 px-4 border-b">17/04/2024</td>
                <td class="py-3 px-4 border-b">Hadir</td>
                <td class="py-3 px-4 border-b">08:00</td>
                <td class="py-3 px-4 border-b">15:24</td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>