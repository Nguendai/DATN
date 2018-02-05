<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Models\Garage;
use App\Models\Comment;


class ApiHomeController extends Controller
{
    public function getApiHome($page){
        $start = 0;
        $limit = 4;
        if($page > 1){
            $start = $page*$limit-$limit;
        }
    	$garages = DB::table('garage')->skip($start)->take($limit)->get();
        if(!empty($garages[0])){
            $data = [];
            foreach ($garages as $key => $shop) {
                $image_profile = DB::table('garage_image')->where('garage_id',$shop->garage_id)->select('garage_image.image_data')->first();
                $data[$key] = [
                    'id' => $shop->garage_id,
                    'image' =>$image_profile->image_data,
                    'name' => $shop->name,
                    'address' =>$shop->address,
                    'phone' => $shop->phone,
                    'email' =>$shop->email,
                    'facebook' => $shop->facebook,
                    'discription' => $shop->introduction,
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
    	$garage =DB::table('garage')->where('garage_id',$id)->first();
    	DB::table('garage')->where('garage_id',$id)->increment('total_view',1);
        $garage_image = DB::table('garage_image')->where('garage_id',$id)->select('garage_image.image_data')->paginate(3);
        $images = [];
        $service = [];
        $manufacturer = [];
        foreach ($garage_image as $key => $value) {
        	$images[$key] = $value->image_data;
        }
        $services = DB::table('garage_service')->join('service','service.service_id', '=','garage_service.service_id')->select('service.name')->where('garage_service.garage_id',$id)->get();
        foreach ($services as $key => $value) {
            $service[$key] = $value->name;
        }
        $manufacturer = DB::table('garage_brand')->join('manufacturer','manufacturer.manufacturer_id','=','garage_brand.manufacturer_id')->select('manufacturer.name')->where('garage_brand.garage_id', $id)->get();
         foreach ($manufacturer as $key => $value) {
            $manufacturer[$key] = $value->name;
        }
        $data = [
        	'id' => $garage->garage_id,
            'name' => $garage->name,
            'address' =>$garage->address,
            'phone' => $garage->phone,
            'email' =>$garage->email,
            'openning' =>$garage->openning_time,
            'closing' =>$garage->closing_time,
            'lat_loc' =>$garage->lat_loc,
            'lng_log' =>$garage->lng_log,
            'facebook' => $garage->facebook,
            'discription' => $garage->introduction,
            'total_view' => $garage->total_view,
            'manufacturer' =>$manufacturer,
            'images' =>$images,
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
    public function getComment($gara_id){
        $comment = comment::where('gara_id',$gara_id)->orderBy('id','desc')->paginate(10);
        $data = [];
        $numb_comment = DB::table('comments')->where('gara_id',$gara_id)->count();
        foreach ($comment as $key => $value) {
            $user = DB::table('users')->where('id',$value->user_id)->first();
            $data[$key] = [
                'comment' => $value->comment,
                'gara_id' => $gara_id,
                'author' => $user->name,
                'created_at' => $value->created_at,
            ];
        }
        $datas = [
            'code' => 100,
            'message' => 'success',
            'data' => [
                'numb_comment' => $numb_comment,
                'comment' => $data
            ],
            
        ];
        return response()->json($datas);

    }
    public function postComment(Request $request){
        $user_id = $request ->user_id;
        if($user_id){
            $date_now = date('Y-m-d H:i:s');
            $user = DB::table('users')->where('id',$user_id)->first();
            $check = DB::table('comments')->insert([
                    'gara_id' => $request->gara_id,
                    'user_id' => $user_id,
                    'comment' => $request->comment,
            ]);
           
            if($check){
                    $datas = [
                        'code' => 200,
                        'message' => 'Comment success',
                        'data' => [
                            'comment' => $request->comment,
                            'author' => $user->name,
                            'created_at' => $date_now,
                        ]
                    ];
            }else{
            $datas = [
                'code' => 404,
                'message' => 'Login false',
                 ];
            }
        }else{
            $datas = [
                'code' => 404,
                'message' => 'Login false',
            ];
        }
        return response()->json($datas);
    }
}
