<?php

namespace Database\Seeders;

use App\Models\Smile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Smile::factory(4)->create();
        // \App\Models\User::factory(10)->create();
    }
}
