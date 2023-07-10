<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('_soldados_', function (Blueprint $table) {
            $table->id();
            $table->Cod_S();
            $table->Nom_s();
            $table->Apellidos();
            $table->Grados();
            $table->Cod_ce1();
            $table->Num_com1();
            $table->cod_c2();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_soldados_');
    }
};
