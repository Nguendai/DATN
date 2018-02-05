<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB,DateTime,File,Input;
use App\Models\Garage;
use App\Models\GaragaImage;
use App\Models\Service;
use App\Models\Manufacturer;
use App\Models\Brand;



class GarageController extends Controller
{
	public function getList(){
		$garage = Garage::paginate(10);
		return view('back-end.garage.list',compact('garage'));
	}


	public function getAdd(){
		$manufacturer = Manufacturer::all();
		$service = Service::all();
		return view('back-end.garage.add',compact('manufacturer','service'));
	}
	public function postAdd(Request $request){
		try {

			$garage_id= DB::table('garage')->insertGetId([
				'name' => $request->txtname,
				'province_id' => 1,
				'district_id' => 1,
				'precint_id' => 1,
				'address' => $request->address,
				'introduction' =>  $request->txtReview,
				'openning_time' => $request->openning_time,
				'closing_time' => $request->closing_time,
				'lat_loc' => $request->lat_loc,
				'lng_log' => $request->lng_log,
				'phone' =>  $request->phone,
				'email' => $request->email,
				'facebook' => $request->facebooks,
				'parent_id' =>1,
				'total_view' =>100,
				'payment_method' => $request->pay_method,
				'status' =>1,
				'create_datetime' => new datetime,
				'last_modify_date' =>new datetime,
			]);
			if ($request->hasFile('txtdetail_img')) {

				$df = $request->file('txtdetail_img');
				foreach ($df as $row) {
					if (isset($row)) {
						$filename = time().'_'.$row->getClientOriginalName();
						$type = $row->getClientOriginalExtension();
						$row->move('uploads/garages/',$filename);
						DB::table('garage_image')->insert([
							'garage_id' => $garage_id,
							'image_data' => $filename,
							'type' =>$type,
						]);
					}
				}
			}
			$service = $request->service;
			foreach ($service as $data) {
				DB::table('garage_service')->insert([
					'garage_id' => $garage_id,
					'service_id' => $data,
					'create_datetime' => new datetime,
				]);
			}
			$brand = $request->brand;
			foreach ($brand as $value) {
				DB::table('garage_brand')->insert([
					'manufacturer_id' => $value,
					'garage_id' => $garage_id,
					'status' => 1,
					'create_datetime' => new datetime,
				]);	
			}
			return 1;
		} catch (Exception $e) {
			return  $e->getMessage();
		}

	}
}
