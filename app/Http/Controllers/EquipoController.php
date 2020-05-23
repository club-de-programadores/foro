<?php

namespace App\Http\Controllers;

use App\equipo;

use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index(Request $request)
    {
        $nombre = $request->get('nombre');

        $equipos = equipo::where('nombre','like',"%$nombre%")->orderBy('id')->paginate(9);
        return view('equipo',compact('equipos'));
    }
}
