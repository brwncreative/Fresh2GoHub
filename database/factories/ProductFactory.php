<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category' => fake()->name(),
            'tags' => fake()->name(),
            'provider' => fake()->name(),
            'item_name' => fake()->name(),
            'description' => fake()->paragraph(),
            'metric' => fake()->randomLetter(),
            'price' => fake()->numberBetween(5, 12),
        ];
    }
}
