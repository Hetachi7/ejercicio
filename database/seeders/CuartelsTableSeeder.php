<?php

namespace Database\Seeders;

use App\Models\CuartelModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CuartelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CuartelModel::factory()->count(50)->create();
    }
}
