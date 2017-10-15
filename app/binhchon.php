<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class binhchon extends Model
{
    protected $table = "binhchon";
    public function customer(){
    	return $this->hasMany('App\User','user_id');
    }
    public function product(){
    	return $this->hasMany('App\product','pro_id');
    }
}
