<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;

    // Especificar la tabla si no sigue la convención de nombres (no es necesario si la tabla se llama 'archivos')
    //protected $table = 'archivos';

    // Definir los campos que se pueden llenar (asignación masiva)
    protected $fillable = ['ruta'];
}
