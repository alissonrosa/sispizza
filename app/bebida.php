<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bebida extends Model
{
    protected $fillable = ['id','nome','tipo','quantidade'];
}
