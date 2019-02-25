<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    //Neste método, devemos buscar todos os registros dos usuários e passá-los para a view de listagem
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Neste método será feita a chamada da tela para cadastro de usuários
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Este método deverá receber os dados vindos do formulário de cadastro e realizar o processamento para persistência (junto ao BD)
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Este método de receber um id para localizar determinado usuário no BD e passá-lo para a view de exibição detalhada.
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Este método de receber um id para localizar determinado usuário no BD e passá-lo para a view de edição de registro (formulário preenchido, porém com campos editáveis)
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
        //Este método deverá receber os dados vindos do formulário de edição e realizar o processamento para persistência (junto ao BD)
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Este método de receber um id para localizar determinado usuário no BD e realizar o processamento para remoção dos dados (junto ao BD)
    }
}
