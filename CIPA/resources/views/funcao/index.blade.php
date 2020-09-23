@extends('layouts.admin')
@section('title', 'Funcoes')

@section('content')

    <div class="container-padding" style="min-height: 900px;">

        <!-- Start Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <a href="{{ route('funcao.create') }}" class="btn btn-primary"></i>CADASTRAR NOVA FUNÇÃO</a>
                </div>
            </div>



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
                                            <a href="{{ route('funcao.destroy', $funcao->id) }}"><i class="fa fa-trash"></i></a>

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
