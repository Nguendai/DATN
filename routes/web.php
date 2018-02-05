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
Route::group(['prefix'=>'api'],function (){
	Route::get('/garage/{page}', ['as'  => 'index', 'uses' =>'Api\ApiHomeController@getApiHome']);
	Route::get('detail/{id}',['as'  => 'detail', 'uses' =>'Api\ApiHomeController@getApiDetail']);
	Route::post('rating',['as' => 'rating ', 'uses'=> 'Api\ApiHomeController@postRate']);
	Route::post('comment',['as' => 'comment ', 'uses'=> 'Api\ApiHomeController@postComment']);
	Route::get('listcomment/{gara_id}',['as' => 'comment ', 'uses'=> 'Api\ApiHomeController@getComment']);
});



Route::get('/', ['as'  => 'index2', 'uses' =>'PagesController@getHome']);
Route::get('/loaddata/view', ['as'  => 'index', 'uses' =>'PagesController@loadData']);

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
Route::get('chi-tiet-shop/{id}', ['as'  => 'getdetail', 'uses' =>'PagesController@DetailGarage']);
Route::get('chi-tiet-san-pham-sl/{id}', ['as'  => 'getdetail', 'uses' =>'PagesController@Detail_1']);
//shopping-cart

//customer
Route::group(['prefix'=>'khachhang'],function (){
	Route::get('resetPassword','MailController@showForm');
	Route::post('resetPassword','MailController@resetPassword');
	Route::post('send/{id}','Chat\MessagesController@postSend');

	Route::get('binhchon/{id}','PagesController@likeThis');

	Route::post('signup',['as'=>'postsignup','uses'=>'CustomerController@postSignUp']);
	Route::post('login',['as'=>'postlogin','uses'=>'CustomerController@postLogin']);
	Route::post('comment/{id}/{slug}','CustomerController@postComment');
	
	Route::get('logout',['as'=>'logout','uses'=>'CustomerController@Logout']);
});
//contact-us
Route::post('contact-us',['as'=>'contactus','uses'=>'MailController@Contact']);
//backend
Route::group(['prefix'=>'admin','middleware'=>'CheckAdmin'],function(){
	Route::get('home','ProductController@index');

	Route::group(['prefix'=>'manufacturer'],function(){
		Route::get('add',['as'=>'getaddcat','uses'=>'ManufacturerController@getAdd']);
		Route::post('add',['as'=>'postaddcat','uses'=>'ManufacturerController@postAdd']);
		
		Route::get('/',['as'=>'getlistcat','uses'=>'ManufacturerController@getList']);
		
		Route::get('del/{id}',['as'=>'getdelcat','uses'=>'ManufacturerController@getDel']);
		
		Route::get('edit/{id}',['as'=>'geteditcat','uses'=>'ManufacturerController@getEdit']);
		Route::post('edit/{id}',['as'=>'posteditcat','uses'=>'ManufacturerController@postEdit']);
	});
	
	Route::group(['prefix'=>'sanpham'],function(){
		Route::get('comment',['as'=>'getlistpcomment','uses'=>'ProductController@getListPComment']);
		Route::get('comments/{id}',['as'=>'getlistcomment','uses'=>'ProductController@getListComment']);
		Route::get('comments/del/{id}/{product_id}',['as'=>'getlistcomment','uses'=>'ProductController@getDelComment']);
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
	Route::group(['prefix'=>'garage'],function(){
		Route::get('/',['as'=>'getlistgarage','uses' => 'GarageController@getList']);
		Route::get('add',['as'=>'getaddgarage','uses' => 'GarageController@getAdd']);
		Route::post('add',['as'=>'postaddgarage','uses' => 'GarageController@postAdd']);
	});
});


Auth::routes();

Route::get('/home', 'HomeController@index');
