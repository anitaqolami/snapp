<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['name', 'slug'];

    public function shops()
    {
        return $this->belongsToMany(shop::class);
    }
}
