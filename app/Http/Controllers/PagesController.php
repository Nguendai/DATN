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
use App\binhchon;

class PagesController extends Controller
{

    public function getHome(){
        $datas = file_get_contents('http://localhost/DATN/public/api/product/1');
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
   
    public function getProduct($id){
    	$name_cate=category::find($id);
	    $product=DB::table('products')->where('cat_id',$id)->join('product_details','product_details.pro_id','=','products.id')->select('products.*','product_details.*')->paginate(8);
	    return view('front_end.category',compact(['product','name_cate']));
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
        // dd($pro_img);
    	return view('front_end.detail',compact(['pro','slug','pro_related','pro_img','category','mobile']));
    }
    public function DetailShop($id,$slug){
        $datas = file_get_contents('http://localhost/DATN/public/api/detail/'.$id);
        $datas = json_decode($datas);
        $shop = $datas->datas;
        $cat_id = $shop->cat_id;
        $category = DB::table('categories')->where('id',$cat_id)->first();
        $mobile=DB::table('products')->where('cat_id',$cat_id)
            ->paginate(3);
        $pro_related=DB::table('products')->where('cat_id',$cat_id)->where('id','<>',$id)->take(5)->get();
        // dd($mobile);
        return view('front_end.detailshop',compact(['shop','category','slug','pro_related','shop_img','mobile']));
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
    public function addCart($id){
        $pro_buy=product::find($id);
        Cart::add(['id'=>$id,'name'=>$pro_buy->name,'qty'=>1,'price'=>$pro_buy->price,'options'=>['images'=>$pro_buy->images,'cate_name'=>$pro_buy->category->name]]);
     return redirect()->back();
    }

    public function delItem($id){
        Cart::remove($id);
        return redirect()->back();
    }

    public function listCart(){
        $content = Cart::content();
        $subtotal = Cart::subtotal();
        return view('front_end.cart',compact('content','subtotal'));
    }
    public function updateCart(Request $request,$id){
        Cart::update($id, $request->quantity);
        return redirect()->back();
    }
    public function likeThis($id){
        try{
            $like = new binhchon();
            $like->user_id = Auth::user()->id;
            $like->pro_id = $id;
            $like->save();
            return redirect()->back();
        } catch(Exception $e){
            return $e->getMessage();
        }
    }
}
