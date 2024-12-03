<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use function PHPSTORM_META\map;

class MoviesViewModel extends ViewModel
{
    public $popularMovies;
    public $playing;

    public function __construct($popularMovies, $playing)
    {
        $this->popularMovies = $popularMovies;
        $this->playing = $playing;
    }

    public function popularMovies() {
       return collect($this->popularMovies)->map(function($movie) {
           return collect($movie)->merge([
               'poster_path' => 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'],
               'vote_average' => $movie['vote_average'],
               'release_date' => $movie['release_date'],
               'overview' => $movie['overview'],
               route('movies.show', $movie['id'])
           ]);
        });
    }
    public function playing() {
        return collect($this->playing)->map(function($play) {
            return collect($play)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/'.$play['poster_path'],
                'vote_average' => $play['vote_average'],
                'release_date' => $play['release_date'],
                'overview' => $play['overview'],
                route('movies.show', $play['id'])
            ]);
        });
    }
}
