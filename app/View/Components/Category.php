<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\CategoryProduct;

class Category extends Component
{
    /**
     * Create a new component instance.
     */
    public $categories;
    public function __construct(CategoryProduct $categoryProduct)
    {
        $this->categories = $categoryProduct->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category');
    }
}
