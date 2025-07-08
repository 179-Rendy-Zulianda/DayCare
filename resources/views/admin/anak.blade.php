@extends('layouts.admin')
@section('content')
<div class="bg-white rounded-2xl shadow-xl p-6 max-w-5xl mx-auto mt-8 mb-8">
    <h2 class="text-2xl font-bold mb-6 text-center bg-gradient-to-r from-orange-400 to-pink-500 bg-clip-text text-orange-900">Data Anak Terdaftar</h2>
    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">{{ session('success') }}</div>
    @endif
    <div class="mb-4 text-right">
        <a href="{{ route('admin.children.create') }}"
           style="background: linear-gradient(to right, #f97316, #ec4899) !important; color: #fff !important; font-weight: bold !important; box-shadow: 0 4px 14px 0 rgba(236,72,153,0.15);"
           class="px-6 py-2 rounded-full shadow transition-all duration-300">
           + Daftar Anak Baru
        </a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-orange-200 rounded-xl">
            <thead class="bg-gradient-to-r from-orange-200 to-pink-200 text-orange-900 font-bold">
                <tr>
                    <th class="px-4 py-2 border-b-2 border-pink-700">#</th>
                    <th class="px-4 py-2 border-b-2 border-pink-700">Foto</th>
                    <th class="px-4 py-2 border-b-2 border-pink-700">Nama Anak</th>
                    <th class="px-4 py-2 border-b-2 border-pink-700">Program</th>
                    <th class="px-4 py-2 border-b-2 border-pink-700">Tanggal Masuk</th>
                    <th class="px-4 py-2 border-b-2 border-pink-700">Nama Ibu</th>
                    <th class="px-4 py-2 border-b-2 border-pink-700">Nama Ayah</th>
                    <th class="px-4 py-2 border-b-2 border-pink-700">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($children as $child)
                <tr class="border-b hover:bg-orange-50">
                    <td class="px-4 py-2">{{ $loop->iteration + ($children->currentPage() - 1) * $children->perPage() }}</td>
                    <td class="px-4 py-2">
                        @if($child->foto_anak)
                            <img src="{{ asset('storage/'.$child->foto_anak) }}" alt="Foto Anak" class="w-12 h-12 rounded-full object-cover">
                        @else
                            <span class="text-gray-400">-</span>
                        @endif
                    </td>
                    <td class="px-4 py-2 font-semibold">{{ $child->nama_anak }}</td>
                    <td class="px-4 py-2">{{ $child->program }}</td>
                    <td class="px-4 py-2">{{ $child->tanggal_masuk }}</td>
                    <td class="px-4 py-2">{{ $child->nama_ibu }}</td>
                    <td class="px-4 py-2">{{ $child->nama_ayah }}</td>
                    <td class="px-4 py-2 space-x-2">
                        <a href="{{ route('admin.children.edit', $child->id) }}" class="px-3 py-1 rounded-full bg-blue-500 text-white font-semibold text-xs">Edit</a>
                        <form action="{{ route('admin.children.destroy', $child->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-3 py-1 rounded-full bg-red-500 text-white font-semibold text-xs">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="7" class="text-center py-6 text-gray-500">Belum ada data anak.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-4">{{ $children->links() }}</div>
</div>
@endsection 