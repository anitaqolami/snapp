<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class factor extends Model
{
    protected $fillable = ['shop_id', 'user_id', 'service_id', 'code_discount', 'price', 'service_discount', 'date', 'accept', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function shop()
    {
        return $this->belongsTo(shop::class);
    }

    public function services()
    {
        return $this->hasMany(service::class);
    }
}
