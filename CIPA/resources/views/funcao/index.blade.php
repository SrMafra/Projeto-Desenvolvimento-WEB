@extends('layouts.admin')
@section('title', 'Funcoes')

@section('content')

    <div class="col-md-12">
        <div class="panel panel-default">

            <a href="{{ route('funcao.create') }}" class="btn btn-primary"></i>CADASTRAR NOVA FUNÇÃO</a>
        </div>
    </div>

    <div class="container-padding">

        <!-- Start Row -->
        <div class="row">

            <!-- Start Panel -->
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-title">
                        Striped rows
                    </div>

                    <div class="panel-body table-responsive">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>Order ID</td>
                                    <td>Função</td>
                                    <td>Descrição</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($funcoes as $funcao)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $funcao->funcao }}</td>
                                    <td>{{ $funcao->descricao }}</td>
                                    <td>
                                        <a href="{{ route('funcao.edit', $funcao->id) }}"><i class="fa fa-edit"></i></a>

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
