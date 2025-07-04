<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CandiceKids</title>
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
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-sky-200 via-purple-100 to-pink-100 p-4">
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

    <!-- Main Login Container -->
    <div class="glass-effect rounded-3xl p-4 sm:p-6 lg:p-8 w-full max-w-sm sm:max-w-md lg:max-w-lg card-hover relative z-10">
        <!-- Header -->
        <div class="text-center mb-6 lg:mb-8">
            
            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold gradient-text mb-2">
                Candice<span class="text-cyan-600">Kids</span>
            </h1>
            
            <p class="text-xs sm:text-sm lg:text-base text-gray-600 mb-3 lg:mb-4">
                Cerdas Mandiri Ceria
            </p>
            
            <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-800">🔐 LOGIN</h2>
        </div>

        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}" class="space-y-4 sm:space-y-6">
            @csrf

            <!-- Username Field -->
            <div class="space-y-2">
                <label for="username" class="flex items-center gap-2 text-xs sm:text-sm lg:text-base font-semibold text-gray-700">
                    <span class="text-lg sm:text-xl">👤</span>
                    <span>USERNAME</span>
                </label>
                <div class="relative">
                    <input 
                        type="text" 
                        id="username" 
                        name="username" 
                        required 
                        placeholder="Masukkan username anda"
                        class="w-full bg-white/80 backdrop-blur-sm border-2 border-gray-200 rounded-xl px-3 sm:px-4 py-2 sm:py-3 lg:py-4 input-focus outline-none text-sm lg:text-base"
                    >
                </div>
            </div>

            <!-- Password Field -->
            <div class="space-y-2">
                <label for="password" class="flex items-center gap-2 text-xs sm:text-sm lg:text-base font-semibold text-gray-700">
                    <span class="text-lg sm:text-xl">🔒</span>
                    <span>PASSWORD</span>
                </label>
                <div class="relative">
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        required 
                        placeholder="Masukkan password anda"
                        class="w-full bg-white/80 backdrop-blur-sm border-2 border-gray-200 rounded-xl px-3 sm:px-4 py-2 sm:py-3 lg:py-4 input-focus outline-none text-sm lg:text-base"
                    >
                </div>
            </div>

            <!-- Forgot Password -->
            <div class="text-right">
                <a href="#" class="text-xs sm:text-sm lg:text-base text-orange-600 hover:text-orange-700 font-medium transition-colors">
                    🔑 Lupa Sandi?
                </a>
            </div>

            <!-- Submit Button -->
            <div class="pt-2 sm:pt-4">
                <button 
                    type="submit" 
                    class="w-full bg-gradient-to-r from-red-600 to-orange-600 hover:from-red-700 hover:to-orange-700 text-orange font-bold py-2 sm:py-3 lg:py-4 px-4 sm:px-6 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1"
                >
                    🚀 LOGIN
                </button>
            </div>
        </form>

        <!-- Register Link -->
        <div class="text-center mt-4 sm:mt-6 pt-4 sm:pt-6 border-t border-gray-200">
            <p class="text-xs sm:text-sm lg:text-base text-gray-600">
                Belum punya akun? 
                <a href="{{ route('register') }}" class="text-orange-600 hover:text-orange-700 font-bold transition-colors">
                    📝 Register Sekarang
                </a>
            </p>
        </div>

        <!-- Additional Info -->
        <div class="mt-4 sm:mt-6 text-center">
            <div class="glass-effect rounded-xl p-3 sm:p-4">
                <p class="text-xs sm:text-sm text-gray-600">
                    💡 Tips: Pastikan username dan password anda benar
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