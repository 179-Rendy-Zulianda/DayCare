<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - DayCare</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-sky-200 min-h-screen flex items-center justify-center bg-cover" style="background-image: url('/assets/img/background.png')">
    <div class="bg-white bg-opacity-90 p-8 rounded-xl shadow-xl text-center max-w-xl w-full relative">
        <h1 class="text-2xl font-bold italic mb-1">REGISTER ACCOUNT</h1>
        <p class="font-[Comic_Sans_MS] text-lg mb-5">Register a new account for daycare users</p>

        <!-- Menampilkan pesan error validasi -->
        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Menampilkan pesan sukses -->
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('register.post') }}" class="space-y-4 text-left">
            @csrf

            <!-- FULLNAME -->
            <div class="flex items-center gap-1">
                <label for="name" class="w-36 font-bold text-sm flex-shrink-0">FULLNAME</label>
                <span class="mr-1 font-bold">:</span>
                <input name="name" id="name" value="{{ old('name') }}" 
                       class="flex-1 border-b border-black bg-transparent px-2 py-1 outline-none" required>
                @error('name')
                    <span class="text-red-500 text-sm ml-2">{{ $message }}</span>
                @enderror
            </div>

            <!-- EMAIL -->
            <div class="flex items-center gap-1">
                <label for="email" class="w-36 font-bold text-sm flex-shrink-0">EMAIL</label>
                <span class="mr-1 font-bold">:</span>
                <input name="email" type="email" id="email" value="{{ old('email') }}"
                       class="flex-1 border-b border-black bg-transparent px-2 py-1 outline-none" required>
                @error('email')
                    <span class="text-red-500 text-sm ml-2">{{ $message }}</span>
                @enderror
            </div>

            <!-- PHONE -->
            <div class="flex items-center gap-1">
                <label for="phone" class="w-36 font-bold text-sm flex-shrink-0">PHONE</label>
                <span class="mr-1 font-bold">:</span>
                <input name="phone" id="phone" value="{{ old('phone') }}"
                       class="flex-1 border-b border-black bg-transparent px-2 py-1 outline-none" required>
                @error('phone')
                    <span class="text-red-500 text-sm ml-2">{{ $message }}</span>
                @enderror
            </div>

            <!-- ADDRESS -->
            <div class="flex items-center gap-1">
                <label for="address" class="w-36 font-bold text-sm flex-shrink-0">ADDRESS</label>
                <span class="mr-1 font-bold">:</span>
                <input name="address" id="address" value="{{ old('address') }}"
                       class="flex-1 border-b border-black bg-transparent px-2 py-1 outline-none" required>
                @error('address')
                    <span class="text-red-500 text-sm ml-2">{{ $message }}</span>
                @enderror
            </div>

            <!-- USERNAME -->
            <div class="flex items-center gap-1">
                <label for="username" class="w-36 font-bold text-sm flex-shrink-0">USERNAME</label>
                <span class="mr-1 font-bold">:</span>
                <input name="username" id="username" value="{{ old('username') }}"
                       class="flex-1 border-b border-black bg-transparent px-2 py-1 outline-none" required>
                @error('username')
                    <span class="text-red-500 text-sm ml-2">{{ $message }}</span>
                @enderror
            </div>

            <!-- PASSWORD -->
            <div class="flex items-center gap-1">
                <label for="password" class="w-36 font-bold text-sm flex-shrink-0">PASSWORD</label>
                <span class="mr-1 font-bold">:</span>
                <input type="password" name="password" id="password" 
                       class="flex-1 border-b border-black bg-transparent px-2 py-1 outline-none" required>
                @error('password')
                    <span class="text-red-500 text-sm ml-2">{{ $message }}</span>
                @enderror
            </div>

            <!-- PASSWORD CONFIRMATION -->
            <div class="flex items-center gap-1">
                <label for="password_confirmation" class="w-36 font-bold text-sm flex-shrink-0">CONFIRM PASSWORD</label>
                <span class="mr-1 font-bold">:</span>
                <input type="password" name="password_confirmation" id="password_confirmation" 
                       class="flex-1 border-b border-black bg-transparent px-2 py-1 outline-none" required>
            </div>

            <!-- TERMS -->
            <div class="flex items-center mt-4">
                <input 
                    type="checkbox" 
                    id="terms" 
                    name="terms" 
                    value="1"
                    {{ old('terms') ? 'checked' : '' }}
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2"
                    required
                >
                <label for="terms" class="ms-2 text-sm">I agree to the <b>Terms and Conditions</b></label>
                @error('terms')
                    <span class="text-red-500 text-sm block">{{ $message }}</span>
                @enderror
            </div>

            <!-- SUBMIT -->
            <div class="text-center">
                <button type="submit" class="mt-3 bg-yellow-200 hover:bg-yellow-300 text-black font-bold py-2 px-6 rounded-full transition duration-300">
                    REGISTER
                </button>
            </div>
        </form>

        <p class="mt-4 text-sm text-center">
            Sudah punya akun? <a href="{{ route('login') }}" class="text-orange-500 font-bold hover:text-orange-700 transition duration-300">Login</a>
        </p>
    </div>
</body>
</html>