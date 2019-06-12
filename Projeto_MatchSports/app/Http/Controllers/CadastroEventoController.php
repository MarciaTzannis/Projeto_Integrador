<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento; // para chamar o modal evento.php

class CadastroEventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exibirCadastroEvento()
    {
        return view('cadastroEvento');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function novoEvento(Request $request)
    {
        $request->validate([
            'name'=> 'max:100',
            'descricao'=> 'max:1000',
            'regiao'=> 'max:45',
            'local'=> 'max:45',
            'cidade_uf'=> 'max:45',
            'data'=>'max:11',
            'hora'=>'max:8'
        ]);

        // criando novo evento
        $evento = new Evento;

        $evento->name = $request->input('nome');
        $evento->descricao = $request->input('descricao');
        $evento->regiao = $request->input('regiao');
        $evento->local = $request->input('local');
        $evento->cidade_uf = $request->input('cidade_uf');
        $evento->data = $request->input('data');
        $evento->hora = $request->input('hora');

        $evento->save();
        
        return redirect('/feed');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
