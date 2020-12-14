<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\Vehiculo\VehiculoController;
use App\Http\Controllers\Propietario\PropietarioController;
use App\Http\Controllers\Conductor\ConductorController;

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

Route::get( 'escritorio',[DashboardController::class,'index'])->name('dashboard.index');
Route::get( 'perfil',[DashboardController::class,'perfil'])->name('dashboard.perfil');


Route::get( 'login',[loginController::class,'form_login'])->name('login.form_login');
Route::post( 'auth',[loginController::class,'auth'])->name('login.auth');

//vehiculos
Route::get('vehiculo',[VehiculoController::class,'index'])->name('vehiculo.index');
Route::get('vehiculo/create',[VehiculoController::class,'create'])->name('vehiculo.create');
Route::post('vehiculo',[VehiculoController::class,'store'])->name('vehiculo.store');
Route::get('vehiculo/{id}',[VehiculoController::class,'show'])->name('vehiculo.show');

Route::get('vehiculo/edit/{id}',[VehiculoController::class,'edit'])->name('vehiculo.edit');
Route::put('vehiculo/{id}',[VehiculoController::class,'update'])->name('vehiculo.update');
Route::delete('vehiculo/{id}',[VehiculoController::class,'destroy'])->name('vehiculo.destroy');

//Propietarios
Route::get('propietario',[PropietarioController::class,'index'])->name('propietario.index');
Route::get('propietario/create',[PropietarioController::class,'create'])->name('propietario.create');
Route::post('propietario',[PropietarioController::class,'store'])->name('propietario.store');
Route::get('propietario/{id}',[PropietarioController::class,'show'])->name('propietario.show');

Route::get('propietario/edit/{id}',[PropietarioController::class,'edit'])->name('propietario.edit');
Route::put('propietario/{id}',[PropietarioController::class,'update'])->name('propietario.update');
Route::delete('propietario/{id}',[PropietarioController::class,'destroy'])->name('propietario.destroy');

//Conductores
Route::get('conductor',[ConductorController::class,'index'])->name('conductor.index');
Route::get('conductor/create',[ConductorController::class,'create'])->name('conductor.create');
Route::post('conductor',[ConductorController::class,'store'])->name('conductor.store');
Route::get('conductor/{id}',[ConductorController::class,'show'])->name('conductor.show');

Route::get('conductor/edit/{id}',[ConductorController::class,'edit'])->name('conductor.edit');
Route::put('conductor/{id}',[ConductorController::class,'update'])->name('conductor.update');
Route::delete('conductor/{id}',[ConductorController::class,'destroy'])->name('conductor.destroy');
