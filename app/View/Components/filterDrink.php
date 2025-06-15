<?php
namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;

class FilterDrink extends Component
{
public $filterdrink;

public function __construct()
{
$this->filterdrink = Product::where('category_id', 1)->get();
}

public function render()
{
return view('components.filter-drink', [
'filterdrink' => $this->filterdrink,
]);
}
}
