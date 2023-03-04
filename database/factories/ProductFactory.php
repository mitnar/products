<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(),
            'code' => fake()->numerify(),
            'color' => fake()->safeColorName(),
            'price' => fake()->randomFloat(2),
            'size' => fake()->randomNumber(2, true),
            'description' => fake()->text()
        ];
    }
}
