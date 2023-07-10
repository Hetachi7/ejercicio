<?php

namespace Database\Factories;

use App\Models\CampaniaModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CompaniasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=CampaniaModel::class;
    public function definition()
    {
        return [
            'Num_com'=> $this->faker->randomNumber(),
            'ActiP_com'=> $this->faker->sentence(),
        ];
    }
}
