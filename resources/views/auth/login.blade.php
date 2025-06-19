<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - DayCare</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex items-center justify-center bg-sky-200">
    <div class="bg-white bg-opacity-90 rounded-2xl p-8 w-[500px] text-center shadow-md">
        <h2 class="text-2xl font-bold font-[Comic_Sans_MS] mb-4">LOGIN</h2>

        <form method="POST" action="{{ route('login') }}" class="space-y-4 text-left">
            @csrf

            <!-- Username Row -->
            <div class="flex items-center gap-2">
                <span class="text-lg">👤</span>
                <label for="username" class="w-28 font-semibold text-sm flex-shrink-0">USERNAME</label>
                <span class="mr-1 font-bold">:</span>
                <input 
                    type="text" 
                    id="username" 
                    name="username" 
                    required 
                    class="flex-1 border-b-2 border-gray-500 bg-transparent px-2 py-1 outline-none"
                >
            </div>

            <!-- Password Row -->
            <div class="flex items-center gap-2">
                <span class="text-lg">🔒</span>
                <label for="password" class="w-28 font-semibold text-sm flex-shrink-0">PASSWORD</label>
                <span class="mr-1 font-bold">:</span>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    required 
                    class="flex-1 border-b-2 border-gray-500 bg-transparent px-2 py-1 outline-none"
                >
            </div>

            <!-- Forgot password -->
            <div class="text-xs text-right mt-1">
                <a href="#" class="text-blue-600 hover:underline">Lupa Sandi</a>
            </div>

            <!-- Submit -->
            <div class="text-center">
                <button 
                    type="submit" 
                    class="mt-4 bg-yellow-200 hover:bg-yellow-300 text-black font-bold py-2 px-6 rounded-full"
                >
                    LOGIN
                </button>
            </div>
        </form>

        <!-- Register Link -->
        <p class="mt-4 text-sm">
            Belum punya akun? <a href="{{ route('register') }}" class="text-orange-500 font-bold">Register</a>
        </p>
    </div>
</body>
</html>
