<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Venta;

class VentaController extends Controller
{
    //

    public function crear(Request $request){
        //$data = $request ->all();
        //validaciones
        $data= $this->validateRequest($request);
        $venta = Venta::create($data);
        return response([
            'message'=>'se creo con exito la venta',
            'id'=>$venta['id'],
        ], 201);
    }

    public function obtener(){
        $ventas= Venta::all();
        return $ventas;
    }

    public function editar($id, Request $request){
        $ventas=Venta::find($id);

        if(!$ventas){
            return response([
                'message'=> 'la Venta con el id ' .$id.' no existe en la bd'
            ],404);
        }
        return response([
            'message'=> 'Se edito la venta'
        ],404);
    }

    public function eliminar($id){
        $venta = Venta::find($id);
//validar que existe el usuario
        if(!$venta){
            return response([
                'message'=>'el Venta con el id' .$id. 'no existe en la bdd'
            ],404);
        }
        $venta->delete();
        return response([
            'message' => "se elimino con exito"
        ]);
    }

    public function obtenerUnoSolo($id){
        $venta = Venta::find($id);
        if($venta!=null){
            return response($venta, 200);
        }
            return response('no se encuentra la Venta', 404);
    }

    private function validateRequest($request){
        return $request->validate([
        'id_usuario' => 'numeric',
        'id_producto' => 'numeric',
        'fecha_compra'=> 'string',

    ]);
}
}
