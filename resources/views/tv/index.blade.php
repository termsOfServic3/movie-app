@extends('components.layout')


@section('tv')
<body class="bg-gray-900 text-white">


<header class="bg-black py-6">
    <div class="container mx-auto text-center">
        <h1 class="text-4xl font-bold">Movie Gallery</h1>
        <p class="mt-2 text-lg">Discover your favorite movies</p>
    </div>
</header>

<div class="popular-movies py-24">
    <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold px-6 ml-44">POPULAR SHOWS</h2>
    <main class="py-6">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($popularTv as $tvshow)
                    <x-tv-card :tvshow="$tvshow"/>
                @endforeach
            </div>
        </div>
</div>
</main>

<div class="now-playing-movies py-24">
    <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold px-6 ml-44">TOP RATED SHOW</h2>
    <main class="py-6">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($popularTv as $tvshow)
                    <x-tv-card :tvshow="$tvshow"/>
                @endforeach
            </div>
        </div>
</div>
</main>

<footer class="bg-gray-800 py-4">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 Movie Gallery. All rights reserved.</p>
    </div>
</footer>

</body>
@endsection
