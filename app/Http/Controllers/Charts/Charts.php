<?php

namespace App\Http\Controllers\Charts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\oder;
use DB;

class Charts extends Controller
{
    public function index(){
    	$date_now = date('Y/m/d');
    	$day_now = date('d');
    	$month_now = date('m');
    	$year_now = date('Y');
    	$dateint = mktime(0, 0, 0, $month_now, ($day_now-7), $year_now);
    	$date = date('Y-m-d',$dateint);

    	$count_oder = DB::table('oders')->select("created_at",DB::raw("(COUNT(*)) as total_oders"))->whereDate('created_at','>',$date)->groupBy(DB::raw("DATE(created_at)"))->get();
  		return view('back-end.home',compact($count_oder));

    }
}
