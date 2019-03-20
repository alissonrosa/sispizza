<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class funcionario extends Authenticatable
{
    use Notifiable;


    protected $fillable = [

      'id',
      'nome',
      'pasword',
      'ch',
      'salario',
      'cpf',
      'email',
      'telefone',
      'rua',
      'bairro',
      'numero',
<<<<<<< HEAD
      'usuario_id',
=======
<<<<<<< HEAD
      'usuario_id',
=======
      'users_id',
>>>>>>> master
>>>>>>> master

    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> master


    public function usuario(){
      return $this->hasOne('App\User', 'id', 'usuario_id');
    }
<<<<<<< HEAD
=======
=======
>>>>>>> master
>>>>>>> master
}
