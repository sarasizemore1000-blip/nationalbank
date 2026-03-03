<!-- resources/views/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - National Bank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100">

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

            <!-- Top Bar / Language -->
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

            <!-- Form Title -->
            <h2 class="text-2xl text-[#C40000] font-bold text-center mb-6">
                Create Account
            </h2>

            <!-- Display error messages -->
            @if ($errors->any())
                <div class="mb-4 text-red-600">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('error'))
                <p class="text-red-600 mb-4">{{ session('error') }}</p>
            @endif

            <!-- Laravel Form -->
            <form class="space-y-4" method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <label class="block font-semibold text-gray-700">Full Name</label>
                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Enter full name"
                        required
                        class="w-full border rounded px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-[#C40000]"
                    >
                </div>

                <div>
                    <label class="block font-semibold text-gray-700">Email Address</label>
                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Enter email"
                        required
                        class="w-full border rounded px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-[#C40000]"
                    >
                </div>

                <div>
                    <label class="block font-semibold text-gray-700">Password</label>
                    <input
                        type="password"
                        name="password"
                        placeholder="Enter password"
                        required
                        class="w-full border rounded px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-[#C40000]"
                    >
                </div>

                <div>
                    <label class="block font-semibold text-gray-700">Confirm Password</label>
                    <input
                        type="password"
                        name="password_confirmation"
                        placeholder="Confirm password"
                        required
                        class="w-full border rounded px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-[#C40000]"
                    >
                </div>

                <!-- Red Register Button -->
                <button
                    type="submit"
                    class="w-full bg-[#C40000] text-white py-3 rounded-full font-medium hover:bg-[#9E0000] transition"
                >
                    Register
                </button>
            </form>

            <div class="text-center mt-4">
                Already have an account? 
                <a href="{{ route('login') }}" class="text-[#C40000] font-bold underline">
                    Login
                </a>
            </div>

        </div>
    </div>
</div>

</body>
</html>