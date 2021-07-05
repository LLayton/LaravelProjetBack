<?php

namespace Database\Factories;

use App\Models\Mission;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MissionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mission::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reference' => $this->faker->slug(),
            'title' => $this->faker->sentence,
            'comment' => $this->faker->paragraph(1),
            'deposit' => $this->faker->randomDigit(),
            'ended_at'=>now(),
            'organisation_id'=>\App\Models\Organisation::pluck('id')->random(),
        ];
    }
}
