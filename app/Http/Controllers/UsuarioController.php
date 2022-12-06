<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Usuario;
use App\Models\User;

class UsuarioController extends Controller
{
    public function crear(Request $request){
        //$data = $request ->all();
        //validaciones
        $data= $this->validateRequest($request);
        $image_path = $request->file('image')->store('image', 'public');

        $data['image']= $image_path;
        $usuario = User::create($data);
        return response([
            'message'=>'se creo con exito el usuario',
            'id'=>$usuario['id'],
        ], 201);

    }



    public function editar($id, Request $request){
        $usuario=User::find($id);

        if(!$usuario){
            return response([
                'message'=> 'el usuario con el id ' .$id.' no existe en la bd'
            ],404);
        }
        return response([
            'message'=> 'El usuario se edito correctamente'
        ]);
    }
//buscar el usuario con el id
    public function eliminar($id){
        $usuario = User::find($id);
//validar que existe el usuario
        if(!$usuario){
            return response([
                'message'=>'el usario con el id' .$id. 'no existe en la bdd'
            ],404);
        }
        $usuario->delete();
        return response([
            'message' => "se elimino con exito"
        ]);
    }




    /*  public function obtener($expediente){
        return 'se edito' . $expediente;
    } */

    public function obtener(){

        $usuarios = User::all();
        return $usuarios;
        /* $usuarios = Usuario::where('edad','>',8)
        ->orderBy('edad','asc')
        ->orderBy('nombre','asc')
        ->get(); */
        /*obtener 1 solo usuario */
        /* $usuarios = Usuario::where('id',2)->first(); */

        /* $usuarios= Usuario::sum('edad');
        $usuarios = Usuario::select('nombre','email')->take(5)->get();

        $usuarios = Usuario::where('edad','>',0)
        ->where('edad','<',18)
        ->orderBy('edad','asc')
        ->get(); */
    }
    private function validateRequest($request){
        return $request->validate([

            'edad' => 'nullable|numeric',
            'name' => 'required|string',
            'email' => 'required|string|email',
            'password'=> 'required|string|min:8',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
    }
}
