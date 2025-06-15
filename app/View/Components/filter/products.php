<?php

namespace App\View\Components\filter;

use App\Models\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class products extends Component
{
    /**
     * Create a new component instance.
     */
    public $drinks = [];
    public function __construct()
    {
        $this->drinks = Product::where('category_id', 1)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.filter.products');
    }
}
