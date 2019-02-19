<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingrediente extends Model
{
    protected $fillable = ['id','nome','quantidade'];

/*	
	public function produtos(){
		return $this->belongsToMany(produto::class);
	}
	*/
}
