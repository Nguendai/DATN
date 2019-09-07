<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Shop;
use Auth;

class ApiHomeController extends Controller
{
    public function getApiHome($page){
        $start = 0;
        $limit = 4;
        if($page > 1){
            $start = $page*$limit-$limit;
        }
    	$shops=DB::table('shop')->skip($start)->take($limit)->get();

        if(!empty($shops[0])){
            $data = [];
            foreach ($shops as $key => $shop) {
                $data[$key] = [
                    'id' => $shop->id,
                    'image' =>$shop->image,
                    'name' => $shop->name,
                    'address' =>$shop->address,
                    'slug' =>$shop->slug,
                    'phone' => $shop->phone,
                    'email' =>$shop->email,
                    'website' => $shop->website,
                    'discription' => $shop->discription,
                    'cat_id' => $shop->cat_id,
                    'total_view' => $shop->total_view,
                ];
            }
            $datas = [
                'code' => 101,
                'message' =>'success',
                'datas' =>$data,
            ];
        }else{
             $datas = [
                'code' => 102,
                'message' =>'entry',
                'datas' =>[],
            ];
        }
        return response()->json($datas);
    }
    public function getApiDetail($id){
    	$shop= Shop::find($id);
    	DB::table('shop')->where('id',$id)->increment('total_view',1);
        $shop_imgs=DB::table('shop_imgs')->where('shop_id',$id)->select('shop_imgs.images')->paginate(3);
        $images = [];
        foreach ($shop_imgs as $key => $value) {
        	$images[$key] = $value->images;
        }
        $data = [
        	'id' => $shop->id,
            'image' =>$shop->image,
            'name' => $shop->name,
            'address' =>$shop->address,
            'slug' =>$shop->slug,
            'phone' => $shop->phone,
            'email' =>$shop->email,
            'website' => $shop->website,
            'discription' => $shop->discription,
            'cat_id' => $shop->cat_id,
            'total_view' => $shop->total_view,
            'images' => $images,
        ];
        $datas = [
                'code' => 101,
                'message' =>'success',
                'datas' =>$data,
            ];
        return response()->json($datas);
    }
    public function postRate(Request $request){
    	if (Auth::check()){
    		$check = DB::table('ranks')->insert([
    			'shop_id' => $request->shopid,
    			'user_id' => Auth::user()->id,
    			'point' => $request->rate,
     		]);
     		dd($check);
    	}

    }
}
