<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuartelModel extends Model
{
    protected $table = 'create_cuartels_table'; // Reemplaza 'nombre_de_la_tabla' con el nombre real de tu tabla
    protected $fillable = ['cod_c', 'nom_c', 'Ubic_c'];
}
