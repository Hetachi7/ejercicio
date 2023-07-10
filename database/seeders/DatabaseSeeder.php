<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SoldadoModel;
use App\Models\ServiciosModel;
use App\Models\CuerpoModel;
use App\Models\CuartelModel;
use App\Models\CompaniasModel;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
       $this->call([
        SoldadosTablaSeeder::class,
        ServiciosTableSeeder::class,
        CuerposTableSeeder::class,
        CuartelsTableSeeder::class,
        CompaniasTableSeeder::class,
       ]);
    }
}
