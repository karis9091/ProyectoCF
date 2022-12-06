<?php

use App\Http\Livewire\OficinaIndex;
use App\Http\Livewire\ReservasEdit;
use App\Http\Livewire\ReservasIndex;
use App\Http\Livewire\EmpleadosIndex;
use App\Http\Livewire\OficinasCreate;
use App\Http\Livewire\OficinasEditar;
use App\Http\Livewire\ReservasCreate;
use App\Http\Livewire\VehiculosIndex;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\EmpleadosCreate;
use App\Http\Livewire\EmpleadosEditar;
use App\Http\Livewire\VehiculosCreate;
use App\Http\Livewire\VehiculosEditar;
use App\Http\Livewire\OficinasEliminar;
use App\Http\Livewire\ReservasEliminar;
use App\Http\Controllers\AssetContoller;
use App\Http\Livewire\EmpleadosEliminar;
use App\Http\Livewire\OficinasConsultar;
use App\Http\Livewire\ReservasConsultar;
use App\Http\Livewire\VehiculosEliminar;
use App\Http\Livewire\EmpleadosConsultar;
use App\Http\Livewire\VehiculosConsultar;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/asset',[AssetContoller::class,'index']);
/*Dashboard*/
Route::get('/oficina',OficinaIndex::class);
Route::get('/vehiculos',VehiculosIndex::class);
Route::get('/reservas',ReservasIndex::class);
Route::get('/empleados',EmpleadosIndex::class);
/*Crud de oficinas*/
Route::get('/oficinaCreate',OficinasCreate::class);
Route::get('/oficina/{id}',OficinasConsultar::class);
Route::get('/oficinaEdit/{id}',OficinasEditar::class);
Route::get('/oficinaEliminar/{id}',OficinasEliminar::class);
/*Crud de vehiculos*/
Route::get('/vehiculosCreate',VehiculosCreate::class);
Route::get('/vehiculo/{id}',VehiculosConsultar::class);
Route::get('/vehiculoEdit/{id}',VehiculosEditar::class);
Route::get('/vehiculoEliminar/{id}',VehiculosEliminar::class);
/*Crud de Reservas*/
Route::get('/reservasCreate',ReservasCreate::class);
Route::get('/reservas/{id}',ReservasConsultar::class);
Route::get('/reservasEdit/{id}',ReservasEdit::class);
Route::get('/reservasEliminar/{id}',ReservasEliminar::class);
/*Crud de Empleados*/
Route::get('/empleadosCreate',EmpleadosCreate::class);
Route::get('/empleados/{id}',EmpleadosConsultar::class);
Route::get('/empleadosEdit/{id}',EmpleadosEditar::class);
Route::get('/empleadosEliminar/{id}',EmpleadosEliminar::class);
?>
