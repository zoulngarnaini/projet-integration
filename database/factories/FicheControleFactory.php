<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FicheControle>
 */
class FicheControleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'symptome' => fake()->paragraph(),
            'diagnostique' => fake()->paragraph(),
            'traitement' => fake()->paragraph(),
            'date' => fake()->date(),
        ];
    }
}
