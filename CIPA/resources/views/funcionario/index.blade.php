@extends('layouts.admin')
@section('title', 'FUNCIONARIOS')

@section('content')

    <div class="container-padding" style="min-height: 900px;">

        <!-- Start Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <a href="{{ route('funcionario.create') }}" class="btn btn-primary"></i>CADASTRAR NOVO FUNCIONARIO</a>
                </div>
            </div>



            <!-- Start Panel -->
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-title">
                        Lista de Setores
                    </div>

                    <div class="panel-body table-responsive">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Nome</td>
                                    <td>Setor</td>
                                    <td>Função</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($funcionarios as $funcionario)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $funcionario->nome }}</td>
                                        <td>{{ $funcionario->setor }}</td>
                                        <td>{{ $funcionario->funcao }}</td>
                                        <td>
                                            <a href="{{ route('funcionario.edit', $funcionario->id) }}"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('funcionario.destroy', $funcionario->id) }}"><i class="fa fa-trash"></i></a>

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
