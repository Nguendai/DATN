<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Manufacturer;
use  App\Http\Requests\AddManufacturerRequest;
use DateTime;
use DB;

class ManufacturerController extends Controller
{
    public function getList(){
    	$data=Manufacturer::orderBy('manufacture_id','desc')->paginate(10);
    	return view('back-end.manufacturer.list',compact('data'));
    }
    public function getAdd(){
	    return view('back-end.manufacturer.add');
    }
    public function postAdd(AddManufacturerRequest $request){
        $f = $request->file('txtimg')->getClientOriginalName();
        $filename = time().'_'.$f;
        $image_data = $filename;
        $request->file('txtimg')->move('uploads/manufacturers/',$filename);
	    $mcreate_datetime = new DateTime();
        DB::table('manufacturer')->insert([
            'name' => $request->txtCateName,
            'country_id' => $request->country_id,
            'image_data' => $image_data,
        ]);
	    return redirect()->route('getlistcat')->with('success','Thêm thành công');
    }
    public function getDel($id){
		DB::table('manufacturer')->where('manufacture_id',$id)->delete();
		return redirect()->route('getlistcat')->with('success','Xóa thành công');
    }
    public function getEdit($id){
    	$data = DB::table('manufacturer')->where('manufacture_id',$id)->first();
        // dd($data);
    	return view('back-end.manufacturer.edit',compact(['data']));
    }
    public function postEdit($id,Request $request){
        $check = Manufacturer::where('name',$request->txtCateName)->where('manufacture_id','<>',$id)->count();
        if($check == 0){
            $data = DB::table('manufacturer')->where('manufacture_id',$id)->first();
            $file_path = public_path('uploads/manufacturers/').$data->image_data;
            $filename = $data->image_data;
            if ($request->hasFile('txtimg')) {

                if (file_exists($file_path)&& $data->image_data != null)
                {
                    unlink($file_path);
                }
                $f = $request->file('txtimg')->getClientOriginalName();
                $filename = time().'_'.$f;
                $request->file('txtimg')->move('uploads/manufacturers/',$filename);
            }
            DB::table('manufacturer')->where('manufacture_id', $id)->update([
                'name' => $request->txtCateName,
                'country_id' => $request->country_id,
                'image_data' => $filename,
            ]);
            return redirect()->route('getlistcat')
                             ->with('success','Sửa thành công');
        }else{
            return redirect()->back()->with('error','Tên đã tồn tại');
        }
	    
	
    }
}
