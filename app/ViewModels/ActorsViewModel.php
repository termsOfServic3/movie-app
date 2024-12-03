<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class ActorsViewModel extends ViewModel
{
    public $page;
    public $popularActors;

    public function __construct($popularActors, $page)
    {
        $this->popularActors = $popularActors;
        $this->page = $page;
    }

    public function popularActors() {
        return collect($this->popularActors)->map(function($actors) {
            return collect($actors)->merge([
                'profile_path' => $actors['profile_path']
                    ? 'https://image.tmdb.org/t/p/w235_and_h235_face'.$actors['profile_path']
                    : 'https://ui-avatars.com/api/?size=235&name='.$actors['name'],
                'known_for' => collect($actors['known_for'])->where('media_type', 'movie')->pluck('title')->union(
                    collect($actors['known_for'])->where('media_type', 'tv')->pluck('name')
                )->implode(', '),
            ])->only([
                'name', 'id', 'profile_path', 'known_for',
            ]);
        });
    }

    public function previous() {
        return $this->page > 1 ? $this->page - 1 : null;
    }

    public function next() {
        return $this->page < 500 ? $this->page + 1 : null;
    }

}





