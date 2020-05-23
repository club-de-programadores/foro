<?php

namespace App\Http\Controllers;

use App\contactos;


use Illuminate\Http\Request;

class ContactosController extends Controller
{
    public function index(Request $request)
    {


        return view('contacto');
    }



    public function store(Request $request)
    {


      $contac = new contactos;
      $contac->name = $request['name'];
      $contac->email = $request['email'];
      $contac->comentario = $request['comentario'];
      $contac->save();


       return redirect('forums');



    }
}
