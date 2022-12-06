<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{

    public function obtener(){
        $estudiantesM = Estudiante::where('genero', 'male')->get();
        $estudiantesF = Estudiante::where('genero', 'female')->get();

        $estudiantesMF = Estudiante::where('genero', 'female')
            ->where('becado', 'false')->get();
        $estudiantesFF = Estudiante::where('genero', 'male')
            ->where('becado', 'false')->get();

        $estudiantesasc = Estudiante::orderby('fecha_de_inscripcion', 'asc')->get();
        $estudiantesdesc = Estudiante::orderby('fecha_de_inscripcion', 'desc')->get();

        return response([
            'estudiantesfemeninos'=> count($estudiantesF),
            'estudiantesmasculinos'=> count($estudiantesM),
            'estudiantesMF'=> count($estudiantesMF),
            'estudiantesFF'=> count($estudiantesFF),
            'asc'=> ($estudiantesasc),
            'desc'=> ($estudiantesdesc),
        ]);
    }
    //
    /* public function obtener(){
        $estudiante= Estudiante::all();

        $estudiante = Estudiante::where('genero','male')->where('becado','true')->get();

        return $estudiante;

    }

    public function obtener2(){
        $estudiante= Estudiante::all();

        $estudiante = Estudiante::where('genero','female')->where('becado','true')->get();

        return $estudiante;

    }

    public function obtener3(){
        $estudiante= Estudiante::all();

        $estudiante = Estudiante::where('genero','male')->where('becado','false')->get();

        return $estudiante;

    }

    public function obtener4(){
        $estudiante= Estudiante::all();

        $estudiante = Estudiante::where('genero','female')->where('becado','false')->get();

        return $estudiante;

    }

    public function ordenar(){
        $estudiante= Estudiante::all();

        return response([
            'total_masculinos'=>$estudiante
            ->orderBy('fecha_de_inscripcion','asc')
            ->get()
        ]
        );

    } */

}


