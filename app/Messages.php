<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $table = "messages";

    protected $fillable = ['author','content','group_id'];
}
