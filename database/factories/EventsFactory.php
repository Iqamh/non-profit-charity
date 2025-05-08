<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Events;

class EventsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition():array
    {
        return [
            'title' => fake()->word(),
            'address' => fake()->address(),
            'description' => fake()->text(150),
            'image' => 'images/' . fake()->image(public_path('images'), 1600, 2100, null, false),
            'start' => fake()->dateTimeBetween('now', '+30 days'),
            'end' => fake()->dateTimeBetween('+30 days', '+60 days')
        ];
    }
}
