<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    //
    public function obtener(){
        $companies= Companies::all();

        $companies = Companies::where('numero_empleados','>',1695036412)->where('id','>',7)->get();

        return $companies;

    }

}
