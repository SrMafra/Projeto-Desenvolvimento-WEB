@extends('layouts.admin')
@section('title', 'FUNCIONARIOS')

@section('content')


@section('content')
    <div class="container-padding" style="min-height: 900px;">

        <!-- Start Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-title">
                        Edição de EPI
                    </div>

                    <div class="panel-body">
                        <form class="fieldset-form" action="/funcionario/{{ $funcionarios->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <fieldset>
                                <div class="form-group">
                                    <label for="ID" class="form-label">ID</label>
                                    <input type="text" class="form-control" id="ID" name="id" value="{{ $funcionarios->id }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="Funcionario" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="Funcionario" name="nome" value="{{ $funcionarios->nome }}">
                                </div>
                                <div class="form-group">
                                    <label for="CPF" class="form-label">CPF</label>
                                    <input type="text" class="form-control" name="cpf" id="CPF" value="{{ $funcionarios->cpf }}">
                                </div>
                                <div class="form-group">
                                    <label for="Email" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" name="email" id="Email" value="{{ $funcionarios->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="Telefone" class="form-label">Telefone</label>
                                    <input type="tel" class="form-control" name="telefone" id="Telefone" value="{{ $funcionarios->telefone}}">
                                </div>

                                <div class="form-group">
                                    <label for="Setor" class="form-label">Setor</label>
                                    <select class="form-control">

                                        @foreach ($setores as $setor)

                                            <option value="{{ $setor->id }}">{{ $setor->setor }}</option>

                                        @endforeach


                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Setor" class="form-label">Função</label>
                                    <select class="form-control">
                                        @foreach ($funcoes as $funcao)
                                            <option value="{{ $funcao->id }}">{{ $funcao->funcao }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <button id="showbottom" type="submit" class="btn btn-default">Salvar Alterações</button>
                            </fieldset>
                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection
