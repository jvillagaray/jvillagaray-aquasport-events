<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    //
    public function create()
    {
        return view('web.registro');
    }

    public function store(Request $request)
    {
        // guardar registro

        return "Registro guardado";
    }
}
