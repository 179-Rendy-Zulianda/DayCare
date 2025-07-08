@extends('layouts.admin')
@section('content')
<div class="max-w-xl mx-auto p-6 bg-white/90 rounded-2xl shadow-2xl mt-8 mb-8">
    <h2 class="text-2xl font-bold mb-6 text-center bg-gradient-to-r from-orange-400 to-pink-500 bg-clip-text text-transparent">Edit Data User</h2>
    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('admin.user.update', $user->id) }}" class="space-y-6">
        @csrf
        @method('PUT')
        <div class="space-y-2">
            <label class="block font-semibold">Nama</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="space-y-2">
            <label class="block font-semibold">Username</label>
            <input type="text" name="username" value="{{ old('username', $user->username) }}" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="space-y-2">
            <label class="block font-semibold">Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="space-y-2">
            <label class="block font-semibold">No. HP</label>
            <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="space-y-2">
            <label class="block font-semibold">Alamat</label>
            <input type="text" name="address" value="{{ old('address', $user->address) }}" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="space-y-2">
            <label class="block font-semibold">Password (kosongkan jika tidak diubah)</label>
            <input type="password" name="password" class="w-full border rounded px-3 py-2">
        </div>
        <div class="text-right">
            <button type="submit" class="px-6 py-2 rounded-full font-bold text-white" style="background: linear-gradient(90deg, #f97316 0%, #ec4899 100%)">Simpan Perubahan</button>
            <a href="{{ route('admin.user') }}" class="ml-2 px-6 py-2 rounded-full font-bold text-orange-600 border border-orange-400">Batal</a>
        </div>
    </form>
</div>
@endsection 