<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class AdminController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
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

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return redirect()->route('admin.index')->with('success', 'Cliente eliminado correctamente');
    }

    

}
