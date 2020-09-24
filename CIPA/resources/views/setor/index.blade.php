@extends('layouts.admin')
@section('title', 'SETORES')

@section('content')

    <div class="container-padding" style="min-height: 900px;">

        <!-- Start Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <a href="{{ route('setor.create') }}" class="btn btn-primary"></i>CADASTRAR NOVO SETOR</a>
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
                                    <td>Setor</td>
                                    <td>Descrição</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($setores as $setor)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $setor->setor }}</td>
                                        <td>{{ $setor->descricao }}</td>
                                        <td>
                                            <a href="{{ route('setor.edit', $setor->id) }}"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('setor.destroy', $setor->id) }}"><i class="fa fa-trash"></i></a>

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
