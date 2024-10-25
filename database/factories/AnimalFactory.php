<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Animal;

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
            'name' => fake()->name(),
            'color' => fake()->colorName(),
            'birthday' => fake()->dateTimeBetween('-10 years', '2023-01-01')->format('Y-m-d'),
            'deathday' => fake()->boolean(20) ? fake()->dateTimeBetween('-3 years', '2024-10-20')->format('Y-m-d') : null
        ];
    }
}
