<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopImages extends Model
{
    protected $table ='shop_imgs';
	protected $guarded =[];

	public function shop()
	{
		return $this->belongsTo('App\Shop','shop_id');
	}
    
}
