<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Proyecto;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    // Una categoría puede pertenecer a muchos proyectos
    public function proyectos()
    {
        return $this->belongsToMany(
            Proyecto::class,
            'categoria_proyecto',
            'categoria_id',
            'proyecto_id'
        );
    }

}
