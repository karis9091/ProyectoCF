<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Login;
use App\Http\Controllers\producto;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\AssetContoller;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EscuelaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EstudianteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/usuarios',[UsuarioController::class,'crear']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});





Route::get('/despedida', function (){
    return 'despedida';
});

Route::post('/usuarios', function (){
    return 'se creo un usuario';
});

Route::get('/estudiante',[EstudianteController::class,'obtener']);
Route::get('/estudianteFT',[EstudianteController::class,'obtener2']);
Route::get('/estudianteMF',[EstudianteController::class,'obtener3']);
Route::get('/estudianteFF',[EstudianteController::class,'obtener4']);
Route::get('/estudianteasc',[EstudianteController::class,'ordenar']);

Route::get('/docente/{matricula}',[DocenteController::class,'obtener']);
Route::get('/companies',[CompaniesController::class,'obtener']);
Route::get('/usuarios/{expediente}',[UsuarioController::class,'obtener']);
Route::get('/usuarios',[UsuarioController::class,'obtener']);
Route::post('/usuarios',[UsuarioController::class,'crear']);

Route::put('/usuarios',[UsuarioController::class,'editar']);

Route::delete('/usuarios',[UsuarioController::class,'delete']);

Route::post('/login',[Login::class,'login']);
Route::get('/ventas',[VentaController::class,'obtener']);

    Route::post('/ventas',[VentaController::class,'crear']);
    Route::put('/ventas/{id}',[VentaController::class,'editar']);
    Route::delete('/ventas/{id}',[VentaController::class,'eliminar']);

Route::middleware('auth:sanctum')->group(function () {
    //todo esta protegido
    Route::get('/usuarios/{id}',[UsuarioController::class,'obtener']);
    Route::post('/usuarios',[UsuarioController::class,'crear']);
    Route::put('/usuarios/{id}',[UsuarioController::class,'editar']);
    Route::delete('/usuarios/{id}',[UsuarioController::class,'eliminar']);
    Route::put('/verification',[ResetController::class,'codigo']);
    Route::put('/change',[ResetController::class,'cambiar']);


    Route::get('/productos',[ProductController::class,'obtener']);
    //Route::get('/productos/{id}',[ProductController::class,'obtenerUnoSolo']);
    Route::post('/productos',[ProductController::class,'crear']);
    Route::put('/productos/{id}',[ProductController::class,'editar']);
    Route::delete('/productos/{id}',[ProductController::class,'eliminar']);

    Route::get('/ventas',[VentaController::class,'obtener']);



    Route::post('/ventas',[VentaController::class,'crear']);
    Route::put('/ventas/{id}',[VentaController::class,'editar']);
    Route::delete('/ventas/{id}',[VentaController::class,'eliminar']);

});










