@extends('layouts.admin')
@section('content')
<div class="bg-white rounded-2xl shadow-xl p-6 max-w-5xl mx-auto mt-8 mb-8">
    <h2 class="text-xl font-bold mb-4 text-orange-700">Data Aktivitas</h2>
    <a href="{{ route('admin.aktivitas.create') }}" class="mb-4 inline-block px-4 py-2 rounded-full bg-gradient-to-r from-orange-400 to-pink-400 text-orange-900 font-bold shadow hover:scale-105 transition">+ Tambah Aktivitas</a>
    <div class="overflow-x-auto">
        <table class="min-w-full text-sm">
            <thead class="bg-gradient-to-r from-orange-200 to-pink-200 text-orange-900 font-bold">
                <tr>
                    <th class="py-3 px-4">Nama Anak</th>
                    <th class="py-3 px-4">Tanggal</th>
                    <th class="py-3 px-4">Aktivitas</th>
                    <th class="py-3 px-4">Catatan</th>
                    <th class="py-3 px-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white/80">
                @forelse($activities as $activity)
                <tr class="hover:bg-yellow-50/80 transition-colors border-b border-gray-100">
                    <td class="py-3 px-4">{{ $activity->child->nama_anak ?? '-' }}</td>
                    <td class="py-3 px-4">{{ $activity->tanggal }}</td>
                    <td class="py-3 px-4">{{ $activity->aktivitas }}</td>
                    <td class="py-3 px-4">{{ $activity->catatan }}</td>
                    <td class="py-3 px-4 space-x-2">
                        <a href="{{ route('admin.aktivitas.edit', $activity->id) }}" class="px-3 py-1 rounded-full bg-blue-500 text-white font-semibold text-xs">Edit</a>
                        <form action="{{ route('admin.aktivitas.destroy', $activity->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-3 py-1 rounded-full bg-red-500 text-white font-semibold text-xs" onclick="return confirm('Yakin hapus aktivitas?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5" class="text-center py-4 text-gray-400">Belum ada aktivitas</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection 