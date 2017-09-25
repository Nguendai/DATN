<?php

namespace App\Http\Controllers;

use App\product;
use App\category;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\CustomerRequest;
use DateTime;
use DB;
use Auth;
use App\comment;
use Mail;

class CustomerController extends Controller
{
	public function getSignUp(){
		return view('front-end.signup');
	}
	public function postSignUp(CustomerRequest $request){
		$cus=new User();
		$cus->name=$request->txtname;
		$cus->address=$request->txtaddress;
		$cus->email=$request->txtemail;
		$cus->phone=$request->txttel;
		$cus->images='';
		$cus->password=bcrypt($request->txtpassword);
		$cus->created_at=new DateTime();
		$cus->remember_token=$request->_token;
		$cus->save();
		return redirect()->back()->with('success','Đăng ký tài khoản thành công!');
	}
	public function postLogin(Request $request) {
		if (Auth::attempt(['email' => $request->username, 'password' => $request->password])){
			return response()->json([
			    'code' => 100,
                'message' => 'Sucesss',
                'data' => Auth::user()->name,
            ]);
		}
		else{
			return response()->json([
			    'code' => 101,
                'message'  => 'Error',

            ]);
		}
	}
	public function Logout(){
		Auth::logout();
		return redirect('/');
	}
	public function postComment($id,$slug,Request $request) {
		if (Auth::check()){
			$cm=new comment();
			$cm->name=Auth::user()->name;
			$cm->email=Auth::user()->email;
			$cm->comment=$request->txtcomment;
			$cm->pro_id=$id;
			$cm->c_id=Auth::user()->id;
			$cm->save();
			return redirect()->back();
		}
		else{
			$pro=product::find($id)->category;
           echo '<script type="text/javascript">
			alert("Bạn cần đăng nhập để bình luận!");
			window.location.href = "';
		    echo ('/tii_shop/chi-tiet-san-pham/'.$id.'/'.$slug);
		    echo '";
			</script>';
		}
	}
	public function getForgot(){
		return view('front-end.forgot');
	}
	public function postForgot(Request $request){
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
			Mail::send('front-end.reset',$data,function($m){
				$m->from('tientungs295@gmail.com','Hỗ trợ TiiShop');
				$m->to($GLOBALS['email'])->subject('Mật khẩu khôi phục');
			});
			return redirect()->back()->with('success','Mật khẩu đã được khôi phục bạn vui lòng đăng nhập vào email để kiểm tra!');
		}
	}
	public function getList(){
		$data=User::paginate(3);
		return view('back-end.customers.list',compact('data'));
	}
	public function getDel($id){
		User::destroy($id);
		return redirect()->back()->with('success','Xóa thành công');
	}
}