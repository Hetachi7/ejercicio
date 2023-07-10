<?php

namespace Database\Factories;

use App\Models\ServiciosModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ServiciosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ServiciosModel ::class;
    public function definition()
    {
        return [
            'Cod_Ser'=> $this->faker->randomNumber(),
            'Acti_Ser1'=> $this->faker->randomNumber(),
        ];
    }
}
