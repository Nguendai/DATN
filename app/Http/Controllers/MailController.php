<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart,Mail,DB;
use App\oder;
use App\oder_detail;
use App\category;
use App\product;
use DateTime;


class MailController extends Controller
{
    public function Success(Request $request){
    	$content=Cart::content();
    	    $oder=new oder();
    	    $oder->qty=Cart::count();
    	    $oder->total=Cart::total();
    	    $oder->status= 0;
    	    $oder->name= $request->txtname;
    	    $oder->email= $request->txtemail;
    	    $oder->phone= $request->txtphone;
    	    $oder->address= $request->txtaddress;
    	    $oder->date= new datetime;
    	    $oder->created_at=new DateTime();
    	    $oder->save();
    	    $o_id=$oder->id;
	
	    foreach ($content as $value) {
		    $o_detail = new oder_detail();
		    $o_detail->pro_id = $value->id;
		    $o_detail->od_qty = $value->qty;
		    $o_detail->od_status =0;
		    $o_detail->o_id = $o_id;
		    $o_detail->created_at = new datetime;
		    $o_detail->save();
	    }
		    $data['info'] = $request->all();
		    $data['cart'] = Cart::content();
		    $data['total']=Cart::total();
		    $email = $request->txtemail;
		    Mail::send('front-end.email',$data,function($m) use ($email) {
			    $m->from('dainv320@gmail.com', 'Hóa đơn bán hàng');
			    $m->to($email)->subject('Hóa đơn mua hàng từ TiiShop');
		    });
		    Cart::destroy();
		    return view('front_end.success');
    }
	public function getSearch(Request $request){
		$keyword=$request->txttk;
		if ($keyword==""){
			echo '<script type="text/javascript">
                  alert("Bạn cần nhập từ khóa !");
                window.location = "';
			echo route('index');
			echo '";
         </script>';
		}
		else{
			$str_keyword=str_replace(' ','%',$keyword);
			
			$products=DB::table('products')->where('name','like','%'.$str_keyword.'%')->join('product_details','product_details.pro_id','=','products.id')->select('products.*','product_details.*')->paginate(12);
			return view('front_end.search',compact(['products','keyword']));
		}
	}
	public function Contact(Request $request){
		$data['name']=$request->txtname;
		$data['email']=$request->txtemail;
		$data['text']=$request->txttext;
		$email=$request->txtemail;
		Mail::send('front-end.text',$data,function($m) use ($email) {
			$m->from('dainv320@gmail.com', 'Hỗ trợ khách hàng');
			$m->to('tienlq@newayict.com')->subject('Phản hồi khách hàng');
		});
		echo '<script type="text/javascript">
                  alert("Gửi tin thành công !");
                window.location = "';
		echo route('index');
		echo '";
         </script>';
	}
	public function getsearchPro(Request $request){

		$cat_name=category::find($request->sltcategory)->name;
		$pro_name=category::find($request->sltproduct)->name;
		$price=$request->sltprice;
		if ($price==1){
			$mobile=DB::table('products')->where('price','<','5000000')->where('cat_id',$request->sltproduct)->join('product_details','product_details.pro_id','=','products.id')->select('products.*','product_details.vga','product_details.screen','product_details.cpu','product_details.cam2')->paginate(12);
			return view('front-end.search-pro',compact(['cat_name','pro_name','mobile','price']));
		}
		if ($price==5){
			$mobile=DB::table('products')->where('price','>','20000000')->where('cat_id',$request->sltproduct)->join('product_details','product_details.pro_id','=','products.id')->select('products.*','product_details.vga','product_details.screen','product_details.cpu','product_details.cam2')->paginate(12);
			return view('front-end.search-pro',compact(['cat_name','pro_name','mobile','price']));
		}
		if ($price==2) {
			$price_first = 5000000;
			$price_last  = 10000000;
		}
		if ($price==3) {
			$price_first = 10000000;
			$price_last  = 15000000;
		}
		if ($price==4) {
			$price_first = 15000000;
			$price_last  = 20000000;
		}
			$mobile=DB::table('products')->where('price','>',$price_first)->where('price','<',$price_last)->where('cat_id',$request->sltproduct)->join('product_details','product_details.pro_id','=','products.id')->select('products.*','product_details.vga','product_details.screen','product_details.cpu','product_details.cam2')->paginate(12);
			return view('front-end.search-pro',compact(['cat_name','pro_name','mobile','price','price_first','price_last']));
		
	
	}
}
