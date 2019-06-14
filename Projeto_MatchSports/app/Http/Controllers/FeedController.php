<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modalidades;

class feedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exibirFeed()
    {
        return view('feed');
    }

    public function exibirModalidades()
    {
        $modalidades = Modalidades::all();
        return view('feed')->with('modalidades',$modalidades);
    }

    public function exibirDetalhes($slug){
     $modalidade = Modalidades::where('slug', '=',$slug)->get(); // find() procura obrigatoriamente pelo id PK
     return view('feed-modalidade')
     ->with('modalidade',$modalidade[0]);
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
    public function store(Request $request)
    {
        //
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
