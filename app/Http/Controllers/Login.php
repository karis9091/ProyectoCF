<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Login extends Controller
{

    public function login(Request $request){
        //$data = $request ->all();
        //validaciones
        $data= $this->validateRequest($request);
        $email = $request['email'];
        $password = $request['password'];
        $usuario = User::where('email', $email)
        ->where('password',$password)->first();

        if(!$usuario){
            return response([
                'message'=> 'el usuario con el '.$request['email'].' y password ingresado no existe en la base de datos',
                'user'=>$usuario
            ],404);
        }
        $token = $usuario-> createToken('token-user')->plainTextToken;
        return response([
            'message'=>'credenciales correctos',
            'email'=>$usuario['email'],
            'token'=>$token,
        ], 201);


    }


    private function validateRequest($request){
        return $request->validate([

            'email' => 'required|string|email',
            'password'=> 'required|string|min:8'
        ]);
    }


}
