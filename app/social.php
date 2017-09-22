<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class social extends Model
{
	protected $table='socials';
	protected $guarded=[];
	public function user(){
		return $this->belongsTo(User::class);
	}
}
