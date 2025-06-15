<?php

namespace App\Providers;

use App\Models\Product;
use Illuminate\Support\ServiceProvider;

class viewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        view()->composer(['index','dashboard.filter.filterDrinks'], function ($view) {
            $drinks = Product::where('category_id',1)->get();
            $view->with('drinks', $drinks);
        });
        view()->composer(['index','dashboard.filter.filterFoods'], function ($view) {
            $foods = Product::where('category_id',2)->get();
            $view->with('foods', $foods);
        });
        view()->composer(['index','dashboard.filter.filterDetergent'], function ($view) {
            $detergents = Product::where('category_id',3)->get();
            $view->with('detergents', $detergents);
        });
        view()->composer(['index','dashboard.filter.filterCanned'], function ($view) {
            $canned = Product::where('category_id',4)->get();
            $view->with('canned', $canned);
        });

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
