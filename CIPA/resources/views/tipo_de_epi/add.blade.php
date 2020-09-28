@extends('layouts.admin')
@section('title', 'TIPO DE EPIS')

@section('content')
    <div class="container-padding" style="min-height: 900px;">

        <!-- Start Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-title">
                        Cadastro de Tipo de Epi
                    </div>

                    <div class="panel-body">
                        <form class="fieldset-form" action="{{ route('tipo_de_epi.store') }}" method="post">
                            @csrf
                            <fieldset>

                                <div class="form-group">
                                    <label for="Tipo" class="form-label">Tipo</label>
                                    <input type="text" class="form-control" id="Tipo" name="tipo">
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
