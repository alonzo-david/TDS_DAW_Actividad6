<form
    action="@if ($empleado->idEmpleado > 0)
                {{ route('empleado.update', $empleado->idEmpleado) }}
            @else
                {{ route('empleado.store') }}
            @endif"
    method="post"
>


    @if ($empleado->idEmpleado > 0)
    {{ method_field('PUT') }}
    @endif

    {{csrf_field()}}

    <div class="row">
        <div class="col-sm-4">
            <label for="nit" class="form-label">NIT</label>
            <input type="text" class="form-control" id="nit" name="nit" placeholder="Nit" value="{{$empleado->nit}}" required="">
        </div>

        <div class="col-sm-4">
            <label for="nombres" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" value="{{$empleado->nombres}}" required="">
        </div>

        <div class="col-4">
            <label for="apellidos" class="form-label">Apellidos</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" value="{{$empleado->apellidos}}" required="">
            </div>
        </div>

        <hr class="my-4">

        <input type="submit" class="w-100 btn btn-sm btn-outline-info" value="Guardar">
    </div>






</form>


