<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';

    public function Manufactuner(){

    	return $this->belongsTo('App\Models\Manufactuner','manufactuner_id');

    }

}
