<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactosController extends Controller
{
    public function index(Request $request)
    {
        return view('contacto');
    }
}
