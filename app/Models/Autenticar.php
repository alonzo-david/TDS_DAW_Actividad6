<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autenticar extends Model
{
    use HasFactory;
    protected $table = 'autenticar';
    protected $primaryKey = 'idAutenticar';
    public $timestamps = false;
}
