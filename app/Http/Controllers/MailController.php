<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart,Mail,DB;
use App\oder;
use App\oder_detail;
use App\category;
use App\product;
use DateTime;
use Auth;


class MailController extends Controller
{
	public function Success(Request $request){
		$content=Cart::content();
		$oder=new oder();
		$oder->qty=Cart::count();
		$oder->total=Cart::subtotal();
		$oder->status= 0;
		$oder->name= $request->name;
		$oder->email= $request->email;
		$oder->phone= $request->phone;
		$oder->address= $request->address;
		$oder->user_id = Auth::user()->id;
		$oder->save();
		$o_id=$oder->id;
		
		foreach ($content as $value) {
			$sl = DB::table('products')->where('id',$value->id)->select('qty')->first();
			$o_detail = new oder_detail();
			$o_detail->pro_id = $value->id;
			$o_detail->od_qty = $value->qty;
			$o_detail->od_status =0;
			$o_detail->o_id = $o_id;
			$o_detail->created_at = new datetime;
			$o_detail->save();
			DB::table('products')->where('id',$value->id)->update([
				'qty' => ($sl->qty - $value->qty)
			]);
		}
		$data['info'] = $request->all();
		
		$data['cart'] = Cart::content();
		$data['total']=Cart::subtotal();
		$email = $request->email;
		Mail::send('front_end.email',$data,function($m) use ($email) {
			$m->from('dainv320@gmail.com', 'Hóa đơn bán hàng');
			$m->to($email)->subject('Hóa đơn mua hàng từ shop');
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
			
			$products=DB::table('products')->where([['name','like','%'.$str_keyword.'%'],['qty','>',0]])->join('product_details','product_details.pro_id','=','products.id')->select('products.*','product_details.*')->paginate(12);
			return view('front_end.search',compact(['products','keyword']));
		}
	}
	public function Contact(Request $request){
		$data['name']=$request->txtname;
		$data['email']=$request->txtemail;
		$data['text']=$request->txttext;
		$email=$request->txtemail;
		Mail::send('front_end.layouts.text',$data,function($m) use ($email) {
			$m->from('dainv320@gmail.com', 'Hỗ trợ khách hàng');
			$m->to('dainv320@gmail.com')->subject('Phản hồi khách hàng');
		});
		echo '<script type="text/javascript">
		alert("Gửi tin thành công !");
		window.location = "';
		echo route('index');
		echo '";
		</script>';
	}
	public function showForm(){
		return view('front_end.login.resetPassword');
	}
	public function resetPassword(Request $request){
		$GLOBALS['email'] = $request->email;
		$count = DB::table('users')->where('email',$GLOBALS['email'])->count();
		if ($count < 1) {
			;
			return redirect()->back()->with('error','Emai này không tồn tại!');
		}
		else if($count >= 1){
			$password = str_random(8);
			DB::table('users')->where('email',$GLOBALS['email'])->update(['password'=>bcrypt($password)]);
			$data = [
				'email'=>$GLOBALS['email'],
				'password'=>$password,
			];
			Mail::send('front_end.reset',$data,function($m){
				$m->from('dainv95@gmail.com','Hỗ trợ phuc hoi mat khau');
				$m->to($GLOBALS['email'])->subject('Mật khẩu khôi phục');
			});
			return redirect()->back()->with('success','Mật khẩu đã được khôi phục bạn vui lòng đăng nhập vào email để kiểm tra!');
		}
	}
}
