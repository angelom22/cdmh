<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugadores extends Model
{
    use HasFactory;

    protected $table = 'jugadores';

    protected $casts = [
        'fecha_nacimiento' => 'datetime:d-m-Y',
    ];

    protected $fillable = ['nombre', 'edad', 'fecha_nacimiento', 'nacionalidad', 'sexo', 'telefono', 'correo', 'direccion',  'posicion', 'partidos', 'goles', 'categoria_jugador', 'foto'];

    // Relación uno a uno polimorfica
    public function imagen()
    {
        return $this->morphOne('App\Model\Imagen', 'imagen');
    }
}
