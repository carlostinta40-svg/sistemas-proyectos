<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proyecto;
use App\Http\Requests\ProyectoRequest;
use App\Http\Resources\ProyectoResource;


class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos = Proyecto::with(
            'usuario',
            'categorias',
            'etiquetas',
            'comentarios'
        )->get();

        return ProyectoResource::collection($proyectos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProyectoRequest $request)
    {
        $proyecto = Proyecto::create([
                'nombre' => $request->nombre,

                'descripcion' => $request->descripcion,

                'fecha_inicio' => $request->fecha_inicio,

                'fecha_fin' => $request->fecha_fin,

                'user_id' => $request->user_id

            ]);
            if($request->has('categorias'))
            {
                $proyecto->categorias()->sync(
                $request->categorias
               );
            }

            if($request->has('etiquetas'))
            {
                $proyecto->etiquetas()->sync(
                $request->etiquetas
                );
            }
  
            return new
            ProyectoResource($proyecto);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $proyecto = Proyecto::with(
            'usuario',
            'categorias',
            'etiquetas',
            'comentarios'
        )->find($id);

        return new ProyectoResource($proyecto);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProyectoRequest $request, string $id)
    {
        $proyecto = Proyecto::find($id);

        $proyecto->update([

            'nombre' => $request->nombre,

            'descripcion' => $request->descripcion,

            'fecha_inicio' => $request->fecha_inicio,

            'fecha_fin' => $request->fecha_fin,

            'user_id' => $request->user_id

        ]);
        if($request->has('categorias'))
        {
            $proyecto->categorias()->sync(
            $request->categorias
            );
        }

        if($request->has('etiquetas'))
        {
            $proyecto->etiquetas()->sync(
            $request->etiquetas
            );
        }

        return new
        ProyectoResource($proyecto);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $proyecto = Proyecto::find($id);

        $proyecto->delete();

        return response()->json([
            'mensaje' => 'Proyecto eliminado correctamente'
        ]);
    }
}
