<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $table = "manufacturer";
    protected $guarded =[];

    public function brand(){
    	return $this->hasMany('App\Brand','manufacturer_id','brand_id');
    }
}
