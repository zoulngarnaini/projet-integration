<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numero' => fake()->name(),
            'origine' => fake()->name(),
            'robe' => fake()->name(),
            'date_nais' => fake()->date(),
            'date_arriv' => fake()->date(),
            'description' => fake()->paragraph(),
            'race' => fake()->name(),
            'capacite_prod' => fake()->name(),
            'photo'=> fake()->name(),
        ];
    }
}
