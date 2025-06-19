
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
                <li class="flex items-center gap-2"><span>📈</span><a href="{{ route('perkembangan') }}">Perkembangan Anak</a></li>
                <li class="bg-yellow-300 rounded-lg px-3 py-2  flex items-center gap-2"><span>📅</span><a href="{{ route('jadwal') }}">Jadwal</a></li>
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
                    <h1 class="text-2xl font-bold text-gray-800">Lihat Jadwal</h1>
                </div>
                <!-- Tabel Jadwal -->
                <div class="overflow-x-auto">
                    <table class="table-auto w-full border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border border-gray-300 px-4 py-2 text-left">Waktu</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Kegiatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">07:30 - 08:00</td>
                                <td class="border border-gray-300 px-4 py-2">Kedatangan</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">08:00 - 09:00</td>
                                <td class="border border-gray-300 px-4 py-2">Free play dan toilet training</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">09:00 - 09:30</td>
                                <td class="border border-gray-300 px-4 py-2">Snack time, pijakan sebelum main/circle time</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">09:30 - 10:30</td>
                                <td class="border border-gray-300 px-4 py-2">Class Activity</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">10:30 - 11:00</td>
                                <td class="border border-gray-300 px-4 py-2">Closing Time</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">11:00 - 12:30</td>
                                <td class="border border-gray-300 px-4 py-2">Lunch Time dan persiapan tidur siang</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">12:30 - 14:30</td>
                                <td class="border border-gray-300 px-4 py-2">Rest Time</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">14:30 - 15:00</td>
                                <td class="border border-gray-300 px-4 py-2">Mandi</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">15:00 - 16:30</td>
                                <td class="border border-gray-300 px-4 py-2">Free play dan persiapan pulang</td>
                            </tr>
                        </tbody>
                    </table>
                </div>          </div>
        </main>
    </div>
</body>
</html>
