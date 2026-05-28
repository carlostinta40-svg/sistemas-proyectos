<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Proyecto;


class Etiqueta extends Model
{
    use HasFactory;

    protected $table = 'etiquetas';

    protected $fillable = [
        'nombre'
    ];

    public function proyectos()
    {
        return $this->belongsToMany(
            Proyecto::class,
            'etiqueta_proyecto',
            'etiqueta_id',
            'proyecto_id'
        );
    } 

}
