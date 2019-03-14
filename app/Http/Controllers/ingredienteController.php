<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estoque;

class estoqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $estoques = Estoque::all();

        return view("estoque.listar",['estoques'=>$estoques]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view("estoque.inserir");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estoque = new Estoque();
        //$funcionario->id = $request->input('id');
        $estoque->nome = $request->input('nome');
        $estoque->quantidade = $request->input('quantidade');

        $estoque->save();
        return redirect()->route('estoque.index');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estoque = Estoque::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estoque = Estoque::find($id);
        return view('estoque.editar', ['f' => $estoque]);
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
        $estoque = Estoque::find($id); // consulta dos dados que estão no BD 
        $estoque->nome = $request->input('nome');
        $estoque->quantidade = $request->input('quantidade');

        $estoque->save();

        return redirect()->route('estoque.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estoque = Estoque::find($id); // consulta no BD
        $estoque->delete();  // Exclui do BD

        return redirect()->route('estoque.index');
    }
}
