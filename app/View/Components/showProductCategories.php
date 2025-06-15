<?php

namespace App\View\Components;

use App\Models\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class showProductCategories extends Component
{
    /**
     * Create a new component instance.
     */
    public $foods;
    public $drinks;
    public $cannedFood;
    public  $detergent;
    public function __construct()
    {
        $this->foods = Product::where('category_id', 1);
        $this->drinks = Product::where('category_id', 2);
        $this->cannedFood = Product::where('category_id', 3);
        $this->detergent = Product::where('category_id', 4);

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.show-product-categories');
    }
}
