<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cancion;

class CancionesController extends Controller
{
    public function index()
{
    $canciones = Cancion::all();
    return view('canciones.index', compact('canciones'));
}

public function create()
{
    return view('canciones.create');
}

public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'autor' => 'required',
        'genero' => 'required',
        'anio' => 'required|digits:4',
    ]);

    Cancion::create($request->all());

    return redirect()->route('canciones.index')
                     ->with('success', 'Canción guardada correctamente.');
}

public function show(Cancion $cancion)
{
    return view('canciones.show', compact('cancion'));
}

public function edit(Cancion $cancion)
{
    return view('canciones.edit', compact('cancion'));
}

public function update(Request $request, Cancion $cancion)
{
    $request->validate([
        'nombre' => 'required',
        'autor' => 'required',
        'genero' => 'required',
        'anio' => 'required|digits:4',
    ]);

    $cancion->update($request->all());

    return redirect()->route('canciones.index')
                     ->with('success', 'Canción actualizada correctamente.');
}


public function destroy(Cancion $cancion)
{
    $cancion->delete();

    return redirect()->route('canciones.index')
                     ->with('success', 'Canción eliminada correctamente.');
}

}
