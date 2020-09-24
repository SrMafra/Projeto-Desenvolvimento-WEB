@extends('layouts.admin')
@section('title', 'SETORES')

@section('content')
    <div class="container-padding" style="min-height: 900px;">

        <!-- Start Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-title">
                        Editar de Setor
                    </div>

                    <div class="panel-body">
                        <form class="fieldset-form" action="/setor/{{ $setor->id }}"method="post">

                            @csrf
                            @method('PUT')
                            <fieldset>

                                <div class="form-group">
                                    <label for="ID" class="form-label">ID</label>
                                    <input type="text" class="form-control" id="ID" name="id" value="{{ $setor->id }}" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="setor" class="form-label">Setor</label>
                                    <input type="text" class="form-control" id="setor" name="setor" value="{{ $setor->setor }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Descrição</label>
                                    <textarea class="form-control" rows="3" name="descricao" aria-valuemin="{{ $setor->descricao }}"></textarea>
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
