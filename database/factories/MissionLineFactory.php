<?php

namespace Database\Factories;

use App\Models\MissionLine;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MissionLineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MissionLine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> Str::random(10),
            'unity'=>"$",    
            'quantity'=>rand(0,50),
            'price'=>rand(0,50),
            'mission_id'=>\App\Models\Mission::pluck('id')->random(),
        ];
    }
}
