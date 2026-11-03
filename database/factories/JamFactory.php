<?php

namespace Database\Factories;

use App\Models\Jam;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Jam>
 */
class JamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['Classic', 'Sport', 'Chronograph', 'Diver', 'Minimalist', 'Pilot']).' '.fake()->numerify('###'),
            'brand' => fake()->randomElement(['Casio', 'Seiko', 'Citizen', 'Orient', 'Fossil', 'Alexandre Christie']),
            'category' => fake()->randomElement(['Quartz', 'Automatic', 'Digital', 'Solar']),
            'price' => fake()->numberBetween(2, 50) * 100000,
            'stock' => fake()->numberBetween(0, 100),
            'description' => fake()->paragraph(),
        ];
    }
}
