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

			$cus = new User();
			$cus->name = $request->name;
			$cus->address = '';
			$cus->email = $request->email;
			$cus->phone = $request->phone;
			$cus->images = '';
			$cus->password = bcrypt($request->password);
			$cus->created_at = new DateTime();
			$cus->remember_token=$request->_token;
			$cus->save();
			if (Auth::attempt(['email' => $cus->email, 'password' => $request->password])){
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
		$group = DB::table('group_messages')->where('user_id',Auth::user()->id)->first();
		if($group){
			DB::table('messages')->where('group_id',$group->id)->delete();
			DB::table('group_messages')->where('user_id',Auth::user()->id)->delete();
		}
		
		Session::flush();
		Auth::logout();

		return redirect('/');
	}
	
	
	
	public function getList(){
		$data=User::paginate(10);
		return view('back-end.customers.list',compact('data'));
	}
	public function getDel($id){
		User::destroy($id);
		return redirect()->back()->with('success','Xóa thành công');
	}
}