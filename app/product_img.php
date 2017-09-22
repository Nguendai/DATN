<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_img extends Model
{
    protected $table='product_imgs';
    protected $guarded=[];
    public function product(){
    	return $this->belongsTo('App/product','pro_id');
    }
}
