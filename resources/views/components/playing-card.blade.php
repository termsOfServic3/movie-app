<div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
    <img class="h-72 w-full object-cover" src="{{ 'https://image.tmdb.org/t/p/w500/'.$play['backdrop_path']}}" alt="{{ $play['title'] }}">
    <div class="p-4">
        <h2 class="text-xl font-semibold mb-2">{{ $play['title'] }}</h2>
        <div class="flex justify-between items-center mb-2">
            <div class="bg-yellow-400 text-gray-900 font-bold rounded-xl px-2 py-1">{{ $play['vote_average'] }}</div>
            <div class="text-sm text-gray-400 font-bold">{{ $play['release_date'] }}</div>
        </div>
        <p class="text-gray-300 mb-2">{{ $play['overview'] }}</p>
        <a href="{{route('movies.show', $play['id'])}}">
            <div class="flex justify-between items-center mt-4">
                <button class="bg-blue-600 text-white rounded-lg px-3 py-2 hover:bg-blue-500 transition">Watch Now</button>
                <button class="bg-gray-700 text-white rounded-lg px-3 py-2 hover:bg-gray-600 transition">Details</button>
            </div>
        </a>
    </div>
</div>
