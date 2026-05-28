<?php

namespace Database\Factories;

use App\Models\Comentario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Comentario>
 */
class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comentario' => fake()->sentence(),

            'comentable_id' => \App\Models\Proyecto::inRandomOrder()->first()?->id,

            'comentable_type' => \App\Models\Proyecto::class
        ];
    }
}
