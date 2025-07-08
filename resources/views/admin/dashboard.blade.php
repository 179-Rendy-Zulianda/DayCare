@extends('layouts.admin')
@section('content')
<div class="max-w-6xl mx-auto mt-8 mb-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6">
        <div class="glass-effect rounded-2xl text-center p-6 card-hover">
            <span class="block text-4xl mb-2">👤</span>
            <a href="#" class="block font-semibold text-gray-800 hover:text-orange-600 transition-colors">Kelola Data User</a>
        </div>
        <div class="glass-effect rounded-2xl text-center p-6 card-hover">
            <span class="block text-4xl mb-2">🧒</span>
            <a href="#" class="block font-semibold text-gray-800 hover:text-orange-600 transition-colors">Kelola Data Anak</a>
        </div>
        <!-- <div class="glass-effect rounded-2xl text-center p-6 card-hover">
            <span class="block text-4xl mb-2">💳</span>
            <a href="#" class="block font-semibold text-gray-800 hover:text-orange-600 transition-colors">Kelola Tagihan</a>
        </div> -->
        <div class="glass-effect rounded-2xl text-center p-6 card-hover">
            <span class="block text-4xl mb-2">📝</span>
            <a href="#" class="block font-semibold text-gray-800 hover:text-orange-600 transition-colors">Kelola Aktivitas</a>
        </div>
        <div class="glass-effect rounded-2xl text-center p-6 card-hover">
            <span class="block text-4xl mb-2">🚨</span>
            <a href="#" class="block font-semibold text-gray-800 hover:text-orange-600 transition-colors">Kelola Notifikasi</a>
        </div>
    </div>
</div>
@endsection 