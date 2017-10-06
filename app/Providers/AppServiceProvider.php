<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Session;
use Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer(['front_end.layouts.header',],function($view){
            if(Cart::count() > 0){
                $content=Cart::content();
                $subtotal= Cart::subtotal();
                $view->with(['content'=>$content,'subtotal'=>$subtotal]);
            }
        });   
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
