<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Events;

class CharityEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Events::factory()->count(12)->create();
    }
}
