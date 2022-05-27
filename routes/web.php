<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/', 'index');

/*** Clientes ***/

Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/clientes/crear', [ClienteController::class, 'create']);
Route::get('/clientes/{id}/editar', [ClienteController::class, 'edit']);
Route::post('/clientes/{id}/editar', [ClienteController::class, 'update']);
Route::get('/clientes/{id}/eliminar', [ClienteController::class, 'destroy']);

/*** Empleados ***/
Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::get('/empleados/crear', [EmpleadoController::class, 'create']);
Route::get('/empleados/{id}/editar', [EmpleadoController::class, 'edit']);
Route::put('/empleados/{id}/editar', [EmpleadoController::class, 'update'])->name('empleado.update');
Route::post('/empleados/store', [EmpleadoController::class, 'store'])->name('empleado.store');
Route::get('/empleados/{id}/eliminar', [EmpleadoController::class, 'destroy']);

/*** Pedidos ***/
Route::get('/pedidos', [PedidoController::class, 'index']);
Route::get('/pedidos/crear', [PedidoController::class, 'create']);
Route::get('/pedidos/{id}/editar', [PedidoController::class, 'edit']);
Route::put('/pedidos/{id}/editar', [PedidoController::class, 'update'])->name('pedido.update');
Route::post('/pedidos/store', [PedidoController::class, 'store'])->name('pedido.store');
Route::get('/pedidos/{id}/eliminar', [PedidoController::class, 'destroy']);

/*** Productos ***/
Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/productos/crear', [ProductoController::class, 'create']);
Route::get('/productos/{id}/editar', [ProductoController::class, 'edit']);
Route::put('/productos/{id}/editar', [ProductoController::class, 'update'])->name('producto.update');
Route::post('/productos/store', [ProductoController::class, 'store'])->name('producto.store');
Route::get('/productos/{id}/eliminar', [ProductoController::class, 'destroy']);

/*** Proveedores ***/
Route::get('/proveedores', [ProveedorController::class, 'index']);
Route::get('/proveedores/crear', [ProveedorController::class, 'create']);
Route::get('/proveedores/{id}/editar', [ProveedorController::class, 'edit']);
Route::put('/proveedores/{id}/editar', [ProveedorController::class, 'update'])->name('proveedor.update');
Route::post('/proveedores/store', [ProveedorController::class, 'store'])->name('proveedor.store');
Route::get('/proveedores/{id}/eliminar', [ProveedorController::class, 'destroy']);

/*** Acceso ***/

Route::view('/login', 'acceso.login');

Route::post('/login', [UserController::class, 'login']);

/***/
