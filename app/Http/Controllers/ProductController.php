<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCategoryRequest;
use Illuminate\Http\Request;
use App\product;
use App\category;
use App\product_detail;
use App\product_img;
use App\Http\Requests\AddProductRequest;
use DateTime,File,Input,DB,Auth;

class ProductController extends Controller
{
    public function getAdd(){
	    $data=category::all();
	    return view('back-end.products.add',compact('data'));
    }
    public function postAdd(AddProductRequest $request){
	    $pro = new product();
	
	    $pro->name = $request->txtname;
	    $pro->slug = str_slug($request->txtname,'-');
	    $pro->intro = $request->txtintro;
	    $pro->promo1 = $request->txtpromo1;
	    $pro->promo2 = $request->txtpromo2;
	    $pro->promo3 = $request->txtpromo3;
	    $pro->r_intro = $request->txtre_Intro;
	    $pro->review = $request->txtReview;
	    $pro->qty = $request->txtqty;
	    $pro->price = $request->txtprice;
	    $pro->cat_id = $request->sltCate;
	    $pro->user_id = Auth::guard('admin_user')->user()->id;
	    $pro->created_at = new datetime;
	    $f = $request->file('txtimg')->getClientOriginalName();
	    $filename = time().'_'.$f;
	    $pro->images = $filename;
	    $request->file('txtimg')->move('uploads/products/',$filename);
	    $pro->save();
	    $pro_id =$pro->id;
	
	    $detail = new product_detail();
	
	    $detail->cpu = $request->txtCpu;
	    $detail->ram = $request->txtRam;
	    $detail->screen = $request->txtScreen;
	    $detail->vga = $request->txtVga;
	    $detail->storage = $request->txtStorage;
	    $detail->exten_memmory =$request->txtExtend;
	    $detail->cam1 = $request->txtCam1;
	    $detail->cam2 = $request->txtCam2;
	    $detail->connect = $request->txtConnect;
	  
	    $detail->os = $request->txtOs;
	    $detail->note = $request->txtNote;
	    $detail->pro_id = $pro_id;
	
	    if ($request->txtCam1=='') {
		    $detail->cam1='không có';
	    }
	    if ($request->txtCam2=='') {
		    $detail->cam2='không có';
	    }
	    if ($request->exten_memmory =='') {
		    $detail->exten_memmory= 'không có';
	    }
	    if ($request->txtPin =='') {
		    $detail->pin= 'Không có';
	    }
	    else{
		    $detail->pin = $request->txtPin;
	    }
	    if ($request->txtSim =='') {
		    $detail->sim= 'Không có';
	    }
	    else{
		    $detail->sim = $request->txtSim;
	    }
	    if ($request->note =='') {
		    $detail->note= 'Không có';
	    }
	
	    $detail->created_at = new datetime;
	    $detail->save();
	
	    if ($request->hasFile('txtdetail_img')) {
		    $df = $request->file('txtdetail_img');
		    foreach ($df as $row) {
			    $img_detail = new product_img();
			    if (isset($row)) {
				    $name_img= time().'_'.$row->getClientOriginalName();
				    $img_detail->images = $name_img;
				    $img_detail->pro_id = $pro_id;
				    $img_detail->created_at = new datetime;
				    $row->move('uploads/products/details/',$name_img);
				    $img_detail->save();
			    }
		    }
	    }
	    return redirect('admin/sanpham')->with('success','Đã thêm thành công !');
    }
    public function getList(){
		    $data = product::all();
		    foreach ($data as $key => $value) {
		    	$a = $value->product_img->id;
		    	dd($a);
		    }
		    return view('back-end.products.list',compact('data'));
    }
    public function getDel($id){
	    $detail = product_img::where('pro_id',$id)->get();
	    foreach ($detail as $row) {
		    $dt = product_img::find($row->id);
		    $pt = public_path('uploads/products/details/').$dt->images;
		    // dd($pt);
		    if (file_exists($pt))
		    {
			    unlink($pt);
		    }
		    $dt->delete();
	    }
	    $pro = product::find($id);
	    $pro->delete();
	    return redirect('admin/sanpham')
		    ->with('success','Đã xóa thành công !');
    }
    public function getEdit($id){
    	$cat=category::all();
    	$pro=product::find($id)->toArray();
    	$pro_detail=product::find($id)->product_detail;
    	$pro_img=product::find($id)->product_img;
    	return view('back-end.products.edit-pc',compact(['cat','pro','pro_detail','pro_img']));
	
    }
    public function postEdit($id,Request $request){
    	$kt=product::where('name',$request->txtname)->where('id','<>',$id)->count();
    	if ($kt==0){
		    $pro = product::find($id);
		
		    $pro->name = $request->txtname;
		    $pro->slug = str_slug($request->txtname,'-');
		    $pro->intro = $request->txtintro;
		    $pro->promo1 = $request->txtpromo1;
		    $pro->promo2 = $request->txtpromo2;
		    $pro->promo3 = $request->txtpromo3;
		    $pro->r_intro = $request->txtre_Intro;
		    $pro->review = $request->txtReview;
		    $pro->qty = $request->txtqty;
		    $pro->price = $request->txtprice;
		    $pro->cat_id = $request->sltCate;
		    $pro->updated_at = new datetime;
		    $pro->qty = $request->txtqty;
		    $file_path = public_path('uploads/products/').$pro->images;
		    if ($request->hasFile('txtimg')) {
			    if (file_exists($file_path))
			    {
				    unlink($file_path);
			    }
			
			    $f = $request->file('txtimg')->getClientOriginalName();
			    $filename = time().'_'.$f;
			    $pro->images = $filename;
			    $request->file('txtimg')->move('uploads/products/',$filename);
		    }
		    $pro->save();
		
		    $pro->product_detail->cpu = $request->txtCpu;
		    $pro->product_detail->ram = $request->txtRam;
		    $pro->product_detail->screen = $request->txtScreen;
		    $pro->product_detail->vga = $request->txtVga;
		    $pro->product_detail->storage = $request->txtStorage;
		    $pro->product_detail->exten_memmory =$request->txtExtend;
		    $pro->product_detail->connect = $request->txtConnect;
		    $pro->product_detail->cam1 = $request->txtCam1;
		    $pro->product_detail->cam2 = $request->txtCam2;
		
		    if ($request->txtSim =='') {
			    $pro->product_detail->sim= 'Không có';
		    } else {
			    $pro->product_detail->sim = $request->txtSim;
		    }
		
		    if ($request->txtPin =='') {
			    $pro->product_detail->pin= 'Không có';
		    } else {
			    $pro->product_detail->pin = $request->txtPin;
		    }
		    $pro->product_detail->os = $request->txtOs;
		    $pro->product_detail->updated_at = new datetime;
		
		    if ($request->hasFile('txtdetail_img')) {
			    $detail = product_img::where('pro_id',$id)->get();
			    $df = $request->file('txtdetail_img');
			    foreach ($detail as $row) {
				    $dt = product_img::find($row->id);
				    $pt = public_path('uploads/products/details/').$dt->images;
				    // dd($pt);
				    if (file_exists($pt))
				    {
					    unlink($pt);
				    }
				    $dt->delete();
			    }
			    foreach ($df as $row) {
				    $img_detail = new product_img;
				    if (isset($row)) {
					    $name_img= time().'_'.$row->getClientOriginalName();
					    $img_detail->images = $name_img;
					    $img_detail->pro_id = $id;
					    $img_detail->created_at = new datetime;
					    $row->move('uploads/products/details/',$name_img);
					    $img_detail->save();
				    }
			    }
		    }
		    $pro->product_detail->save();
		    return redirect('admin/sanpham')
			    ->with('success','Sửa thành công!');
	    }
	    else{
    		return redirect()->back()->with('error','Tên sản phẩm đã tồn tại');
	    }
	
    }
    public function getSearch(Request $request){
	    $keyword = $request->txttk;
	    $str_keyword = str_replace(" ","%",$keyword);
    	$data=product::where('name','like','%'.$str_keyword.'%')->paginate(10);
	    return view('back-end.products.search',compact(['data','keyword']));
    }
}
