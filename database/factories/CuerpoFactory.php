<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CuerpoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = CuerpoModel ::class;
    public function definition(): array
    {
        return [
            'Cod_ce'=> $this->faker->randomNumber(),
            'Denom_ce'=> $this->faker->randomNumber(),
        ];
    }
}
