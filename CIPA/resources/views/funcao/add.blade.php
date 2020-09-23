@extends('layouts.admin')
@section('title', 'Funcoes')

@section('content')
    <div class="container-padding" style="min-height: 900px;">

        <!-- Start Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-title">
                        Cadastro de Funções
                    </div>

                    <div class="panel-body">
                        <form class="fieldset-form" action="{{ route('funcao.store') }}" method="post">
                            @csrf
                            <fieldset>

                                <div class="form-group">
                                    <label for="funcao" class="form-label">Função</label>
                                    <input type="text" class="form-control" id="funcao" name="funcao">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Descrição</label>
                                    <textarea class="form-control" rows="3" name="descricao"></textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Cadastrar</button>
                            </fieldset>
                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection
