<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contacto;

class Contacto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'telefono',
        'correo_electronico',
        'empresa',
        'comentario',
    ];
}
