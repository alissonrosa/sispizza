<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    protected $fillable = ['id','nome','preço','tipo'];

/*	
	public function ingredientes(){
		return $this->hasMany(ingrediente::class);
	}
	*/
}
