<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
        
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:200',
            'telefono' => 'required|string|max:20', // Ahora es obligatorio
            'correo_electronico' => 'required|email|unique:clientes|max:100',
            'empresa' => 'required|string|max:100', // Ahora es obligatorio
            'comentario' => 'required|string|max:200', // Ahora es obligatorio
        ]);

        // Crear un nuevo cliente
        $cliente = new Cliente();
        $cliente->nombre = $validatedData['nombre'];
        $cliente->telefono = $validatedData['telefono'];
        $cliente->correo_electronico = $validatedData['correo_electronico'];
        $cliente->empresa = $validatedData['empresa'];
        $cliente->comentario = $validatedData['comentario'];
        

        if(!$cliente->save()){
            Alert::error('Error', 'Ocurrió un error al hacer el registro en la base de datos');
        } else {
            Alert::success('Guardado', 'El mensaje se envió con éxito. Nos pondremos en contacto en las próximas horas.');
        }
    
        return redirect()->route('contact');
    }
   
}
