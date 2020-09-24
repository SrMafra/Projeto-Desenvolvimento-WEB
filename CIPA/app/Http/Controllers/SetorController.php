<?php

namespace App\Http\Controllers;

use App\Models\Setor;
use Illuminate\Http\Request;

class SetorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setores = Setor::All();
        return view('setor.index', array('setores' => $setores));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('setor.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $setores = Setor::create($request->all());

        return redirect('setor')->with('status', 'Novo Setor Cadastrado com Sucesso!');

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
        $setores = Setor::find($id);

        return view ('setor.edit',array('setor'=>$setores));
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
        $setores = Setor::find($id);

        return redirect('setor')->with('statusUpdate', 'Setor Atualizado com Sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//$setores = Setor::find($id);

  //      return view('funcao.destroy', ['setor' => $setores]);
    }
}
