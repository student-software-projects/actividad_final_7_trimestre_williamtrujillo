<?php

namespace App\Http\Controllers\Propietario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Propietario;

class PropietarioController extends Controller
{
    public function index(){
        $propietarios=Propietario::all();
        return view('modules.propietario.index',compact('propietarios'));
    }

    public function create(){
        return view('modules.propietario.create');
    }

    public function store(Request $request){
        $propietarios=Propietario::create($request->all());
        return redirect()->route('propietario.index');
    }

    public function show($id){
        $propietarios=Propietario::find($id);
        return view('modules.propietario.show', compact('propietarios'));
    }

    public function edit($id){
        $propietarios=Propietario::find($id);
        return view('modules.propietario.edit', compact('propietarios'));
    }


    public function destroy($id){
        $propietarios = Propietario::find($id)->delete();
        return redirect()->route('propietario.index');
    }

    public function update(Request $request, $id){
        $propietarios = Propietario::find($id)->update($request->all());
        return redirect()->route('propietario.show', $id);
    }
}
