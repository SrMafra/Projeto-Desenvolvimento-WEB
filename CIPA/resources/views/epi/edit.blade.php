@extends('layouts.admin')
@section('title', 'EPI')

@section('content')


@section('content')
    <div class="container-padding" style="min-height: 900px;">

        <!-- Start Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-title">
                        Edição de Epi
                    </div>

                    <div class="panel-body">
                        <form class="fieldset-form" action="/epi/{{ $epis->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <fieldset>

                                <div class="form-group">
                                    <label for="Equipamento" class="form-label">Equipamento</label>
                                    <input type="text" class="form-control" id="Equipamento" name="equipamento" value="{{ $epi->equipamento}}">
                                </div>

                                <div class="form-group">
                                    <label for="" class="form-label">Tipo de Epi</label>
                                    <select class="form-control">

                                        @foreach ($tipo_de_epis as $tipo_de_epi)

                                            <option value="{{ $tipo_de_epi->id }}">{{ $tipo_de_epi->tipo }}</option>

                                        @endforeach


                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="" class="form-label">Status</label>
                                    <select class="form-control" name="status">
                                            <option value="Nao esta apto para uso">Nao esta apto para uso</option>
                                            <option value="Esta apto para uso">Esta apto para uso</option>
                                    </select>
                                </div>

                                <div class="form-group">

                                    <div class="control-group">
                                        <div class="controls">
                                            <div class="input-prepend input-group">
                                                <label for="DataDeValidade" class="form-label">Data de Compra</label>
                                                <input type="date" id="DataDeValidade" class="form-control"
                                                    name="data_de_compra" value="{{ $epi->data_de_compra }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="control-group">
                                        <div class="controls">
                                            <div class="input-prepend input-group">
                                                <label for="DataDeValidade" class="form-label">Data de Validade</label>
                                                <input type="date" id="DataDeValidade" class="form-control active"
                                                    name="data_de_validade" value="{{ $epi->data_de_validade }}">
                                            </div>
                                        </div>
                                    </div>
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
