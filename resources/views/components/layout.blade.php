<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Step Into Laravel</title>
    @vite('resources/js/app.js')
</head>

<body class="flex flex-col items-center">
    <div class="flex flex-col items-center bg-gray-100 w-full shadow">
        <nav class="flex max-w-5xl w-full text-lg items-center py-3 px-4 lg:px-0">
            <div class="flex flex-1 gap-4">
                <x-nav-link href="/" class="font-bold uppercase text-red-500 py-1">Laravel</x-nav-link>
                <ul class="flex gap-1">
                    <x-nav-link href="/" class="{{ request()->is('/') ? 'bg-red-500/80 hover:bg-red-500/90 text-white' : ''}} py-1 px-4 transition-colors rounded-full">Home</x-nav-link>
                    <x-nav-link href="/about" class="{{ request()->is('about') ? 'bg-red-500/80 hover:bg-red-500/90 text-white' : ''}} py-1 px-4 transition-colors rounded-full">About</x-nav-link>
                    <x-nav-link href="/contact" class="{{ request()->is('contact') ? 'bg-red-500/80 hover:bg-red-500/90 text-white' : ''}} py-1 px-4 transition-colors rounded-full">Contact</x-nav-link>
                </ul>
            </div>
            <div class="">
                <x-nav-link type='button' class="text-white bg-blue-500 hover:bg-blue-600 py-1 px-4 rounded">Login</x-nav-link>
                <x-nav-link type='button' class="text-blue-500 bg-transparent border hover:bg-blue-500 hover:text-white transition-colors border-blue-500 py-1 px-4 rounded">Register</x-nav-link>
            </div>
        </nav>
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
