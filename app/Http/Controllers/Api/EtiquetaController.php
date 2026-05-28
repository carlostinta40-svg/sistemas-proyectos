<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Etiqueta;
use App\Http\Resources\EtiquetaResource;
use Illuminate\Http\Request;

class EtiquetaController extends Controller
{
    public function index()
    {
        $etiquetas = Etiqueta::all();

        return EtiquetaResource::collection($etiquetas);
    }

    public function store(Request $request)
    {
        $etiqueta = Etiqueta::create($request->all());

        return new EtiquetaResource($etiqueta);
    }

    public function show(Etiqueta $etiqueta)
    {
        return new EtiquetaResource($etiqueta);
    }

    public function update(Request $request, Etiqueta $etiqueta)
    {
        $etiqueta->update($request->all());

        return new EtiquetaResource($etiqueta);
    }

    public function destroy(Etiqueta $etiqueta)
    {
        $etiqueta->delete();

        return response()->json([
            'message' => 'Etiqueta eliminada correctamente'
        ]);
    }
}