<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Causes;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Causes>
 */
class CausesFactory extends Factory
{
    protected $model = Causes::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Get a random user from the database
        $user = User::inRandomOrder()->first();

        // Determine the creator based on usertype (0 for admin, 1 for user)
        $creator = $user->usertype == 0 ? 'Admin' : $user->name;

        return [
            'title' => fake()->word(),
            'description' => fake()->paragraph(),
            'goals' => fake()->randomNumber(6),
            'start' => fake()->dateTimeBetween('now', '+30 days'),
            'end' => fake()->dateTimeBetween('start', '+30 days'),
            'creator' => $creator,
        ];
    }
}
