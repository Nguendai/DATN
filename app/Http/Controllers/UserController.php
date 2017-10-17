<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditUserRequest;
use Illuminate\Http\Request;
use App\Admin_users;
use Auth;
use App\Http\Requests\AddUserRequest;
use DateTime;

class UserController extends Controller
{
public function getList(){
	$data=Admin_users::paginate(10);
 	return view('back-end.user.list',compact('data'));
}
public function getAdd(){
	return view('back-end.user.add');
}
	public function postAdd(AddUserRequest $request){
//		$kt_name=$kt=User::where('name',$request->txtName)->where('id','<>',$id)->count();
//		$kt_email=$kt=User::where('name',$request->txtEmail)->where('id','<>',$id)->count();
		$user=new Admin_users();
		$user->name=$request->txtName;
		$user->email=$request->txtEmail;
		$user->password= bcrypt($request->txtPassword);
		$user->level=$request->sltLevel;
		$user->created_at=new DateTime();
		$user->remember_token=$request->_token;
		$user->save();
		return redirect()->route('getlistuser')->with(['success',' Thêm thành công!']);
	}
public function getEdit($id){
	$current_id = Auth::guard('admin_user')->user()->id;
	$user = Admin_users::find($id);
	if ($current_id != 1 && (($user->id == 1) || ($user->level == 1 && $user->id != $current_id))) {
		return redirect()->back()->with('error','Bạn không thể sửa thành viên này');
	}
	else{
		return view('back-end.user.edit',compact(['user','id']));
	}
}
public function postEdit($id,EditUserRequest $request){
	$kt_name=$kt=Admin_users::where('name',$request->txtName)->where('id','<>',$id)->count();
	if ($kt_name==1){
		return redirect()->back()->with('error','Tên nhân viên đã tồn tại');
	}
	else{
		$user=Admin_users::find($id);
		$user->name=$request->txtName;
		if ($request->sltLevel==''){
			$user->level=1;
		}
		else{
			$user->level=$request->sltLevel;
		}
		if ($request->txtPassword ==''){
			$user->password=Admin_users::find($id)->password;
		}
		else{
			$user->password= bcrypt($request->txtPassword);
		}
		$user->remember_token=$request->_token;
		$user->updated_at=new DateTime();
		$user->save();
		return redirect()->route('getlistuser')->with(['success','Sửa thành công!']);
	}
}
public function getDel($id){
	$current_id = Auth::user()->id;
	$user = Admin_users::find($id);
	if ($current_id != 1 && (($id == 1) || ($user->id != 1 && $user->level == 1) || ($user->level == 1 && $user->id == $current_id))) {
		return redirect()->back()->with('error','Bạn không thể xóa thành viên này');
	}
	else{
		$user->delete();
		return redirect()->route('getlistuser')->with('success','Xóa thành công!');
	}
}
}
