@extends('layouts.app')
@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-sky-200 via-purple-100 to-pink-100 p-4">
    <div class="bg-white/90 backdrop-blur-md rounded-2xl shadow-2xl p-8 w-full max-w-md border border-orange-200">
        <div class="flex flex-col items-center mb-6">
            <div class="bg-orange-100 rounded-full p-3 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0-1.104.896-2 2-2s2 .896 2 2-.896 2-2 2-2-.896-2-2zm0 0V7m0 4v4m0 0h4m-4 0H8" /></svg>
            </div>
            <h2 class="text-2xl font-bold bg-gradient-to-r from-orange-400 to-pink-500 bg-clip-text text-transparent">Reset Password</h2>
            <p class="text-gray-600 text-sm mt-1 text-center">Masukkan email yang terdaftar untuk melanjutkan proses reset password.</p>
        </div>
        @if (session('status'))
            <div class="mb-4 text-green-600 font-semibold text-center">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" type="email" name="email" required autofocus class="mt-1 block w-full rounded-lg border border-orange-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50 px-3 py-2">
                @error('email')
                    <span class="text-red-600 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit"
                style="background: linear-gradient(to right, #f97316, #ec4899) !important; color: #fff !important; font-weight: bold !important; box-shadow: 0 4px 14px 0 rgba(236,72,153,0.15);"
                class="w-full py-2 rounded-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:ring-opacity-50">
                Lanjutkan
            </button>
        </form>
        <div class="mt-4 text-center">
            <a href="{{ route('login') }}" class="text-orange-600 hover:underline">Kembali ke Login</a>
        </div>
    </div>
</div>
@endsection 