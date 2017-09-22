<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use Request;
use DB;
use App\product;
use App\product_detail;
use App\category;
use App\product_img;
use Cart;

class PagesController extends Controller
{
    public function getHome(){
    	$mobile=DB::table('products')->where('cat_id',1)
            ->join('product_details','product_details.pro_id','=','products.id')->select('products.*','product_details.*')
            ->paginate(8);
	    $pc=DB::table('products')->where('cat_id',7)->join('product_details','product_details.pro_id','=','products.id')
            ->select('products.*','product_details.*')->paginate(8);
	    return view('front-end.home',compact(['mobile','pc']));
    }
    public function getProduct($id){
    	$cate=category::find($id);
    	$name_cate=$cate->name;
	    $mobile=DB::table('products')->where('cat_id',$id)->join('product_details','product_details.pro_id','=','products.id')->select('products.*','product_details.vga','product_details.screen','product_details.cpu','product_details.cam2')->paginate(8);
	    return view('front-end.product_cate',compact(['mobile','name_cate']));
    }
    public function Detail($id,$slug){
	    $pro=product::find($id);
        $pro_img=DB::table('product_imgs')->where('pro_id',$id)->select('product_imgs.images')->get();
        array_push($pro_img,$pro['images']);

	    dd($pro_img);
	    $cat_id=$pro->cat_id;
	    $pro_related=DB::table('products')->where('cat_id',$cat_id)->where('id','<>',$id)->take(5)->get();
    	return view('front-end.product_detail',compact(['pro','slug','pro_related','pro_img']));
    }
    public function Purchase($id){
     $pro_buy=product::find($id);
     Cart::add(['id'=>$id,'name'=>$pro_buy->name,'qty'=>1,'price'=>$pro_buy->price,'options'=>['images'=>$pro_buy->images,'cate_name'=>$pro_buy->category->name]]);
     return redirect()->route('giohang');
    }
    public function Cart(){
    	$content=Cart::content();
    	$total=Cart::total();
        return view('front-end.content.cart',compact(['content','total']));
    }
    public function delProductCart($rowid){
	    if($rowid== "all"){
		    Cart::destroy();
		    return redirect('/');
	    }
	    else{
		    Cart::remove($rowid);
		    return redirect()->back();
	    }
    }
    public function updateProductCart(){
    if (Request::ajax()){
    	$id=Request::get('id');
    	$qty=Request::get('qty');
    	Cart::update($id,$qty);
    	echo "ok";
    }
    }
    public function searchPro(){
    	if (Request::ajax()){
    		$id=Request::get('parent_id');
		    $pro_pro=DB::table('categories')->select('name','id')->where('parent_id',$id)->get()->toJson();
    		echo $pro_pro;
	    }
    }
    public function checkOut(){
	    $content=Cart::content();
	    $total=Cart::total();
    	return view('front_end.checkout',compact(['content','total']));
    }
}
