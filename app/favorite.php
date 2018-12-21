<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class favorite extends Model
{
    protected $fillable = ['user_id', 'shop_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
