<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Galleries;
use App\Models\Events;

class GalleriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition():array
    {

        $event = Events::inRandomOrder()->first();

        return [
            'image' => 'images/' . fake()->image(public_path('images'), 1400, 1900, null, false),
            'activity' => $event->title,
        ];
    }
}
