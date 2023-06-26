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

}
