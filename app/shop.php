<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    protected $fillable = ['city','street_primary','street_secondary','C_address','service_id', 'content','sex','bill','Checkout_date','rate','active','visible'];

}
