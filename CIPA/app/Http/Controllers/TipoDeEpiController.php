<?php

namespace App\Http\Controllers;

use App\Models\TipoDeEpi;
use Illuminate\Http\Request;

class TipoDeEpiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_de_epis = TipoDeEpi::All();
        return view('tipo_de_epi.index', array('tipo_de_epis' =>$tipo_de_epis));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_de_epi.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo_de_epis = TipoDeEpi::Create($request->all());
        return redirect('tipo_de_epi') -> with('status', 'Novo tipo de epi cadastrado com sucesso');
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
        $tipo_de_epis = TipoDeEpi::find($id);

        return view ('tipo_de_epi.edit', array ('tipo_de_epi' =>  $tipo_de_epis));
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
        $tipo_de_epis = TipoDeEpi::find($id);
        $tipo_de_epis->update($request->all());

        return redirect('tipo_de_epi')->with('statusUpdate', 'Tipo De Epi atualizada com sucesso!');
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
