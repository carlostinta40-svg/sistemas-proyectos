<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User; 
use App\Models\Comentario; 
use App\Models\Categoria; 
use App\Models\Etiqueta;

class Proyecto extends Model
{
    use HasFactory;

    protected $table = 'proyectos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'user_id'
    ];

    // Un proyecto pertenece a un usuario
    public function usuario()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    // Un proyecto tiene muchas categorías
    public function categorias()
    {
        return $this->belongsToMany(
            Categoria::class,
            'categoria_proyecto',
            'proyecto_id',
            'categoria_id'
        );
    }

    // Un proyecto tiene muchas etiquetas
    public function etiquetas()
    {
        return $this->belongsToMany(
            Etiqueta::class,
            'etiqueta_proyecto',
            'proyecto_id',
            'etiqueta_id'
    );
}

    // Un proyecto puede tener muchos comentarios
    public function comentarios()
    {
        return $this->morphMany(
            Comentario::class,
            'comentable'
        );
    }
}
