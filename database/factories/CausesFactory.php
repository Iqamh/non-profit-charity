<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Causes;
use App\Models\User;

class CausesFactory extends Factory
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
            'description' => fake()->text(150),
            'image' => 'images/' . fake()->image(public_path('images'), 1500, 2000, null, false),
            'goals' => fake()->randomNumber(8),
            'start' => fake()->dateTimeBetween('now', '+30 days'),
            'end' => fake()->dateTimeBetween('+30 days', '+60 days'),
        ];
    }
}
