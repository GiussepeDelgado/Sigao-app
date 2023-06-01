<?php

namespace App\Http\Controllers\vehiculo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\vehiculo;

class RegisterVehiculoController extends Controller
{
    public function show(){
        return view('vehiculo.register');

    } 
    public function create(Request $request){

        $vehiculo = vehiculo::create($request->only(['empresa', 'placa', 'id_propietario', 'id_chofer','numero_municipal', 'estado_inspeccion', 'fecha_inspeccion', 'curso_vial', 'estado_credencial', 'fecha_credencial', 'estado']));
        return redirect('/')->with('success','Se Registro existosamente');
    }
}