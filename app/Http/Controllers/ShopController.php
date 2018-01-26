<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCategoryRequest;
use Illuminate\Http\Request;
use App\Shop;
use App\category;
use App\product_detail;
use App\ShopImages;
use App\Http\Requests\AddProductRequest;
use DateTime,File,Input,DB,Auth;

class ShopController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin_user');
    }
   
    public function getAdd(){
	    $data=category::all();
	    return view('back-end.shops.add',compact('data'));
    }
     public function postAdd(AddProductRequest $request){
	    $shop = new Shop();
	
	    $shop->name = $request->txtname;
	    $shop->slug = str_slug($request->txtname,'-');
	    $shop->email = $request->email;
	    $shop->address = $request->address;
	    $shop->website = $request->website;
	    $shop->phone = $request->phone;
	    $shop->discription = $request->discription;
	    $shop->cat_id = $request->sltCate;	
	    $shop->created_at = new datetime;
	    $f = $request->file('txtimg')->getClientOriginalName();
	    $filename = time().'_'.$f;
	    $shop->image = $filename;
	    $request->file('txtimg')->move('uploads/shops/',$filename);
	    $shop->save();
	    $shop_id =$shop->id;
	    if ($request->hasFile('txtdetail_img')) {
		    $df = $request->file('txtdetail_img');
		    foreach ($df as $row) {
			    $img_detail = new ShopImages();
			    if (isset($row)) {
				    $name_img= time().'_'.$row->getClientOriginalName();
				    $img_detail->images = $name_img;
				    $img_detail->shop_id = $shop_id;
				    $img_detail->created_at = new datetime;
				    $row->move('uploads/shops/details/',$name_img);
				    $img_detail->save();
			    }
		    }
	    }
	    return 1;
    }
     public function getList(){
		    $data = Shop::paginate(10);
		    // dd($data);
		    return view('back-end.shops.list',compact('data'));
    }
     public function getEdit($id){
    	$cat=category::all();
    	$pro=Shop::find($id)->toArray();
    	$pro_img=Shop::find($id)->shop_img;
    	return view('back-end.shop.edit',compact(['cat','pro','pro_img']));
	
    }
}
