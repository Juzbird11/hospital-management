<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class StockServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Route::pattern('stock', 'inventory|pharmacy|hospital');

        Route::bind('stock', function (string $value) {
            return app("App\Models\\" . ucfirst($value) . "Product");
        });
    }
}
