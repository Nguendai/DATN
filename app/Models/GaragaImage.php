<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GaragaImage extends Model
{
    protected $table ='garage_image';
	protected $guarded =[];

	public function garaga()
	{
		return $this->belongsTo('App\Shop','garaga_id');
	}
    
}
