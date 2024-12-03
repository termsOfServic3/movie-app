<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireStyles
</head>
<body class="h-full bg-black text-white">
<div class="hidden md:block">
    <div class="mx-auto max-w-7x0 px-4 py-6 sm:px-4 lg:px-8 sm:flex sm:justify-between">
    <div class="ml-10 flex items-center flex justify-between space-x-4">
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/tv" :active="request()->is('tv')">TV</x-nav-link>
        <x-nav-link href="/actors" :active="request()->is('actors.index')">Actor</x-nav-link>
        <livewire:search-dropdown>
    </div>
    </div>
</div>
@livewireScripts
</body>
</html>
@yield('content')
@yield('actors')
@yield('actor')
@yield('tv')





