<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use DB;
use App\product;
use App\product_detail;
use App\category;
use App\product_img;
use App\ShopImages;
use App\Shop;
use Cart;
use Session;
use Auth;

class PagesController extends Controller
{

    public function getHome(){
        $datas = file_get_contents('http://localhost/Garage/public/api/garage/1');
        $datas = json_decode($datas);
        $datas = $datas->datas;
        return view('front_end.home',compact('datas'));

    }

    public function get_client_ip() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
   
    public function Detail($id,$slug){
	    $pro=product::find($id);
        $pro_img=DB::table('product_imgs')->where('pro_id',$id)->select('product_imgs.images')->paginate(3);
        
	    $cat_id = $pro->cat_id;
        $mobile=DB::table('products')->where('cat_id',$cat_id)
            ->join('product_details','product_details.pro_id','=','products.id')->select('products.*','product_details.*')
            ->paginate(3);
        $category =category::all();
	    $pro_related=DB::table('products')->where('cat_id',$cat_id)->where('id','<>',$id)->take(5)->get();
    	return view('front_end.detail',compact(['pro','slug','pro_related','pro_img','category','mobile']));
    }
    public function DetailGarage($id){
        $datas = file_get_contents('http://localhost/Garage/public/api/detail/'.$id);
        $datas = json_decode($datas);
        $shop = $datas->datas;
        // dd($shop);
        $comment = file_get_contents('http://localhost/Garage/public/api/listcomment/'.$id);
        $comments = json_decode($comment);
        $comment = $comments->data->comment;
        $numb_comment = $comments->data->numb_comment;
        return view('front_end.detailshop',compact(['comment','numb_comment','shop']));
    }
    public function Detail_1($id){
        $pro=product::find($id);
        $pro_img=DB::table('product_imgs')->where('pro_id',$id)->select('product_imgs.images')->paginate(3);
        
        $cat_id = $pro->cat_id;
        $mobile=DB::table('products')->where('cat_id',$cat_id)
            ->join('product_details','product_details.pro_id','=','products.id')->select('products.*','product_details.*')
            ->paginate(3);
        $category =category::all();
        $pro_related=DB::table('products')->where('cat_id',$cat_id)->where('id','<>',$id)->take(5)->get();
        return view('front_end.detail',compact(['pro','pro_related','pro_img','category','mobile']));
    }
    public function checkOut(){
	    $content=Cart::content();
	    $total=Cart::total();
    	return view('front_end.checkout',compact(['content','total']));
    }
 
   
}
