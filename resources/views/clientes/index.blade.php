@extends('layout.master')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Clientes</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <!--<a href="#" class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal" >Nuevo</a>-->
                    <a href="/clientes/crear" class="btn btn-sm btn-outline-success">Nuevo</a>
                </div>
            </div>
        </div>

        <h2>Listado de clientes</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">NIT</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Operaciones</th>
                </tr>
                </thead>
                @php
                    $contador = 0;
                @endphp
                <tbody>
                @foreach($clientes as $cliente)
                    <tr>
                        <td>{{++$contador}}</td>
                        <td>{{$cliente->idCliente}}</td>
                        <td>{{$cliente->nit}}</td>
                        <td>{{$cliente->nombre}}</td>
                        <td>{{$cliente->direccion}}</td>
                        <td>
                            <div class="mt-1">
                                <a href="/clientes/{{$cliente->idCliente}}/editar" class="btn btn-sm btn-outline-warning">Editar</a>
                                <a href="/clientes/{{$cliente->idCliente}}/eliminar" class="btn btn-sm btn-outline-danger">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
