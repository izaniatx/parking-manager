<?php

namespace App\Http\Controllers;
use App\Models\Coche;
use App\Models\User;

use Illuminate\Http\Request;

class CocheController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'user_mode' => 'required|in:existing,new',
            'matricula' => 'required|string|max:20',
            'marca' => 'required|string|max:50',
            'modelo' => 'required|string|max:50',
        ]);

        if ($request->user_mode === 'existing') {
            $request->validate([
                'user_id' => 'required|exists:users,id',
            ]);
            $user = User::find($request->user_id);
        }

        if ($request->user_mode === 'new') {
            $request->validate([
                'name' => 'required|string|max:255',
                'lastName' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
            ]);
            $user = User::create([
                'name' => $request->name,
                'lastName' => $request->lastName,
                'email' => $request->email,
            ]);
        }

        Coche::create([
            'matricula' => $request->matricula,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'user_id' => $user->id,
        ]);

        return redirect()->route('coches.index')->with('success', 'Coche creado correctamente');
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
