<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class oder_detail extends Model
{
    protected $table ='oder_details';
	protected $guarded =[];

	 public function oder()
    {
        return $this->belongsTo('App\oder','o_id');
    }

    public function product()
    {
        return $this->hasOne('App\product','pro_id');
    }
}
