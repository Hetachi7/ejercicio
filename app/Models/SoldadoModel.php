<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoldadoModel extends Model
{
    protected $table = 'create_soldado_table'; 
    protected $fillable = ['Cod_s', 'Nom_s', 'Apellidos', 'Grados', 'Num_com1','Cod_ce1', 'cod_c2'];
}
