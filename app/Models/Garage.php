<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{
    protected $table ='garage';
	protected $guarded =[];

	public function brand()
	{
		return $this->belongsTo('App\Models\Brand','brand_id');
	}
    public function garage_image()
    {
        return $this->hasMany('App\Models\GarageImage','garage_id','garage_image_id');
    }
}
