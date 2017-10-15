<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Session;
use Cart;
use DB;

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
        view()->composer(['front_end.layouts.menu_right'],function($view){
            $best_vote = DB::table('products')
            ->join('binhchon','binhchon.pro_id','products.id')
            ->join('product_details','products.id','product_details.pro_id')
            ->select(DB::raw('count(*) as total, binhchon.pro_id'),'products.*','product_details.*')
            ->groupBy('binhchon.pro_id')
            ->orderBy('total','desc')->first();
            $pro_new = DB::table('products')
            ->join('product_details','products.id','product_details.pro_id')
            ->select('products.*','product_details.*')->orderBy('products.id','desc')->first();
            // dd($best_vote);
            $view->with(['best_vote'=> $best_vote,'pro_new'=> $pro_new]);
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
