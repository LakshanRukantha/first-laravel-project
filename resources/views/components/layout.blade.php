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
                <x-nav-link href="/" class="font-bold uppercase text-red-500">Laravel</x-nav-link>
                <ul class="flex gap-4">
                    <x-nav-link href="/">Home</x-nav-link>
                    <x-nav-link href="/about">About</x-nav-link>
                    <x-nav-link href="/contact">Contact</x-nav-link>
                </ul>
            </div>
            <div class="">
                <button class="text-white bg-blue-500 py-1 px-3 rounded">Login</button>
                <button class="text-blue-500 bg-transparent border border-blue-500 py-1 px-3 rounded">Register</button>
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
