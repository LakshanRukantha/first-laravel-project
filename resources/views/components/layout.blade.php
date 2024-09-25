<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Step Into Laravel</title>
    @vite('resources/js/app.js')
</head>

<body class="flex flex-col items-center">
    <div class="flex flex-col items-center bg-gray-100 w-full shadow">
        <nav
            class="flex max-w-5xl border-b-2 w-full text-lg items-center py-3 z-10 bg-gray-100 md:bg-transparent px-4 lg:px-0">
            <div class="flex flex-1 gap-4">
                <x-nav-link href="/" class="font-bold uppercase text-orange-500 py-1">Smart Hub</x-nav-link>
                <ul class="hidden md:flex gap-1">
                    <x-nav-link href="/"
                        class="{{ request()->is('/') ? 'bg-orange-500/80 hover:bg-orange-500/90 text-white' : '' }} py-1 px-4 transition-colors rounded-full">Home</x-nav-link>
                    <x-nav-link href="/products"
                        class="{{ request()->is('products') ? 'bg-orange-500/80 hover:bg-orange-500/90 text-white' : '' }} py-1 px-4 transition-colors rounded-full">Products</x-nav-link>
                    <x-nav-link href="/contact"
                        class="{{ request()->is('contact') ? 'bg-orange-500/80 hover:bg-orange-500/90 text-white' : '' }} py-1 px-4 transition-colors rounded-full">Contact</x-nav-link>
                </ul>
            </div>
            <div class="hidden md:flex gap-2">
                <x-nav-link type='button'
                    class="text-white bg-blue-500 hover:bg-blue-600 py-1 px-4 rounded">Login</x-nav-link>
                <x-nav-link type='button'
                    class="text-blue-500 bg-transparent border hover:bg-blue-500 hover:text-white transition-colors border-blue-500 py-1 px-4 rounded">Register</x-nav-link>
            </div>
            <button id="nav-btn" class="md:hidden"><i class="fa-solid fa-bars text-2xl"></i></button>
            {{-- Mobile menu --}}
        </nav>
        <di id="mobile-menu"
            class="absolute transition-all flex -top-40 z-0 left-0 bg-gray-100 duration-300 shadow w-full">
            <ul class="flex flex-col md:hidden w-full gap-2 py-2 px-4">
                <x-nav-link href="/"
                    class="{{ request()->is('/') ? 'bg-orange-500/80 hover:bg-orange-500/90 text-white' : '' }} hover:bg-orange-200/50 py-2 px-4 transition-colors">Home</x-nav-link>
                <x-nav-link href="/products"
                    class="{{ request()->is('products') ? 'bg-orange-500/80 hover:bg-orange-500/90 text-white' : '' }} hover:bg-orange-200/50 py-2 px-4 transition-colors w-full">Products</x-nav-link>
                <x-nav-link href="/contact"
                    class="{{ request()->is('contact') ? 'bg-orange-500/80 hover:bg-orange-500/90 text-white' : '' }} hover:bg-orange-200/50 py-2 px-4 transition-colors">Contact</x-nav-link>
                <hr />
                <div class="flex w-full gap-2">
                    <x-nav-link type='button'
                        class="text-white flex-1 bg-blue-500 hover:bg-blue-600 py-2 px-4 rounded">Login</x-nav-link>
                    <x-nav-link type='button'
                        class="text-blue-500 flex-1 bg-transparent border hover:bg-blue-500 hover:text-white transition-colors border-blue-500 py-2 px-4 rounded">Register</x-nav-link>
                </div>
            </ul>
    </div>
    </div>
    @isset($pageTitle)
        <div class="max-w-5xl py-4 px-4 lg:px-0 w-full">
            <h1 class="text-2xl font-bold"> {{ $pageTitle }}</h1>
        </div>
    @endisset

    <hr class="bg-slate-500 max-w-5xl w-full" />
    <div class="max-w-5xl py-4 px-4 lg:px-0 w-full">
        {{ $slot }}
    </div>
</body>

</html>
