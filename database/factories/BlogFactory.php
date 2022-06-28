<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title"=>$this->faker->name(),
            "number"=>$this->faker->numberBetween(10,20),
            "name"=>$this->faker->name(),
            "user_id"=>$this->faker->numberBetween(1,5),

        ];
    }
}
