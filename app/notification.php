<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    protected $fillable = ['receiver_user','sender_user','title','content'];
}
