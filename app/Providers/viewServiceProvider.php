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
        view()->composer(['layouts.app','panelAdmin.users.edit'], function ($view) {
            $drinks = Product::where('category_id',1)->get();
            $view->with('drinks', $drinks);
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
