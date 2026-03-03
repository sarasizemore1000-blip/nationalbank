<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>National Bank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white">

<main class="min-h-screen">

    <!-- NAVBAR -->
    <header class="w-full border-b">
        <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">

            <!-- LOGO -->
            <div class="flex items-center gap-3 font-bold text-xl text-black">
                <img src="http://127.0.0.1:8000/storage/images/nationallogo1.jpg" alt="Logo">
            </div>

            <!-- NAV LINKS -->
            <nav class="hidden md:flex gap-8 text-sm text-gray-700">
                <a href="#">Personal</a>
                <a href="#">Business</a>
                <a href="#">Wealth Management</a>
                <a href="#">About Us</a>
            </nav>

            <!-- LOGIN BUTTON -->
            <a href="{{ route('login') }}"
               class="bg-[#C40000] text-white px-4 py-2 rounded-full text-sm inline-block hover:bg-[#9E0000] transition">
                Log in
            </a>

        </div>
    </header>

  <!-- LEFT HERO -->
<div class="relative h-96 md:h-[440px] flex items-center justify-center bg-gray-100">
    <!-- NBC Image -->
    <img src="http://127.0.0.1:8000/storage/images/nbc.jpg"
         alt="Hero"
         class="max-h-full object-contain w-auto">

    <!-- Login Button at Bottom Center -->
<div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 z-10">
    <a href="{{ route('login') }}"
       class="bg-white text-[#C40000] border-2 border-[#C40000] px-12 py-6 text-2xl rounded-full font-bold shadow-lg hover:scale-105 transition transform">
        Log in
    </a>
</div>
    </div>
</div>
       
    </section>

    <!-- PRODUCTS BAR -->
    <section class="border-t">
        <div class="max-w-7xl mx-auto px-6 py-6 flex flex-wrap gap-6 text-sm text-gray-700">
            <span>Bank accounts</span>
            <span>Credit cards</span>
            <span>Borrowing</span>
            <span>Mortgages</span>
            <span>Savings and investments</span>
            <span>Insurance</span>
            <span>Advice</span>
        </div>
    </section>

</main>

</body>
</html>