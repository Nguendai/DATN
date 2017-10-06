<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table ='products';
	protected $guarded =[];

	public function category()
	{
		return $this->belongsTo('App\category','cat_id');

	}
	public function product_detail()
    {
        return $this->hasOne('App\product_detail','pro_id');
    }
    public function product_img()
    {
        return $this->hasMany('App\product_img','pro_id','id');
    }
    public function oder_detail()
    {
        return $this->hasOne('App\oder_detail','pro_id');
    }
}
