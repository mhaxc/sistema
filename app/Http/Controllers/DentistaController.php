<?php

namespace App\Http\Controllers;

use App\Dentista;
use Illuminate\Http\Request;
use Redirect;

class DentistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view ('dentista.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dentista.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $dentista = new Dentista();

        $dentista = $dentista->create($request->all());

        \Session::flash('mensagem_sucesso','Cadastrado com Sucesso');


        return  Redirect::to('dentistas/create');





    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dentista  $dentista
     * @return \Illuminate\Http\Response
     */
    public function show(Dentista $dentista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dentista  $dentista
     * @return \Illuminate\Http\Response
     */
    public function edit(Dentista $dentista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dentista  $dentista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dentista $dentista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dentista  $dentista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dentista $dentista)
    {
        //
    }
}
