<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Session;
use Cart;
use DB,Auth;

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
            ->join('product_details','products.id','product_details.pro_id')
            ->select('products.*','product_details.*')->first();
            $pro_new = DB::table('products')
            ->join('product_details','products.id','product_details.pro_id')
            ->select('products.*','product_details.*')->orderBy('products.id','desc')->first();
            // dd($best_vote);
            $view->with(['best_vote'=> $best_vote,'pro_new'=> $pro_new]);
        });
        view()->composer(['back-end.home'],function($view){
          $date_now = date('Y/m/d');
          $day_now = date('d');
          $month_now = date('m');
          $year_now = date('Y');
          $dateint = mktime(0, 0, 0, $month_now, ($day_now-7), $year_now);
          $date = date('Y-m-d',$dateint);
          $date_a = date('d',$dateint);

          $a = [];
          $b = $date_a;
          for ($i=7; $i >0 ; $i--) {
            $dateint = mktime(0, 0, 0, $month_now, ($b+1), $year_now);
            $b++;
            $a[] = date('Y-m-d',$dateint); 
          }
          $count_oder  = DB::table('oders')->select(DB::raw("DATE(created_at) as created_at"),DB::raw("(COUNT(*)) as total_oders"))->whereDate('created_at','>',$date)->groupBy(DB::raw("DATE(created_at)"))->get()->toArray();
          $data = [];
          foreach ($a as $key => $value) {
            $t = 0;
            foreach ($count_oder as $v) {
                if($v->created_at == $value){
                    $t = $v->total_oders;
                }
            }
            $data[$value] = ['total' => $t];
          }
          $view->with(['data'=>$data]);
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
