<?php

namespace App\View\Components;

use App\Models\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class food extends Component
{
    /**
     * Create a new component instance.
     */
    public $foods;
    public function __construct()
    {
        $this->foods = Product::where('category_id', 1)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.food');
    }
}
