@extends('layouts.admin')
@section('content')
<div class="bg-white rounded-2xl shadow-xl p-6 max-w-5xl mx-auto mt-8 mb-8">
    <h2 class="text-xl font-bold mb-4 text-orange-700">Data User</h2>
    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">{{ session('success') }}</div>
    @endif
    <div class="overflow-x-auto">
        <table class="min-w-full text-sm">
            <thead class="bg-gradient-to-r from-orange-200 to-pink-200 text-orange-900 font-bold">
                <tr>
                    <th class="py-3 px-4">Nama</th>
                    <th class="py-3 px-4">Email</th>
                    <th class="py-3 px-4">Role</th>
                    <th class="py-3 px-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white/80">
                @foreach($users as $user)
                <tr class="hover:bg-yellow-50/80 transition-colors border-b border-gray-100">
                    <td class="py-3 px-4 font-semibold">{{ $user->name }}</td>
                    <td class="py-3 px-4">{{ $user->email }}</td>
                    <td class="py-3 px-4 capitalize">{{ $user->role }}</td>
                    <td class="py-3 px-4 space-x-2">
                        @if($user->role !== 'admin')
                        <a href="{{ route('admin.user.edit', $user->id) }}" class="px-3 py-1 rounded-full bg-blue-200 text-blue-800 font-semibold text-xs">Edit</a>
                        <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus user ini?')" class="px-3 py-1 rounded-full bg-red-200 text-red-800 font-semibold text-xs">Hapus</button>
                        </form>
                        @else
                        <span class="text-gray-400 italic">(Akun Admin)</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection 