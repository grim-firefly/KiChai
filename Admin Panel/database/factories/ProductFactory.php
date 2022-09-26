<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>fake()->name(),
            'category_id'=> 12,
            'price'=> fake()->randomFloat(1,200,3000),
            'quantity'=> fake()->randomDigit(),
            'description'=> fake()->text(200),
            'product_img' => fake()->image(),
            
        ];
    }
}
