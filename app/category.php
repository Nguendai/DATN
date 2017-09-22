<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table='categories';
    protected $guarded=[];
    public function product(){
    	return $this->hasMany('App\product','cat_id');
    }
}
