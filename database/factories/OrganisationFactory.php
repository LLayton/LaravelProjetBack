<?php

namespace Database\Factories;

use App\Models\Organisation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrganisationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Organisation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->slug(),
            'tel' => $this->faker->unique()->phoneNumber(),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->unique()->address(),
            'type' => $this->faker->randomElement(["school", "organisation", "government"]),
        ];
    }
    
}
function typeAlea(){
    $chiffre=rand(0,2);
    switch ($chiffre) 
    {
        case 0:
            return "school";
            break;        
        case 1:
            return "client";
            break;        
        case 2:
            return "government";
            break;
        default:
            return "ursaf";
            break;
    }
}