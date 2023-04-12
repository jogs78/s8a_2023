<?php

use Illuminate\Support\Facades\Route;

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


