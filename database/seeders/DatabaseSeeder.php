<?php

namespace Database\Seeders;

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
        \App\Models\Organisation::factory(10)->create();
         \App\Models\User::factory(10)->create();
         \App\Models\Mission::factory(10)->create();
         \App\Models\MissionLine::factory(10)->create();
         \App\Models\Contribution::factory(10)->create();
         \App\Models\Transaction::factory(10)->create();

    }
}

