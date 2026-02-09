<?php

namespace App\Http\Controllers;
use App\Models\Coche;

use Illuminate\Http\Request;

class CocheController extends Controller
{

    public function store(Request $request)
    {
        $nuevoCoche = new Coche();
        $nuevoCoche->matricula = $request->input('matricula');
        $nuevoCoche->marca = $request->input('marca');
        $nuevoCoche->modelo = $request->input('modelo');
        $nuevoCoche->save();

        return redirect()->route('coches.index')->with('success', 'Coche añadido correctamente.');
    }

    public function destroy($id)
    {
        $coche = Coche::findOrFail($id);
        $coche->delete();

        return redirect()->route('coches.index')->with('success', 'Coche eliminado correctamente.');
    }

    public function create() 
    {
        $users = \App\Models\User::all();
        return view('create', compact('users'));
    }

    public function index() 
    {
        $coches = Coche::all();
        return view('lista', compact('coches'));
    }

    public function buscar(Request $request) 
    {
        $matricula = $request->input('matricula');
        $coches = Coche::where('matricula', 'LIKE', "%$matricula%")->get();
        
        return view('buscar', compact('coches'));
    }


}
