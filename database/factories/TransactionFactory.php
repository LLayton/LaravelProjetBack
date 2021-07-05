<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'source_type'=>\App\Models\Contribution::pluck('id')->random(),
            'source_id'=>\App\Models\Organisation::pluck('id')->random(),
            'price' => $this->faker->randomDigit(),
            'paid_at' => now(),
        ];
    }
}