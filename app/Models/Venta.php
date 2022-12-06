<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'Ventas';
    protected $fillable=[
        //id usaurio id producto fecha de compra
        'id_usuario',
        'id_producto',
        'fecha_compra'
    ];
    use HasFactory;
    use HasFactory;
}
