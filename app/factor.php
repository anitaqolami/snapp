<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class factor extends Model
{
    protected $fillable = ['shop_id','user_id','service_id','code_discount','price','service_discount','date','accept','status'];
}
