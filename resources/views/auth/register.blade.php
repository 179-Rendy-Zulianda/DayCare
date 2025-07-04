<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - CandiceKids</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .glass-effect {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .gradient-text {
            background: linear-gradient(135deg, #f97316 0%, #0ea5e9 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        .input-focus {
            transition: all 0.3s ease;
        }
        .input-focus:focus {
            border-color: #f97316;
            box-shadow: 0 0 0 3px rgba(249, 115, 22, 0.1);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-sky-200 via-purple-100 to-pink-100 p-2">
    <!-- Background Decorative Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-10 left-10 floating">
            <div class="w-16 h-16 lg:w-20 lg:h-20 bg-orange-200 rounded-full opacity-20"></div>
        </div>
        <div class="absolute top-20 right-20 floating" style="animation-delay: 1s;">
            <div class="w-12 h-12 lg:w-16 lg:h-16 bg-cyan-200 rounded-full opacity-20"></div>
        </div>
        <div class="absolute bottom-20 left-20 floating" style="animation-delay: 2s;">
            <div class="w-20 h-20 lg:w-24 lg:h-24 bg-pink-200 rounded-full opacity-20"></div>
        </div>
        <div class="absolute bottom-10 right-10 floating" style="animation-delay: 0.5s;">
            <div class="w-10 h-10 lg:w-12 lg:h-12 bg-yellow-200 rounded-full opacity-20"></div>
        </div>
    </div>

    <!-- Main Register Container -->
    <div class="glass-effect rounded-3xl p-3 sm:p-4 lg:p-6 w-full max-w-sm sm:max-w-md lg:max-w-lg card-hover relative z-10">
        <!-- Header -->
        <div class="text-center mb-4 lg:mb-6">
            
            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold gradient-text mb-1">
                Candice<span class="text-cyan-600">Kids</span>
            </h1>
            
            <p class="text-xs sm:text-sm lg:text-base text-gray-600 mb-2 lg:mb-3">
                Cerdas Mandiri Ceria
            </p>
            
            <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-800">📝 REGISTER ACCOUNT</h2>
            <p class="text-xs sm:text-sm lg:text-base text-gray-600 mt-1">Register a new account for daycare users</p>
        </div>

        <!-- Error Messages -->
        @if($errors->any())
            <div class="glass-effect bg-red-50 border-l-4 border-red-400 p-2 sm:p-3 rounded-xl mb-3">
                <div class="flex items-center gap-2">
                    <span class="text-red-500 text-lg">⚠️</span>
                    <div>
                        <p class="text-red-700 font-semibold text-xs sm:text-sm">Please fix the following errors:</p>
                        <ul class="text-red-600 text-xs sm:text-sm mt-1 space-y-1">
                            @foreach($errors->all() as $error)
                                <li>• {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        <!-- Success Messages -->
        @if(session('success'))
            <div class="glass-effect bg-green-50 border-l-4 border-green-400 p-2 sm:p-3 rounded-xl mb-3">
                <div class="flex items-center gap-2">
                    <span class="text-green-500 text-lg">✅</span>
                    <p class="text-green-700 text-xs sm:text-sm font-semibold">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        <!-- Register Form -->
        <form method="POST" action="{{ route('register.post') }}" class="space-y-3 sm:space-y-4">
            @csrf

            <!-- FULLNAME -->
            <div class="space-y-1">
                <label for="name" class="flex items-center gap-2 text-xs sm:text-sm lg:text-base font-semibold text-gray-700">
                    <span class="text-lg sm:text-xl">👤</span>
                    <span>FULLNAME</span>
                </label>
                <input name="name" id="name" value="{{ old('name') }}" 
                       placeholder="Masukkan nama lengkap anda"
                       class="w-full bg-white/80 backdrop-blur-sm border-2 border-gray-200 rounded-xl px-3 sm:px-4 py-2 sm:py-3 input-focus outline-none text-sm lg:text-base" required>
            </div>

            <!-- EMAIL -->
            <div class="space-y-1">
                <label for="email" class="flex items-center gap-2 text-xs sm:text-sm lg:text-base font-semibold text-gray-700">
                    <span class="text-lg sm:text-xl">📧</span>
                    <span>EMAIL</span>
                </label>
                <input name="email" type="email" id="email" value="{{ old('email') }}"
                       placeholder="Masukkan email anda"
                       class="w-full bg-white/80 backdrop-blur-sm border-2 border-gray-200 rounded-xl px-3 sm:px-4 py-2 sm:py-3 input-focus outline-none text-sm lg:text-base" required>
            </div>

            <!-- PHONE -->
            <div class="space-y-1">
                <label for="phone" class="flex items-center gap-2 text-xs sm:text-sm lg:text-base font-semibold text-gray-700">
                    <span class="text-lg sm:text-xl">📱</span>
                    <span>PHONE</span>
                </label>
                <input name="phone" id="phone" value="{{ old('phone') }}"
                       placeholder="Masukkan nomor telepon anda"
                       class="w-full bg-white/80 backdrop-blur-sm border-2 border-gray-200 rounded-xl px-3 sm:px-4 py-2 sm:py-3 input-focus outline-none text-sm lg:text-base" required>
            </div>

            <!-- ADDRESS -->
            <div class="space-y-1">
                <label for="address" class="flex items-center gap-2 text-xs sm:text-sm lg:text-base font-semibold text-gray-700">
                    <span class="text-lg sm:text-xl">🏠</span>
                    <span>ADDRESS</span>
                </label>
                <input name="address" id="address" value="{{ old('address') }}"
                       placeholder="Masukkan alamat lengkap anda"
                       class="w-full bg-white/80 backdrop-blur-sm border-2 border-gray-200 rounded-xl px-3 sm:px-4 py-2 sm:py-3 input-focus outline-none text-sm lg:text-base" required>
            </div>

            <!-- USERNAME -->
            <div class="space-y-1">
                <label for="username" class="flex items-center gap-2 text-xs sm:text-sm lg:text-base font-semibold text-gray-700">
                    <span class="text-lg sm:text-xl">👤</span>
                    <span>USERNAME</span>
                </label>
                <input name="username" id="username" value="{{ old('username') }}"
                       placeholder="Masukkan username yang diinginkan"
                       class="w-full bg-white/80 backdrop-blur-sm border-2 border-gray-200 rounded-xl px-3 sm:px-4 py-2 sm:py-3 lg:py-4 input-focus outline-none text-sm lg:text-base" required>
            </div>

            <!-- PASSWORD -->
            <div class="space-y-2">
                <label for="password" class="flex items-center gap-2 text-xs sm:text-sm lg:text-base font-semibold text-gray-700">
                    <span class="text-lg sm:text-xl">🔒</span>
                    <span>PASSWORD</span>
                </label>
                <input type="password" name="password" id="password" 
                       placeholder="Masukkan password yang kuat"
                       class="w-full bg-white/80 backdrop-blur-sm border-2 border-gray-200 rounded-xl px-3 sm:px-4 py-2 sm:py-3 lg:py-4 input-focus outline-none text-sm lg:text-base" required>
            </div>

            <!-- PASSWORD CONFIRMATION -->
            <div class="space-y-2">
                <label for="password_confirmation" class="flex items-center gap-2 text-xs sm:text-sm lg:text-base font-semibold text-gray-700">
                    <span class="text-lg sm:text-xl">🔐</span>
                    <span>CONFIRM PASSWORD</span>
                </label>
                <input type="password" name="password_confirmation" id="password_confirmation" 
                       placeholder="Konfirmasi password anda"
                       class="w-full bg-white/80 backdrop-blur-sm border-2 border-gray-200 rounded-xl px-3 sm:px-4 py-2 sm:py-3 lg:py-4 input-focus outline-none text-sm lg:text-base" required>
            </div>

            <!-- TERMS -->
            <div class="flex items-start gap-3 mt-4 sm:mt-5">
                <input 
                    type="checkbox" 
                    id="terms" 
                    name="terms" 
                    value="1"
                    {{ old('terms') ? 'checked' : '' }}
                    class="w-4 h-4 text-orange-600 bg-gray-100 border-gray-300 rounded focus:ring-orange-500 focus:ring-2 mt-1"
                    required
                >
                <label for="terms" class="text-xs sm:text-sm text-gray-700">
                    Saya setuju dengan <span class="font-bold text-orange-600">Syarat dan Ketentuan</span> yang berlaku
                </label>
            </div>

            <!-- SUBMIT -->
            <div class="pt-2 sm:pt-4">
                <button type="submit" 
                        class="w-full bg-gradient-to-r from-red-600 to-orange-600 hover:from-red-700 hover:to-orange-700 text-orange font-bold py-2 sm:py-3 lg:py-4 px-4 sm:px-6 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    🚀 REGISTER
                </button>
            </div>
        </form>

        <!-- Login Link -->
        <div class="text-center mt-4 sm:mt-6 pt-4 sm:pt-6 border-t border-gray-200">
            <p class="text-xs sm:text-sm lg:text-base text-gray-600">
                Sudah punya akun? 
                <a href="{{ route('login') }}" class="text-orange-600 hover:text-orange-700 font-bold transition-colors">
                    🔐 Login Sekarang
                </a>
            </p>
        </div>

        <!-- Additional Info -->
        <div class="mt-4 sm:mt-6 text-center">
            <div class="glass-effect rounded-xl p-3 sm:p-4">
                <p class="text-xs sm:text-sm text-gray-600">
                    💡 Tips: Pastikan semua data yang diisi sudah benar dan lengkap
                </p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="fixed bottom-2 sm:bottom-4 left-1/2 transform -translate-x-1/2 text-center">
        <p class="text-xs sm:text-sm text-gray-500">
            © 2024 Candice Kids - Cerdas Mandiri Ceria
        </p>
    </div>
</body>
</html>