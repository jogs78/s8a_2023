<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SistemaController;
use App\Http\Controllers\IdiomaControler;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\UsuarioController;


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

Route::get('redierct', function () {
    return redirect()->route('otraruta')->with('variable','algo');
});

Route::get('otro', function () {
    dump(session()->all());
    echo "otro";
})->name("otraruta");

Route::get('/', function () {
     return view("welcome");
});
Route::get('login', [SistemaController::class, 'entrada'])->name("login");
Route::get('registrar', [SistemaController::class, 'registrar'])->name('registrar');
Route::post('registrar', [SistemaController::class, 'registrar2'])->name('registrar2');
Route::post('validar', [SistemaController::class, 'validar'])->name('validar')->middleware("web");
Route::get('ropciones', [SistemaController::class, 'mopciones'])->name('nopciones')->middleware("web");

Route::get('seleccionar', [IdiomaControler::class, 'seleccionar'])->name("seleccionar");
Route::post('procesar', [IdiomaControler::class, 'procesar'])->name("procesar");

Route::get('saludar', [IdiomaControler::class, 'saludar'])->name("saludar")->middleware("checaridioma");
Route::get('despedir', [IdiomaControler::class, 'despedir'])->name("despedir")->middleware("checaridioma");

Route::get('salir', [SistemaController::class, 'salir'])->name('salida');


Route::get('paquetes',[PaqueteController::class, 'index'])->name('paquetes.index');
Route::get('crearpaquete',[PaqueteController::class, 'create'])->name('paquetes.create');
Route::post('guardar',[PaqueteController::class, 'store'])->name('paquetes.store');
Route::get('actualizar/{cual?}',[PaqueteController::class, 'edit'])->name('paquetes.edit');
Route::put('actualizar/{cual?}',[PaqueteController::class, 'update'])->name('paquetes.update');
Route::delete('borrar/{cual?}',[PaqueteController::class, 'destroy'])->name('paquetes.destroy');
//comentarios xxxxxxxxx
Route::resource('servicios', PaqueteController::class);
Route::resource('estudiantes',EstudianteController::class);
Route::resource('personas',UsuarioController::class);

