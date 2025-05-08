<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galleries;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Galleries::factory()->count(12)->create();
    }
}
