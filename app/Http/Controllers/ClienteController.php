<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /*public function insertar(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nombre = $request->input('nombre');
        $cliente->telefono = $request->input('telefono');
        $cliente->correo_electronico = $request->input('correo_electronico');
        $cliente->empresa = $request->input('empresa');
        $cliente->comentario = $request->input('comentario');
        $cliente->save();

        return "Cliente insertado correctamente";
    }*/

    public function store(Request $request)
    {
        // Validar los datos del formulario
        //dd('hola');
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:200',
            'telefono' => 'nullable|string|max:20',
            'correo_electronico' => 'required|email|unique:clientes|max:100',
            'empresa' => 'nullable|string|max:100',
            'comentario' => 'nullable|string|max:200',

        ]);

        // Crear un nuevo cliente
        $cliente = new Cliente();
        $cliente->nombre = $validatedData['nombre'];
        $cliente->telefono = $validatedData['telefono'];
        $cliente->correo_electronico = $validatedData['correo_electronico'];
        $cliente->empresa = $validatedData['empresa'];
        $cliente->comentario = $validatedData['comentario'];
        $cliente->save();
        //$mensaje = 'Cliente creado correctamente ¡Gracias!';



        // Redirigir o retornar una respuesta, según tus necesidades
        return 'Cliente creado correctamente';
        //return view('contact', compact('mensaje'));
        

    }

   
}
