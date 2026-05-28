<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comentario extends Model
{
    use HasFactory;

    protected $table = 'comentarios';

    protected $fillable = [
        'comentario',
        'comentable_id',
        'comentable_type'
    ];

    // El comentario puede pertenecer a Proyecto o Usuario
    public function comentable()
    {
        return $this->morphTo();
    }

}
