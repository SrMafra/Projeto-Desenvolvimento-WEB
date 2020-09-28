@extends('layouts.admin')
@section('title', 'TIPO DE EPIS')

@section('content')
    <div class="container-padding" style="min-height: 900px;">

        <!-- Start Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-title">
                        Editar de Função
                    </div>

                    <div class="panel-body">
                        <form class="fieldset-form" action="/tipo_de_epi/{{ $tipo_de_epi->id }}"method="post">

                            @csrf
                            @method('PUT')

                            <fieldset>

                                <div class="form-group">
                                    <label for="ID" class="form-label">ID</label>
                                    <input type="text" class="form-control" id="ID" name="id" value="{{ $tipo_de_epi->id }}" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="Tipo" class="form-label">Tipo</label>
                                    <input type="text" class="form-control" id="Tipo" name="tipo" value="{{ $tipo_de_epi->tipo }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Descrição</label>
                                    <textarea class="form-control" rows="3" name="descricao" value="{{ $tipo_de_epi->descricao }}"></textarea>
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
