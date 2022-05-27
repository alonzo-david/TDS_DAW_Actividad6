@extends('layout.master')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Pedido</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <!--<a href="#" class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal" >Nuevo</a>-->
                    <a href="/pedidos/crear" class="btn btn-sm btn-outline-success">Nuevo</a>
                </div>
            </div>
        </div>

        <h2>Listado de pedidos</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Proveedor</th>
                    <th scope="col">Empleado</th>
                    <th scope="col">Operaciones</th>
                </tr>
                </thead>
                @php
                    $contador = 0;
                @endphp
                <tbody>
                @foreach($pedidos as $pedido)
                    <tr>
                        <td>{{++$contador}}</td>
                        <td>{{$pedido->idPedido}}</td>
                        <td>{{$pedido->cantidad}}</td>
                        <td>{{$pedido->producto->nombre}}</td>
                        <td>{{$pedido->proveedor->nombre}}</td>
                        <td>{{$pedido->empleado->nombres . ' ' . $pedido->empleado->apellidos}}</td>
                        <td>
                            <div class="mt-1">
                                <a href="/pedidos/{{$pedido->idPedido}}/editar" class="btn btn-sm btn-outline-warning">Editar</a>
                                <a href="/pedidos/{{$pedido->idPedido}}/eliminar" class="btn btn-sm btn-outline-danger">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>


@endsection
