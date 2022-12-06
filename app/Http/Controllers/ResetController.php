<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Usuario;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ResetController extends Controller
{
    //
    public function codigo(Request $request){
        $data = $this->validateRequest($request);

        $usuario = User::where('email', $request['email'])->first();

        if(!$usuario) {
            return response([
                'message' => 'Correo no registrado'
                ]);
            }
        $randomStr = Str::random(8);

        $usuario->update(["codigo_verificacion"=>$randomStr]);

        return response([
            'message' => 'Credenciales correctas se a mandado el codigo ' . $randomStr . ''
            ]);
    }

    public function cambiar(Request $request){
        $data = $this->validateRequest($request);
        $usuario = User::where('email', $request['email'])
            ->where('codigo_verificacion', $request['codigo_verificacion'])
            ->first();

        if($usuario) {

            $usuario->update(["codigo_verificacion"=>null,"password"=>$request['password']]);

            return response([
            'message' => 'Se ha actualizado'
            ]);
        } else {
            return response([
            'message' => 'El correo o codigo no existen'
            ]);
        }
    }
    ////////

    private function validateRequest($request){
        return $request->validate([
            'email' => 'required|string|email',
        ]);
    }

}
