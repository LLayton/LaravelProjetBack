<?php

namespace Database\Factories;

use App\Models\Contribution;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ContributionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contribution::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price'=>random_int(0,50),
            'title'=> Str::random(10),
            'comment' => $this->faker->text(30),
            'organisation_id'=>\App\Models\Organisation::pluck('id')->random(),
        ];
    }
}
