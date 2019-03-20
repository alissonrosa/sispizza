<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\user;
=======
<<<<<<< HEAD
use App\user;
=======
use App\User;
>>>>>>> master
>>>>>>> master

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $users = user::all();

        return view("user.listar",['users'=>$users]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view("user.inserir");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> master
        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->route('user.index');
<<<<<<< HEAD
=======
=======
        $users = new user();

        $users->name = $request->input('name');
        $users->email = $request->input('email')
        $users->save();
        return redirect()->route('user.index');

        
>>>>>>> master
>>>>>>> master
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
<<<<<<< HEAD
        $users = user::find($id);
=======
<<<<<<< HEAD
        $users = user::find($id);
=======
        $user = user::find($id);
>>>>>>> master
>>>>>>> master
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = user::find($id);
        return view('user.editar', ['f' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       //echo "$id";
        $user = user::find($id); // consulta dos dados que estão no BD 
        $user->nome = $request->input('nome');
        $user->preço = $request->input('preço');
        $user->tipo = $request->input('tipo');

        $user->save();

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = user::find($id); // consulta no BD
        $user->delete();  // Exclui do BD

        return redirect()->route('user.index');
    }
}