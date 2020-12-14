<?php

namespace App\Http\Controllers\Conductor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Conductor;


class ConductorController extends Controller
{

    public function index(){
        $conductores=Conductor::all();
        return view('modules.conductor.index',compact('conductores'));
    }

    public function create(){
        return view('modules.conductor.create');
    }

    public function store(Request $request){
        $conductores=Conductor::create($request->all());
        return redirect()->route('conductor.index');
    }

    public function show($id){
        $conductores=Conductor::find($id);
        return view('modules.conductor.show', compact('conductores'));
    }

    public function edit($id){
        $conductores=Conductor::find($id);
        return view('modules.conductor.edit', compact('conductores'));
    }
//_________________

    public function destroy($id){
        $conductores = Conductor::find($id)->delete();
        return redirect()->route('conductor.index');
    }

    public function update(Request $request, $id){
        $conductores = Conductor::find($id)->update($request->all());
        return redirect()->route('conductor.show', $id);
    }
}
