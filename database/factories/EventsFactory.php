<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Events;

class EventsFactory extends Factory
{
    protected $model = Events::class;
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
            'description' => fake()->paragraph(),
            'start' => fake()->dateTimeBetween('now', '+30 days'),
            'end' => fake()->dateTimeBetween('start', '+30 days')
        ];
    }
}
