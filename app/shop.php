<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    protected $fillable = ['user_id', 'city', 'map_id', 'service_id', 'content', 'image', 'sex', 'bill', 'Checkout_date', 'rate', 'active', 'visible'];

    public function factors()
    {
        return $this->hasMany(factor::class);
    }

}
