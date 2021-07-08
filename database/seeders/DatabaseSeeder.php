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
        \App\Models\Organisation::factory(15)->create();
         \App\Models\User::factory(15)->create();
         \App\Models\Mission::factory(15)->create();
         \App\Models\MissionLine::factory(15)->create();
         \App\Models\Contribution::factory(15)->create();
         \App\Models\Transaction::factory(15)->create();

    }
}

