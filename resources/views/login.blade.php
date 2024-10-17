<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    @vite('resources/css/app.css')

</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-300 py-4">
        <div class="w-full max-w-md bg-white/30 p-6 rounded-lg backdrop-blur-sm border border-white">
            <a class="flex items-center pl-2.5 mb-5">
                <img src="{{ asset('images/logobp.png') }}" class="h-6 w-6 mr-3 sm:h-7" alt="BinaPertiwi Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">BinaPertiwi</span>
            </a>
            <form action="{{ route('login.submit') }}" method="POST" class="items-center justify-center max-w-md mx-auto overflow-hidden shadow-sm rounded-lg p-6 border border-gray-200">

                @csrf

                @if ($errors->has('login'))
                <div class="text-red-500 mb-4">{{ $errors->first('login') }}</div>
                @endif

                <div class="mb-4">
                    <label for="email" class="block">Email:</label>
                    <input type="email" id="email" name="email" class="border border-gray-300 focus:outline-none focus:border-blue-500 rounded px-3 py-2 w-full">
                </div>

                <div class="mb-4">
                    <label for="password" class="block">Password:</label>
                    <input type="password" id="password" name="password" class="border border-gray-300 focus:outline-none focus:border-blue-500 rounded px-3 py-2 w-full">
                </div>
                <div class="text-center">

                    <button type="submit" class="bg-blue-500 text-white mx-auto px-4 py-2 rounded hover:bg-blue-600">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>