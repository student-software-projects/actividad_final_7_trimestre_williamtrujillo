<?php

namespace App\Http\Controllers\Vehiculo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehiculo;
use App\Models\Conductor;
use App\Models\Propietario;

class VehiculoController extends Controller
{
    public function index(){
        $vehiculos=Vehiculo::all();
        $conductores=Conductor::all();
        $propietarios=Propietario::all();
        return view('modules.vehiculo.index',compact('vehiculos','conductores','propietarios'));
    }

    public function create(){

        $vehiculos=Vehiculo::all();
        $conductores=Conductor::all();
        $propietarios=Propietario::all();
        return view('modules.vehiculo.create',compact('vehiculos','conductores','propietarios'));
    }

    public function show($id){
        // SELECT * FROM entity WHERE ID = ? 111  FIND
        $v=Vehiculo::find($id);
        $vehiculos=Vehiculo::all();
        $conductores=Conductor::all();
        $propietarios=Propietario::all();
        return view('modules.vehiculo.show',compact('v'));
    }


    public function store(Request $request){

        $placa = $request->input('placa');
        $color = $request->input('color');
        $marca = $request->input('marca');
        $tp_vehiculo = $request->input('tp_vehiculo');
        $pro_id = $request->input('propietario_id');
        $con_id = $request->input('conductor_id');

        Vehiculo::create(
            [
                'placa'=>$placa,
                'color'=>$color,
                'marca'=>$marca,
                'tp_vehiculo'=>$tp_vehiculo,
                'fk_propietarios'=>$pro_id,
                'fk_conductores'=>$con_id
            ]
        );
        return redirect()->route('vehiculo.index')->with('inicio', 'Registro vehiculo de manera exitosa');
    }

    public function destroy($id){
        $vehiculos = Vehiculo::find($id)->delete();
        return redirect()->route('vehiculo.index')->with('inicio', 'Elimino vehiculo');
    }

    public function edit($id){
        $v = Vehiculo::find($id);
        $vehiculos = Vehiculo::find($id);
        $conductores=Conductor::all();
        $propietarios=Propietario::all();
        return view('modules.vehiculo.edit', compact('propietarios','conductores','vehiculos', 'v'));
    }

    public function update(Request $request, $id){

        $placa = $request->input('placa');
        $color = $request->input('color');
        $marca = $request->input('marca');
        $tp_vehiculo = $request->input('tp_vehiculo');
        $pro_id = $request->input('propietario_id');
        $con_id = $request->input('conductor_id');

        $vehiculos = Vehiculo::find($id)->update([
            'placa'=>$placa,
            'color'=>$color,
            'marca'=>$marca,
            'tp_vehiculo'=>$tp_vehiculo,
            'fk_propietarios'=>$pro_id,
            'fk_conductores'=>$con_id
        ]);
        return redirect()->route('vehiculo.index');
    }
}
