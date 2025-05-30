<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Route::aliasMiddleware('admin', \App\Http\Middleware\IsAdminMiddleware::class);
        Route::aliasMiddleware('user', \App\Http\Middleware\IsUserMiddleware::class);
        Route::aliasMiddleware('user-access', \App\Http\Middleware\IsUserMiddleware::class,);
    }
}