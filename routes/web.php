<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

/* 
   Route::get('/', function () {
        return view('welcome');
        echo "<a href='" . route('saludos') . "'>Saludo</a>"; //Se llama el nombre de la ruta
    }); 

   (? o ?? para que sea nulo)

   Ruta con nombre:

    Route::get('saludo/{nombre?}', function ($nombre = "Invitado"){
        return "Saludos " .$nombre;
    })->name('saludos'); 
*/