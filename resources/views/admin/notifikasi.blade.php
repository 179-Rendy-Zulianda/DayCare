@extends('layouts.admin')
@section('content')
<div class="bg-white rounded-2xl shadow-xl p-6 max-w-5xl mx-auto mt-8 mb-8">
    <h2 class="text-xl font-bold mb-4 text-orange-700">Data Notifikasi</h2>
    <div class="overflow-x-auto">
        <table class="min-w-full text-sm">
            <thead class="bg-gradient-to-r from-orange-200 to-pink-200 text-orange-900 font-bold">
                <tr>
                    <th class="py-3 px-4">Judul</th>
                    <th class="py-3 px-4">Isi</th>
                    <th class="py-3 px-4">Tanggal</th>
                    <th class="py-3 px-4">Tipe</th>
                    <th class="py-3 px-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white/80">
                <tr class="hover:bg-yellow-50/80 transition-colors border-b border-gray-100">
                    <td class="py-3 px-4">Penting!</td>
                    <td class="py-3 px-4">Besok libur nasional</td>
                    <td class="py-3 px-4">2024-06-20</td>
                    <td class="py-3 px-4"><span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-xs font-medium">Darurat</span></td>
                    <td class="py-3 px-4 space-x-2">
                        <button class="px-3 py-1 rounded-full bg-blue-200 text-blue-800 font-semibold text-xs">Edit</button>
                        <button class="px-3 py-1 rounded-full bg-red-200 text-red-800 font-semibold text-xs">Hapus</button>
                    </td>
                </tr>
                <tr class="hover:bg-yellow-50/80 transition-colors border-b border-gray-100">
                    <td class="py-3 px-4">Info</td>
                    <td class="py-3 px-4">Jadwal imunisasi minggu depan</td>
                    <td class="py-3 px-4">2024-06-19</td>
                    <td class="py-3 px-4"><span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-xs font-medium">Info</span></td>
                    <td class="py-3 px-4 space-x-2">
                        <button class="px-3 py-1 rounded-full bg-blue-200 text-blue-800 font-semibold text-xs">Edit</button>
                        <button class="px-3 py-1 rounded-full bg-red-200 text-red-800 font-semibold text-xs">Hapus</button>
                    </td>
                </tr>
                <tr class="hover:bg-yellow-50/80 transition-colors">
                    <td class="py-3 px-4">Reminder</td>
                    <td class="py-3 px-4">Bawa bekal sehat setiap hari</td>
                    <td class="py-3 px-4">2024-06-18</td>
                    <td class="py-3 px-4"><span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-xs font-medium">Reminder</span></td>
                    <td class="py-3 px-4 space-x-2">
                        <button class="px-3 py-1 rounded-full bg-blue-200 text-blue-800 font-semibold text-xs">Edit</button>
                        <button class="px-3 py-1 rounded-full bg-red-200 text-red-800 font-semibold text-xs">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection 