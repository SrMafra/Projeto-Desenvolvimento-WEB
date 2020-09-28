@extends('layouts.admin')
@section('title', 'TIPO DE EPIS')

@section('content')

    <div class="container-padding" style="min-height: 900px;">

        <!-- Start Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <a href="{{ route('tipo_de_epi.create') }}" class="btn btn-primary"></i>CADASTRAR NOVO TIPO DE EPI</a>
                </div>
            </div>



            <!-- Start Panel -->
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-title">
                        Lista de Tipos de Epis
                    </div>

                    <div class="panel-body table-responsive">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Função</td>
                                    <td>Descrição</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tipo_de_epis as $tipo_de_epi)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $tipo_de_epi->tipo }}</td>
                                        <td>{{ $tipo_de_epi->descricao }}</td>
                                        <td>
                                            <a href="{{ route('tipo_de_epi.edit', $tipo_de_epi->id) }}"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('tipo_de_epi.destroy', $tipo_de_epi->id) }}"><i class="fa fa-trash"></i></a>

                                        </td>
                                @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- End Panel -->

        </div>
    </div>


@endsection
