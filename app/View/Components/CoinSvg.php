<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CoinSvg extends Component
{
    /**
     * Create a new component instance.
     */
    public $size;
    public function __construct($size = '30px')
    {
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.coin-svg');
    }


}