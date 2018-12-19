<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $fillable=['user_id','resnumber','price','course_id','payment'];
}
