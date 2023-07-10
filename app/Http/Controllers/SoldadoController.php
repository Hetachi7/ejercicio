<?php

namespace App\Http\Controllers;

use App\Models\SoldadoModel;
use Illuminate\Http\Request;

class SoldadoController extends Controller
{
    public function index(){
        return view("Formulario");
    }
    public function guardar(Request $request)
    {
        $datosFormulario = new SoldadoModel();
        $datosFormulario->cod_s = $request->input('cod_s');
        $datosFormulario->nom_s = $request->input('nom_s');
        $datosFormulario->apellidos = $request->input('apellidos');
        $datosFormulario->grados = $request->input('grados');
        $datosFormulario->cod_com1 = $request->input('cod_com1');
        $datosFormulario->cod_c2 = $request->input('cod_c2');
        $datosFormulario->save();
        return redirect('/formulario')->with('success', 'Datos del formulario guardados correctamente.');
}
}