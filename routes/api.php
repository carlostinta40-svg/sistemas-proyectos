<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ProyectoController;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\EtiquetaController;

Route::apiResource('proyectos', ProyectoController::class);

Route::apiResource('categorias', CategoriaController::class);

Route::apiResource('etiquetas', EtiquetaController::class);