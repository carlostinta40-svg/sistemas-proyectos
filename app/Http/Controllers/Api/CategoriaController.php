<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\CategoriaResource;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    // LISTAR
    public function index()
    {
        $categorias = Categoria::all();

        return CategoriaResource::collection($categorias);
    }

    // GUARDAR
    public function store(Request $request)
    {
        $categoria = Categoria::create($request->all());

        return response()->json([
            'mensaje' => 'Categoría creada',
            'data' => $categoria
        ], 201);
    }

    // MOSTRAR UNO
    public function show(Categoria $categoria)
    {
        return new
        CategoriaResource($categoria);
    }

    // ACTUALIZAR
    public function update(Request $request, Categoria $categoria)
    {
        $categoria->update($request->all());

        return response()->json([
            'mensaje' => 'Categoría actualizada',
            'data' => $categoria
        ]);
    }

    // ELIMINAR
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();

        return response()->json([
            'mensaje' => 'Categoría eliminada'
        ]);
    }
}
