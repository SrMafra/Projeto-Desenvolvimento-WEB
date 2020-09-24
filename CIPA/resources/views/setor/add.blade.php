@extends('layouts.admin')
@section('title', 'SETORES')

@section('content')


@section('content')
    <div class="container-padding" style="min-height: 900px;">

        <!-- Start Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-title">
                        Cadastro de Setores
                    </div>

                    <div class="panel-body">
                        <form class="fieldset-form" action="{{ route('setor.store') }}" method="post">
                            @csrf
                            <fieldset>

                                <div class="form-group">
                                    <label for="setor" class="form-label">Setor</label>
                                    <input type="text" class="form-control" id="setor" name="setor">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Descrição</label>
                                    <textarea class="form-control" rows="3" name="descricao"></textarea>
                                </div>
                                <button id="showbottom" type="submit" class="btn btn-default">Cadastrar</button>
                            </fieldset>
                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection
