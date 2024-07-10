<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Siswa</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .bg-cover {
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-cover bg-sky-200" style="background-image: url('/path/to/your/background/image.jpg');">
    <div class="flex justify-center items-center h-screen bg-black bg-opacity-50">
        <div class="w-full max-w-sm">
            <div class="bg-white shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4">
                <div class="mb-6 text-center">
                    <h1 class="text-2xl font-bold text-gray-800">Halaman Login</h1>
                    <p class="text-gray-600">Silakan masuk dengan email dan password Anda</p>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('email')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <input id="password" type="password" name="password" required autocomplete="current-password"
                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('password')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Masuk
                        </button>
                        <a href="#" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                            Lupa kata sandi?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
