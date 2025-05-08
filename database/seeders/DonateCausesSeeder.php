<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Causes;

class DonateCausesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Causes::factory()->count(15)->create();
    }
}
