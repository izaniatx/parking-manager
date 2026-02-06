<?php

namespace App\Http\Controllers;
use App\Models\Coche;

use Illuminate\Http\Request;

class CocheController extends Controller
{
    public function index()
    {
        $coches = Coche::all();
        return view('coches.index', compact('coches'));
    }

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
}
