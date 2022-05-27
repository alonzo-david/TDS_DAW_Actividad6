<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = 'pedido';
    protected $primaryKey = 'idPedido';
    public $timestamps = false;

    public function proveedor(){
        return $this->belongsTo('App\Models\Proveedor', 'idProveedor');
    }

    public function producto(){
        return $this->belongsTo('App\Models\Producto', 'idProducto');
    }

    public function empleado(){
        return $this->belongsTo('App\Models\Empleado', 'idEmpleado');
    }
}
