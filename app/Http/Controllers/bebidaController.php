<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bebida;

class bebidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $bebidas = bebida::all();

        return view("bebida.listar",['bebidas'=>$bebidas]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view("bebida.inserir");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bebida = new bebida();
        //$produto->id = $request->input('id');
        $bebida->nome = $request->input('nome');
        $bebida->tipo = $request->input('tipo');
        $bebida->quantidade = $request->input('quantidade');

        $bebida->save();
        return redirect()->route('bebida.index');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bebida = bebida::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bebida = bebida::find($id);
        return view('bebida.editar', ['f' => $bebida]);
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
        $bebida = bebida::find($id); // consulta dos dados que estão no BD 
        $bebida->nome = $request->input('nome');
        $bebida->tipo = $request->input('tipo');
        $bebida->quantidade = $request->input('quantidade');

        $bebida->save();
        return redirect()->route('bebida.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bebida = bebida::find($id); // consulta no BD
        $bebida->delete();  // Exclui do BD

        return redirect()->route('bebida.index');
    }
}