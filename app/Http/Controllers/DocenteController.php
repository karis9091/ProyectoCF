<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    //
    public function obtener($matricula)
    {

        $docente =Docente::find($matricula);
        return $docente;
    }


}
