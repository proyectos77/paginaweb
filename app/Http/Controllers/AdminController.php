<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Archivo;

class AdminController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        $clientes = Cliente::paginate(20);
        $totalUsers = count($clientes);
        $usuarioMasFrecuente = $clientes->max('usuario_id'); // Supongamos que tienes un campo llamado 'usuario_id' en tu modelo Cliente

        // Calcular el porcentaje de usuarios que se registraron en el mes actual
        $clientesMesActual = $clientes->where('created_at', '>=', now()->startOfMonth());
        $porcentajeMesActual = ($clientesMesActual->count() / $totalUsers) * 100;

        return view('admin.index', compact('clientes', 'totalUsers', 'porcentajeMesActual', 'usuarioMasFrecuente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $data = $request->validate([
            'nombre' => 'required|string|max:200',
            'telefono' => 'nullable|string|max:20',
            'correo_electronico' => 'required|email|unique:clientes|max:100',
            'empresa' => 'nullable|string|max:100',
            'comentario' => 'nullable|string|max:200',
        ]);

        $cliente->update($data);

        return redirect()->route('admin.index')->with('success', 'Cliente actualizado correctamente');
    }
//funsion de eliminar cliente
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return redirect()->route('admin.index')->with('success', 'Cliente eliminado correctamente');
    }

        //funsion de subir archivo
        public function subir(Request $request)
        {
            // Validar el archivo
            $request->validate([
                'archivo' => 'required|mimes:pdf,doc,docx|max:2048',
            ]);
        
            // Guardar el archivo y obtener la ruta
            if ($request->file('archivo')) {
                $ruta_del_archivo = $request->file('archivo')->store('archivos');
        
                // Guardar la ruta del archivo en la base de datos
                $archivo = Archivo::create(['ruta' => $ruta_del_archivo]);

                // Redirigir a la vista 'about' con el mensaje de éxito
                return redirect()->route('admin.index')->with('success', 'Archivo subido correctamente.');
        
                // if ($archivo) {
                //     // Redirigir con mensaje de éxito
                //     return redirect()->route('about')->with('success', 'Archivo subido correctamente.');
                // } else {
                //     // Si no se guarda, redirigir con mensaje de error
                //     return redirect()->back()->with('error', 'Hubo un problema al guardar el archivo en la base de datos.');
                // }
            }
        
            // Si llegamos aquí, significa que no se subió el archivo correctamente
            return redirect()->back()->with('error', 'Hubo un problema al subir el archivo.');
        }
        

 // Método para mostrar la vista 'about'
 public function about()
 {
     // Obtener el último archivo subido
     $archivo = Archivo::latest()->first(); // Esto obtiene el último archivo subido
     //$archivos = Archivo::all(); // O cualquier otra consulta que necesites

     return view('about', compact('archivo')); // Pasa la variable a la vista
 }
        

}
