<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proyecto;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Etiqueta;

class ProyectoSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(50)->create();

        Proyecto::factory(100)->create()->each(function ($proyecto) {

            $proyecto->categorias()->attach(
                Categoria::inRandomOrder()
                    ->take(rand(1,3))
                    ->pluck('id')
            );

            $proyecto->etiquetas()->attach(
                Etiqueta::inRandomOrder()
                    ->take(rand(1,3))
                    ->pluck('id')
            );

        });
    }
}
