<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lab>
 */
class LabFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'lab_no'=>fake()->randomDigit(),
            'no_of_pc'=> fake()->randomDigit(),
            'capacity'=>fake()->randomDigit(10,30),
            'type'=>'Hello'

        ];
    }
}
