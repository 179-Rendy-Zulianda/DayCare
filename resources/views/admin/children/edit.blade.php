@extends('layouts.admin')
@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white/90 rounded-2xl shadow-2xl mt-8 mb-8">
    <h2 class="text-2xl font-bold mb-6 text-center bg-gradient-to-r from-orange-400 to-pink-500 bg-clip-text text-transparent">Edit Data Anak</h2>
    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('admin.children.update', $child->id) }}" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="font-semibold">Program</label>
                <select name="program" class="w-full rounded border border-orange-300 px-3 py-2 mt-1">
                    <option value="">Pilih Program</option>
                    <option value="Full Day" {{ $child->program=='Full Day' ? 'selected' : '' }}>Full Day</option>
                    <option value="Play Group" {{ $child->program=='Play Group' ? 'selected' : '' }}>Play Group</option>
                    <option value="PGFD" {{ $child->program=='PGFD' ? 'selected' : '' }}>PGFD</option>
                </select>
            </div>
            <div>
                <label class="font-semibold">Tanggal Masuk</label>
                <input type="date" name="tanggal_masuk" value="{{ $child->tanggal_masuk }}" class="w-full rounded border border-orange-300 px-3 py-2 mt-1">
            </div>
        </div>
        <h3 class="font-bold text-lg mt-6 mb-2 text-orange-600">Data Anak</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="font-semibold">Nama Anak</label>
                <input type="text" name="nama_anak" value="{{ $child->nama_anak }}" class="w-full rounded border border-orange-300 px-3 py-2 mt-1">
            </div>
            <div>
                <label class="font-semibold">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" value="{{ $child->tanggal_lahir }}" class="w-full rounded border border-orange-300 px-3 py-2 mt-1">
            </div>
            <div>
                <label class="font-semibold">Foto Anak</label>
                <input type="file" name="foto_anak" class="w-full rounded border border-orange-300 px-3 py-2 mt-1">
                @if($child->foto_anak)
                    <img src="{{ asset('storage/'.$child->foto_anak) }}" alt="Foto Anak" class="w-16 h-16 rounded-full mt-2">
                @endif
            </div>
        </div>
        <div class="mt-8 text-center">
            <button type="submit" class="bg-gradient-to-r from-orange-500 to-pink-500 hover:from-orange-600 hover:to-pink-600 text-white font-bold px-8 py-3 rounded-full shadow-lg transition-all duration-300">Update Data Anak</button>
        </div>
    </form>
</div>
@endsection 