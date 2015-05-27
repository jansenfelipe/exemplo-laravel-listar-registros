@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">
                    <div class="panel-heading">Lista de Clientes</div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class="table table-condensed table-striped">
                                <thead>
                                <tr>
                                    <th><a href="{{Order::url('documento')}}">Documento</a></th>
                                    <th><a href="{{Order::url('nome')}}">Nome</a></th>
                                    <th><a href="{{Order::url('razao_social')}}">Razão Social</a></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($clientes as $cliente)

                                    <tr>
                                        <td>{{ $cliente->documento }}</td>
                                        <td>{{ $cliente->nome }}</td>
                                        <td>{{ $cliente->razao_social }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <?php echo $clientes->appends(Input::query())->render() ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
