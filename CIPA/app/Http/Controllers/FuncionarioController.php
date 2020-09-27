<?php


namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Models\Funcao;
use App\Models\Setor;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionario::All();

        return view('funcionario.index', array('funcionarios' => $funcionarios));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $funcoes = Funcao::all();
        $setores = Setor::all();

        return view('funcionario.add', array ('funcao' =>$funcoes, 'setor'=>$setores));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $funcionarios = Funcionario::create($request->all());
        $funcoes = Funcao::find($request->funcao);
        $setores = Setor::find($request->setor);
        return redirect('funcionario')->with('status', 'Nova função cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return $funcionarios;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $funcionarios = Funcionario::find($id);

        return view('funcionario.edit', array('funcionario' => $funcionarios));
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
        $funcionarios = funcionario::find($id);
        $funcionarios->update($request->all());

        return redirect('funcionario')->with('statusUpdate', 'funcionario atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // $funcionarios = funcionario::find($id);

        //return view('funcionario.destroy', ['funcionario' => $funcionarios]);
    }
}
