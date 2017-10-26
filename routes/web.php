<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/test', function(){
   return abort(404);
});

Route::get('/', ['as'  => 'index', 'uses' =>'PagesController@getHome']);

Route::get('search', ['as'  => 'getsearch', 'uses' =>'MailController@getSearch']);


Route::Auth();
//face book login
Route::get('auth/facebook', 'SocialAuthController@redirect');
Route::get('callback', 'SocialAuthController@callback');

Route::get('auth/google', 'SocialAuthController@redirectToProviderGoogle');
Route::get('google/callback', 'SocialAuthController@handleProviderCallbackGoogle');
//login route
Route::get('admin/login', ['as'  => 'getlogin', 'uses' =>'AdminAuth\LoginController@showLoginForm']);
Route::post('admin/login', ['as'  => 'postlogin', 'uses' =>'AdminAuth\LoginController@postLogin']);

Route::get('admin/register', ['as'  => 'getregister', 'uses' =>'Admin\AuthController@getRegister']);
Route::post('admin/register', ['as'  => 'postregister', 'uses' =>'Admin\AuthController@postRegister']);

Route::get('admin/password/reset', ['as'  => 'getreser', 'uses' =>'Admin\LoginController@email']);

Route::get('admin/logout', ['as'  => 'getlogout', 'uses' =>'AdminAuth\LoginController@logout']);

//product_detail
Route::get('loai-san-pham/{id}/{slug}','PagesController@getProduct');
Route::get('chi-tiet-san-pham/{id}/{slug}', ['as'  => 'getdetail', 'uses' =>'PagesController@Detail']);
Route::get('chi-tiet-san-pham-sl/{id}', ['as'  => 'getdetail', 'uses' =>'PagesController@Detail_1']);
//shopping-cart

Route::get('checkout',['as'=>'checkout','uses'=>'PagesController@checkOut']);
Route::get('contact',function(){
	return view('front_end.contact.contact');
});

Route::get('search-pro/{parent_id}',['as'=>'searchpro','uses'=>'PagesController@searchPro']);
//customer
Route::group(['prefix'=>'khachhang'],function (){
	Route::get('resetPassword','MailController@showForm');
	Route::post('resetPassword','MailController@resetPassword');
	Route::post('send/{id}','Chat\MessagesController@postSend');

	Route::get('binhchon/{id}','PagesController@likeThis');

	Route::get('getcart/{id}','PagesController@addCart');
	Route::post('signup',['as'=>'postsignup','uses'=>'CustomerController@postSignUp']);
	Route::post('login',['as'=>'postlogin','uses'=>'CustomerController@postLogin']);
	Route::post('comment/{id}/{slug}','CustomerController@postComment');
	
	Route::get('logout',['as'=>'logout','uses'=>'CustomerController@Logout']);
	Route::get('cart',['as'=>'giohang','uses'=>'PagesController@listCart']);
	Route::get('delete-item/{id}',['as'=>'xoasanpham','uses'=>'PagesController@delItem']);
	Route::post('update_cart/{id}',['as'=>'update','uses'=>'PagesController@updateCart']);
	Route::post('send','MailController@Success');

	Route::get('cap-nhat/{id}/{qty}',['as'=>'capnhatsanpham','uses'=>'PagesController@updateProductCart']);
});
//contact-us
Route::post('contact-us',['as'=>'contactus','uses'=>'MailController@Contact']);
//backend
Route::group(['prefix'=>'admin','middleware'=>'CheckAdmin'],function(){
	Route::get('home','ProductController@index');
	Route::get('send/{id}','Chat\MessagesController@admin');
	Route::post('send/{id}','Chat\MessagesController@adminPostSend');
	Route::get('chart','Charts\Charts@index');
	Route::group(['prefix'=>'danhmuc'],function(){
		Route::get('add',['as'=>'getaddcat','uses'=>'CategoryController@getAdd']);
		Route::post('add',['as'=>'postaddcat','uses'=>'CategoryController@postAdd']);
		
		Route::get('/',['as'=>'getlistcat','uses'=>'CategoryController@getList']);
		
		Route::get('del/{id}',['as'=>'getdelcat','uses'=>'CategoryController@getDel']);
		
		Route::get('edit/{id}',['as'=>'geteditcat','uses'=>'CategoryController@getEdit']);
		Route::post('edit/{id}',['as'=>'posteditcat','uses'=>'CategoryController@postEdit']);
	});
	
	Route::group(['prefix'=>'sanpham'],function(){
		Route::get('add',['as'=>'getaddpro','uses'=>'ProductController@getAdd']);
		Route::post('add',['as'=>'postaddpro','uses'=>'ProductController@postAdd']);
		
		Route::get('/',['as'=>'getlistpro','uses'=>'ProductController@getList']);
		
		Route::get('del/{id}',['as'=>'getdelpro','uses'=>'ProductController@getDel']);
		
		Route::get('edit/{id}',['as'=>'geteditpro','uses'=>'ProductController@getEdit']);
		Route::post('edit/{id}',['as'=>'geteditpro','uses'=>'ProductController@postEdit']);
		
		Route::get('search',['as'=>'postsearchpro','uses'=>'ProductController@getSearch']);
		
	});
	
	Route::group(['prefix'=>'nhanvien'],function(){
		Route::get('add',['as'=>'getadduser','uses'=>'UserController@getAdd']);
		Route::post('add',['as'=>'postadduser','uses'=>'UserController@postAdd']);
		
		Route::get('/',['as'=>'getlistuser','uses'=>'UserController@getList']);
		
		Route::get('del/{id}',['as'=>'getdeluser','uses'=>'UserController@getDel']);
		
		Route::get('edit/{id}',['as'=>'getedituser','uses'=>'UserController@getEdit']);
		Route::post('edit/{id}',['as'=>'postedituser','uses'=>'UserController@postEdit']);
	});
	Route::group(['prefix'=>'khachhang','middleware' =>'CheckLevel'],function(){
		
		Route::get('/',['as'=>'getlistcus','uses'=>'CustomerController@getList']);
		
		Route::get('del/{id}',['as'=>'getdelcus','uses'=>'CustomerController@getDel']);
		
	});
	
	Route::group(['prefix' => 'donhang'], function() {
		
		Route::get('/',['as'=>'getoder','uses' => 'OderController@getList']);
		Route::get('date',['as'=>'getlistdate','uses' => 'OderController@getListDate']);
		Route::get('new',['as'=>'getodernew','uses' => 'OderController@getListNew']);
		
		Route::get('del/{id}',['as'=>'getdeloder','uses' => 'OderController@getDel']);
		Route::get('del-detail/{id}',['as'=>'getdeloderdetail','uses' => 'OderController@getDelDetail']);
		
		Route::get('detail/{id}',['as'=>'getdetail','uses' => 'OderController@getDetail']);
		Route::post('detail/{id}',['as'=>'postdetail','uses' => 'OderController@postDetail']);
		
		Route::get('check-detail/{id}/{od_qty}/{od_id}',['as'=>'check-detail','uses' => 'OderController@checkDetail']);
	});
});


Auth::routes();

Route::get('/home', 'HomeController@index');
