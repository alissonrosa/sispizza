<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    protected $fillable = ['id','descrição','status','data','hora','usuario_id'];

    public function produtos(){
    	return $this->belongsToMany(produto::class);
    }
    public function bebidas(){
		return $this->belongsToMany(bebida::class);
    }

    public function usuario(){
    	return $this->belongsTo('App\user');
    }
}
