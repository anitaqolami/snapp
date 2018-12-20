<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class favorite extends Model
{
    protected $fillable = ['user_id','shop_id'];
}
