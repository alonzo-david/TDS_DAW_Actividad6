<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Producto;
use App\Models\Empleado;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::all();

        return view('pedidos.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pedido = new Pedido();
        $productos = Producto::all();
        $empleados = Empleado::all();
        $proveedores = Proveedor::all();

        return view('pedidos.new', compact(['pedido','productos','empleados','proveedores']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedido = new Pedido();
        $pedido->cantidad = $request->cantidad;
        $pedido->idProducto = $request->idProducto;
        $pedido->idProveedor = $request->idProveedor;
        $pedido->idEmpleado = $request->idEmpleado;

        $pedido->save();

        return redirect('/pedidos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedido = Pedido::find($id);
        $productos = Producto::all();
        $empleados = Empleado::all();
        $proveedores = Proveedor::all();

        return view('pedidos.edit', compact(['pedido','productos','empleados','proveedores']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pedido = Pedido::find($id);
        $pedido->cantidad = $request->cantidad;
        $pedido->idProducto = $request->idProducto;
        $pedido->idProveedor = $request->idProveedor;
        $pedido->idEmpleado = $request->idEmpleado;

        $pedido->save();

        //return $pedido;
        return redirect('/pedidos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = Pedido::find($id);

        $pedido->delete();

        //return $pedido;
        return back();
    }
}
