<?php

namespace App\Providers;

use App\Http\ViewComposers\HeaderComposer;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // On specifie les views qui peuvent acceder la variable @categories
        //définie dans App\Http\ViewComposers\HeaderComposer
        view()->composer(['main_template','shop.produit_template'],HeaderComposer::class);
    }
}
