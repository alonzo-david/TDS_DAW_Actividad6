<form
    action="@if ($producto->idProducto > 0)
                {{ route('producto.update', $producto->idProducto) }}
            @else
                {{ route('producto.store') }}
            @endif"
    method="post"
>
    @if ($producto->idProducto > 0)
    {{ method_field('PUT') }}
    @endif

    {{csrf_field()}}

    <input type="hidden" id="idCliente" name="idCliente" value="{{$producto->idProducto}}">

    <div class="row">
        <div class="col-sm-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{$producto->nombre}}" required="">
        </div>

        <div class="col-sm-6">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción del Producto" value="{{$producto->descripcion}}" required="">
        </div>

        <div class="col-sm-6">
            <label for="existencia" class="form-label">Cantidad</label>
            <input type="text" class="form-control" id="existencia" name="existencia" placeholder="Cantidad en existencia" value="{{$producto->existencia}}" required="">
        </div>

        <div class="col-sm-6">
            <label for="categoria" class="form-label">Categoria</label>
            <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Nombre de Categoria" value="{{$producto->categoria}}" required="">
        </div>

        <hr class="my-4">

        <input type="submit" class="w-100 btn btn-sm btn-outline-info" value="Guardar">
    </div>






</form>


