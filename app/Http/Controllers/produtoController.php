<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produto;

class produtoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $produtos = produto::all();

        return view("produto.listar",['produtos'=>$produtos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view("produto.inserir");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new produto();
        //$produto->id = $request->input('id');
        $produto->nome = $request->input('nome');
        $produto->preço = $request->input('preço');
        $produto->tipo = $request->input('tipo');

        $produto->save();
        return redirect()->route('produto.index');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = produto::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = produto::find($id);
        return view('produto.editar', ['f' => $produto]);
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
        $produto = produto::find($id); // consulta dos dados que estão no BD 
        $produto->nome = $request->input('nome');
        $produto->preço = $request->input('preço');
        $produto->tipo = $request->input('tipo');

        $produto->save();

        return redirect()->route('produto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = produto::find($id); // consulta no BD
        $produto->delete();  // Exclui do BD

        return redirect()->route('produto.index');
    }
}