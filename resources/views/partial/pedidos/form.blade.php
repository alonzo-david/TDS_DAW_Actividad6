<form
    action="@if ($pedido->idPedido != null)
                {{ route('pedido.update', $pedido->idPedido) }}
            @else
                {{ route('pedido.store') }}
            @endif"
    method="post"
>

    @if ($pedido->idPedido != null)
    {{ method_field('PUT') }}
    @endif

    {{csrf_field()}}

    <div class="row">
        <div class="col-sm-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad" value="{{$pedido->cantidad}}" required="">
        </div>

        <div class="col-sm-3">
            <label for="idProducto" class="form-label">Productos</label>
            <select id="idProducto" name="idProducto" class="form-control" required>
                <option value="0">Seleccione una opción</option>
                @foreach ($productos as $producto)
                    <option
                        value='{{$producto->idProducto}}'
                        @if ($pedido->idProducto == $producto->idProducto)
                            selected
                        @endif
                    >{{$producto->nombre}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-sm-3">
            <label for="idProveedor" class="form-label">Proveedores</label>
            <select id="idProveedor" name="idProveedor" class="form-control" required>
                <option value="0">Seleccione una opción</option>
                @foreach ($proveedores as $proveedor)
                    <option
                        value='{{$proveedor->idProveedor}}'
                        @if ($pedido->idProveedor == $proveedor->idProveedor)
                            selected
                        @endif
                    >{{$proveedor->nombre}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-sm-3">
            <label for="idEmpleado" class="form-label">Empleados</label>
            <select id="idEmpleado" name="idEmpleado" class="form-control" required>
                <option value="0">Seleccione una opción</option>
                @foreach ($empleados as $empleado)
                    <option
                        value='{{$empleado->idEmpleado}}'
                        @if ($pedido->idEmpleado == $empleado->idEmpleado)
                            selected
                        @endif
                    >{{$empleado->nombres . ' ' . $empleado->apellidos}}</option>
                @endforeach
            </select>
        </div>

        <hr class="my-4">

        <input type="submit" class="w-100 btn btn-sm btn-outline-info" value="Guardar">
    </div>






</form>


