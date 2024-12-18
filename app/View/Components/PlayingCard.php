<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PlayingCard extends Component
{
    public $play;
    public function __construct($play)
    {
        $this->play = $play;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.playing-card');
    }
}
