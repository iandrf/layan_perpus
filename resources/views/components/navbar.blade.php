<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <!-- Icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body class="font-Poppins bg-custom-dark">
    <!-- Navbar -->
    <div class="fixed z-50 top-0 px-4 mx-auto w-full sm:px-6">
        <div class="relative pt-4 sm:pb-6">
            <nav class="relative flex items-center justify-between sm:h-10 md:justify-center">
                <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                    <div class="flex items-center justify-between w-full md:w-auto">
                        <a href="#">
                            <img class="w-auto h-8 sm:h-11" src="{{ asset('image/bg.png') }}">
                        </a>
                    </div>
                </div>
                <div class="hidden md:flex md:space-x-10">
                    <a href="#" class="border-b-2 border-transparent transition border-opacity-0 hover:border-opacity-100 hover:border-white duration-500 text-base text-white">Bebas Pustaka</a>
                    <a href="#" class="border-b-2 border-transparent transition border-opacity-0 hover:border-opacity-100 hover:border-white duration-500 text-base text-white">Penyerahan KP</a>
                    <a href="#" class="border-b-2 border-transparent transition border-opacity-0 hover:border-opacity-100 hover:border-white duration-500 text-base text-white">Validasi TA</a>
                    <a href="#" class="border-b-2 border-transparent transition border-opacity-0 hover:border-opacity-100 hover:border-white duration-500 text-base text-white">Sumbangan Buku</a>
                </div>
                <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
                    <div class="inline-flex rounded-full shadow">
                        <a href="#" class="inline-flex items-center px-3 py-1 text-base font-medium text-gray-900 bg-white border border-transparent rounded-full cursor-pointer hover:bg-black hover:text-white">Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- End Navbar -->

    <!-- Page Content -->
    <main class="mt-24">
        @yield('content')
    </main>

</body>

</html>
