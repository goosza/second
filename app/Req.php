<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Req extends Model
{
     protected $fillable = [
        'login',  'password',
    ];
}
