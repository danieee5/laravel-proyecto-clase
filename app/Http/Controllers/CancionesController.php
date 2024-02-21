<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CancionesController extends Controller
{
    public function index()
    {
        $canciones = DB::table('canciones')->get();
        return view('canciones.index', ['canciones' => $canciones]);
    }
}

