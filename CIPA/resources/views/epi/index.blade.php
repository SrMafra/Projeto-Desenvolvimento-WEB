@extends('layouts.admin')
@section('title', 'EPI')

@section('content')

    <div class="container-padding" style="min-height: 900px;">

        <!-- Start Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <a href="{{ route('epi.create') }}" class="btn btn-primary"></i>CADASTRAR EPI</a>
                </div>
            </div>



            <!-- Start Panel -->
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-title">
                        Lista de Epi
                    </div>

                    <div class="panel-body table-responsive">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>equipamento</td>
                                    <td>Tipo de Epi</td>
                                    <td>Data de Compra</td>
                                    <td>Data de Validade</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($epis as $epi)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $epi->equipamento }}</td>
                                        <td>{{ $epi->tipo_de_epi }}</td>
                                        <td>{{ $epi->data_de_compra }}</td>
                                        <td>{{ $epi->data_de_validade }}</td>
                                        <td>{{ $epi->status }}</td>
                                        <td>
                                            <a href="{{ route('epi.edit', $epi->id) }}"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('epi.destroy', $epi->id) }}"><i class="fa fa-trash"></i></a>

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
