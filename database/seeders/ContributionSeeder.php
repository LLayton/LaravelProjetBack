<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContributionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Contribution::factory(10)->create();
    }
}
