<!-- resources/views/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - National Bank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-white">

<div class="min-h-screen grid md:grid-cols-2">

    <!-- LEFT IMAGE -->
    <div class="relative hidden md:block">
        <img src="{{ asset('storage/images/loggirl.jpg') }}" 
             alt="National Bank Visual" 
             class="w-full h-full object-cover">
    </div>

    <!-- RIGHT FORM -->
    <div class="flex items-center justify-center px-8">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">

            <!-- Language selector -->
            <div class="flex justify-end mb-6">
                <a href="#" class="text-sm text-[#1976d2] hover:underline">
                    Français
                </a>
            </div>

            <!-- Logo -->
            <div class="flex items-left mb-10 justify-left">
                <img src="{{ asset('storage/images/nationallogo1.jpg') }}" 
                     alt="National Bank Logo" 
                     width="180" 
                     height="60">
            </div>

            <!-- Flash Messages -->
            @if(session('success'))
                <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Laravel Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <label class="block font-semibold text-gray-700">Email ID</label>
                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Enter your email ID"
                        required
                        class="w-full border rounded px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-[#1a237e]"
                    >
                    @error('email')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block font-semibold text-gray-700">Password</label>
                    <input
                        type="password"
                        name="password"
                        placeholder="Enter your password"
                        required
                        class="w-full border rounded px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-[#1a237e]"
                    >
                    @error('password')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="w-full bg-[#C40000] text-white py-3 rounded-full font-medium hover:bg-[#9E0000] transition"
                >
                    Sign in
                </button>
            </form>

            <div class="text-center mt-4">
                Don't have an account? 
                <a href="{{ route('register') }}" class="text-[#1976d2] font-bold underline">
                    Register
                </a>
            </div>

        </div>
    </div>
</div>

</body>
</html>