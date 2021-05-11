<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugadores extends Model
{
    use HasFactory;

    protected $table = 'jugadores';

    protected $fillable = ['nombre', 'edad', 'fecha_nacimiento', 'nacionalidad', 'sexo', 'telefono', 'correo', 'direccion',  'posicion', 'partidos', 'goles', 'categoria_jugador', 'foto'];
}
