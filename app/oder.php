<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class oder extends Model
{
    protected $table='oders';
    protected $guarded =[];
	
    public function oder_detail()
	{
		return $this->hasMany('App\oder_detail','o_id');
	}
}
