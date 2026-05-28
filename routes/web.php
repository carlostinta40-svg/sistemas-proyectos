<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ProyectoController;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\EtiquetaController;

Route::get('/', function () {
    return view('welcome');
});


