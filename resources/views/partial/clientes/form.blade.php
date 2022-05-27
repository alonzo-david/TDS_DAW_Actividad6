<form action="/clientes/{{$cliente->idCliente}}/editar" method="post">

    {{csrf_field()}}

    <input type="hidden" id="idCliente" name="idCliente" value="{{$cliente->idCliente}}">

    <div class="row">
        <div class="col-sm-6">
            <label for="lastName" class="form-label">NIT</label>
            <input type="text" class="form-control" id="nit" name="nit" placeholder="626212-K" value="{{$cliente->nit}}" required="">
        </div>

        <div class="col-sm-6">
            <label for="lastName" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo" value="{{$cliente->nombre}}" required="">
        </div>

        <div class="col-12">
            <label for="username" class="form-label">Dirección</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección exacta" value="{{$cliente->direccion}}" required="">
            </div>
        </div>

        <hr class="my-4">

        <input type="submit" class="w-100 btn btn-sm btn-outline-info" value="Guardar">
    </div>






</form>


