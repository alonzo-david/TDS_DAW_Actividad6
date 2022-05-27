<form
    action="@if ($proveedor->idProveedor > 0)
                {{ route('proveedor.update', $proveedor->idProveedor) }}
            @else
                {{ route('proveedor.store') }}
            @endif"
    method="post"
>
    @if ($proveedor->idProveedor > 0)
    {{ method_field('PUT') }}
    @endif

    {{csrf_field()}}

    <input type="hidden" id="idCliente" name="idCliente" value="{{$proveedor->idProveedor}}">

    <div class="row">

        <div class="col-12">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo" value="{{$proveedor->nombre}}" required="">
        </div>

        <hr class="my-4">

        <input type="submit" class="w-100 btn btn-sm btn-outline-info" value="Guardar">
    </div>






</form>


