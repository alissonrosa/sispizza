<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $fillable = ['id','nome','telefone','email','rua','bairro','numero','funcionario_id'];
}
