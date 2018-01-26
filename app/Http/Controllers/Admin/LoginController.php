<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Admin_users;

class LoginController extends Controller
{
    public function getLogin(){
    	return view('back-end.login');
    }
    public function postLogin(Request $request){
	    $arr = [
		    'email' => $request->email,
		    'password' => $request->password
	    ];
	    if (Auth::attempt($arr)){
	    	return redirect('admin/home');
	    }
	    else{
		    return redirect()->back()->with('error','Tài khoản hoặc mật khẩu chưa đúng');
	    }
    }
    public function getLogout(){
    	Auth::logout();
    	return redirect()->route('getlogin');
    }
}
