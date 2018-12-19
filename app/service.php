<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $fillable = ['shop_id','service_name','service_description','images','service_price','service_discount'];
}
