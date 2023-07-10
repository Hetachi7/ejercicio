<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SoldadoModel;

class SoldadosTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() 
    {
     SoldadoModel::factory()->count(50)->create();
    }
}
