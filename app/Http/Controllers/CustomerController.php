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
use Validator;
use Session;

class CustomerController extends Controller
{
	
	public function postSignUp(CustomerRequest $request){
		try{
			$this->validate($request,[
				'email' => 'required|email|unique:users',
				'name' => 'required|max:15',
			]);
			$cus=new User();
			$cus->name=$request->name;
			$cus->address='';
			$cus->email=$request->email;
			$cus->phone=$request->phone;
			$cus->images='';
			$cus->password=bcrypt($request->password);
			$cus->created_at=new DateTime();
			$cus->remember_token=$request->_token;
			$cus->save();
			$data =[
				'code' => 100,
				'message' => 'Sucess',
			];
		}catch (Exception $e){
			$data = [
				'code' => 404,
				'message' => $e->getMessage(),
			];
		}
		return response()->json($data);
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
		Session::flush();
		Auth::logout();

		return redirect('/');
	}
	public function postComment($id,$slug,Request $request) {
		if (Auth::check()){
			$cm = new comment();
			$cm->name = Auth::user()->name;
			$cm->email = Auth::user()->email;
			$cm->comment = $request->comment;
			$cm->pro_id = $id;
			$cm->user_id = Auth::user()->id;
			$cm->save();
			$comment = DB::table('comments')->where('id',$cm->id)->first();
			$data = '<ul class="clearfix">
	         <li class="m-font fz-18 mb-5">
	          '.$comment->name.
	         '</li>
	         <li>'.$comment->comment.'</li>
	         <li class="color-gray_8 pull-right">'.$comment->created_at.'</li>
	       </ul>';
			return $data;
		}
		else{
			$pro=product::find($id)->category;
			echo '<script type="text/javascript">
			alert("Bạn cần đăng nhập để bình luận!");
			window.location.href = "';
			echo ('/chi-tiet-san-pham/'.$id.'/'.$slug);
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
				$m->from('dainv95@gmail.com','Hỗ trợ TiiShop');
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