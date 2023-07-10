<?php

namespace Database\Factories;

use App\Models\SoldadoModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SoldadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = SoldadoModel ::class;

    public function definition()
    {
        return [
            'Cod_s'=> $this->faker->sentence(),
            'Nom_s'=> $this->faker->name(),
            'Apellidos'=> $this->faker->sentence(),
            'Grados'=> $this->faker->randomNumber(),
            'Cod_ce1'=> $this->faker->randomNumber(),
            'Num_com1'=> $this->faker->randomNumber(),
            'Cod_c2'=> $this->faker->randomNumber(),
      
        ];
    }
}
