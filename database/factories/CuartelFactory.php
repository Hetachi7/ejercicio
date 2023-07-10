<?php

namespace Database\Factories;

use App\Models\CuartelModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CuartelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model= CuartelModel:: class;
    public function definition()
    {
        return [
            'Cod_c'=> $this->faker->randomNumber(),
            'Nom_c'=> $this->faker->name(),
            'Ubic_c'=> $this->faker->sentence(),
        ];
    }
}
