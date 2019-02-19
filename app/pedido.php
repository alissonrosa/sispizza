<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    protected $fillable = ['id','descrição','status','data','hora','usuario_id'];
}
