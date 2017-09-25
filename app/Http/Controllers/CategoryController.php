<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\category;
use  App\Http\Requests\AddCategoryRequest;
use DateTime;

class CategoryController extends Controller
{
    public function getList(){
    	$data=category::all();
    	return view('back-end.category.cat-list',compact('data'));
    }
    public function getAdd(){
        $i = 1;
	    $data=category::all();
	    return view('back-end.category.add',compact('data'));
    }
    public function  postAdd(AddCategoryRequest $request){
	    $cat=new category();
	    $cat->name=$request->txtCateName;
	    $cat->parent_id=$request->sltCate;
	    $cat->slug=str_slug($request->txtCateName,'-');
	    $cat->created_at=new DateTime();
	    $cat->save();
	    return redirect()->route('getlistcat')->with('success','Thêm thành công');
    }
    public  function  getDel($id){
    	$parent_id=category::where('parent_id',$id)->count();
    	if ($parent_id==0){
    		$category=category::find($id);
    		$category->delete();
    		return redirect()->route('getlistcat')->with('success','Xóa thành công');
	    }
	    else{
		    echo '<script type="text/javascript">
                  alert("Không thể xóa danh mục này !");
                window.location = "';
		    echo route('getlistcat');
		    echo '";
         </script>';
	    }
    }
    public function getEdit($id){
    	$cat=category::all();
    	$data=category::findOrFail($id)->toArray();
    	return view('back-end.category.edit',compact(['data','cat']));
    }
    public function postEdit($id,Request $request){
	    $cat = category::find($id);
	    $cat->name = $request->txtCateName;
	    $cat->slug = str_slug($request->txtCateName,'-');
	    $cat->parent_id = $request->sltCate;
	    $cat->updated_at = new DateTime;
	    $cat->save();
	    return redirect()->route('getlistcat')
	                     ->with('success','Sửa thành công');
	
    }
}
