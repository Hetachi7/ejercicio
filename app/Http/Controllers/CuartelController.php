<?php

namespace App\Http\Controllers;

use App\Models\CuartelModel;
use Illuminate\Http\Request;

class CuartelController extends Controller
{
    
  public function index(){
           return view("Formulario2");
   }
  public function guardar(Request $request)
   {
            $datosFormulario = new CuartelModel();
            $datosFormulario->cod_c = $request->input('cod_c');
            $datosFormulario->nom_c = $request->input('nom_c');
            $datosFormulario->Ubic_c = $request->input('Ubic_c');
            $datosFormulario->save();
            return redirect('/formulario')->with('success', 'Datos del formulario guardados correctamente.');
    }
    
}
