<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table ='shop';
	protected $guarded =[];

	public function category()
	{
		return $this->belongsTo('App\category','cat_id');
	}
    public function shop_img()
    {
        return $this->hasMany('App\ShopImages','shop_id','id');
    }
}
