@extends('layouts.admin')
@section('content')
<div class="bg-white rounded-2xl shadow-xl p-6 max-w-lg mx-auto mt-8 mb-8">
    <h2 class="text-xl font-bold mb-4 text-orange-700">Edit Aktivitas Anak</h2>
    <form action="{{ route('admin.aktivitas.update', $activity->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block font-semibold mb-1">Nama Anak</label>
            <select name="child_id" class="w-full border rounded px-3 py-2" required>
                <option value="">-- Pilih Anak --</option>
                @foreach($children as $child)
                <option value="{{ $child->id }}" @if($activity->child_id == $child->id) selected @endif>{{ $child->nama_anak }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="block font-semibold mb-1">Tanggal</label>
            <input type="date" name="tanggal" class="w-full border rounded px-3 py-2" value="{{ $activity->tanggal }}" required>
        </div>
        <div>
            <label class="block font-semibold mb-1">Jam</label>
            <input type="time" name="jam" class="w-full border rounded px-3 py-2" value="{{ $activity->jam }}">
        </div>
        <div>
            <label class="block font-semibold mb-1">Aktivitas</label>
            <input type="text" name="aktivitas" class="w-full border rounded px-3 py-2" value="{{ $activity->aktivitas }}" required>
        </div>
        <div>
            <label class="block font-semibold mb-1">Catatan</label>
            <textarea name="catatan" class="w-full border rounded px-3 py-2">{{ $activity->catatan }}</textarea>
        </div>
        <div class="flex justify-end gap-2">
            <a href="{{ route('admin.aktivitas.index') }}" class="px-4 py-2 rounded bg-gray-200 text-gray-700 font-semibold">Batal</a>
            <button type="submit" class="px-4 py-2 rounded bg-gradient-to-r from-orange-400 to-pink-400 text-white font-bold shadow">Update</button>
        </div>
    </form>
</div>
@endsection 