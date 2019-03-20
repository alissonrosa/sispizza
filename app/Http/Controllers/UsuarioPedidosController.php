<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioPedidosController extends Controller
{
 	public function index($id){
 		$user = user::find($id);
 		$dados = $user->pedidos;
 		return view('listar',['pedidos' => $dados]);
 	}
}
