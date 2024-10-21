<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiControlador extends Controller
{
    public function mostrarVista()
    {
        $valor = "Hola desde el controlador";

        return view('miVista', compact('valor'));
    }
}
