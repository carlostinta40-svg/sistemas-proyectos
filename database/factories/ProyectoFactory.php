<?php

namespace Database\Factories;

use App\Models\Proyecto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Proyecto>
 */
class ProyectoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->sentence(3),

            'descripcion' => fake()->paragraph(),

            'fecha_inicio' => fake()->date(),

            'fecha_fin' => fake()->date(),

            'user_id' => \App\Models\User::inRandomOrder()->first()?->id?? \App\Models\User::factory()->create()->id
        ];
    }
}
