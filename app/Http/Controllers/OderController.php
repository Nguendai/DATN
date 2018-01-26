<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\oder;
use App\oder_detail;
use App\product;
use DB;

class OderController extends Controller
{
	public function getList(){
		$data=oder::where('status',1)->paginate(10);
		return view('back-end.oders.list',compact('data'));
	}
	public function getListDate(Request $request){
		$date1=$request->date1;
		$date2=$request->date2;
		$data=oder::where('status',1)-> whereBetween('created_at',[$request->date1,$request->date2])->paginate(10);
		return view('back-end.oders.list_search',compact(['data','date1','date2']));
	}
	//don hang moi
	public function getListNew(){
		$data=oder::where('status',0)->paginate(10);
		return view('back-end.oders.list_new',compact('data'));
	}
	public function getDetail($id){
		$oder=oder::find($id);
		$data = DB::table('oder_details')
		          ->join('products', 'products.id', '=','oder_details.pro_id')
		          ->where('o_id',$id)
		          ->get();
		return view('back-end.oders.detail',compact(['oder','data']));
	}
	public function postDetail($id){
		$oder = oder::find($id);
		
		$oder->status = 1;
		$oder->save();
		return redirect('admin/donhang')->with('success',' Đã xác nhận đơn hàng thành công !');
	}
	public function getDel($id){
		oder::destroy($id);
		return redirect()->back()->with(['success','Xóa thành công!']);
	}
	public function getDelDetail($id){
		$oder=oder_detail::where('od_id',$id);
		$oder->delete();
		return redirect()->back()->with(['success','Xóa thành công!']);
	}
	public function checkDetail($id,$od_qty,$od_id){
	$pro=product::find($id);
	$pro->qty=$pro->qty-$od_qty;
	$pro->save();
	
	DB::table('oder_details')->where('od_id',$od_id)->update(['od_status'=>1]);
	
	return redirect()->back()->with('success','Xác thực thành công!');
	}
}
