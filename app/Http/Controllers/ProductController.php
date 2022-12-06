<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function crear(Request $request){
        //$data = $request ->all();
        //validaciones
        $data= $this->validateRequest($request);
        $producto = Producto::create($data);
        return response([
            'message'=>'se creo con exito el producto',
            'id'=>$producto['id'],
        ], 201);
    }



    public function obtener(){
        $productos= Producto::all();
        return $productos;
    }


    public function editar($id, Request $request){
        $productos=Producto::find($id);

        if(!$productos){
            return response([
                'message'=> 'el producto con el id ' .$id.' no existe en la bd'
            ],404);
        }
        return response(['message'=>'Se edito el producto']);
    }

    public function eliminar($id){
        $producto = Producto::find($id);
//validar que existe el usuario
        if(!$producto){
            return response([
                'message'=>'el producto con el id' .$id. 'no existe en la bdd'
            ],404);
        }
        $producto->delete();
        return response([
            'message' => "se elimino con exito"
        ]);
    }

    public function obtenerUnoSolo($id){
        $producto = Producto::find($id);
        if($producto!=null){
            return response($producto, 200);
        }
            return response('no se encuentra el producto', 404);
    }

    private function validateRequest($request){
        return $request->validate([
        'nombre' => 'required|string',
        'cantidad' => 'required|numeric',
        'precio'=> 'required|numeric',
        'descripcion' => 'required|string'
    ]);
}
}
