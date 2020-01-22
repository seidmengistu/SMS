<?php

namespace App;

use app\Teacher;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    
    protected $fillable = [
        'fullname', 'serialnumber',
    ];
}
