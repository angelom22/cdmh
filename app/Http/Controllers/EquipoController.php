<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Articulo;
use App\Model\Categoria;
use App\Model\Jugadores;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function PrimerEquipo()
    {
        $jugadores = Jugadores::where('categoria_jugador', '=', 'Primera')->simplepaginate(11);
        // dd($jugadores);
        $articulos = Articulo::where('categoria_id', '=', 2)->simplepaginate(3);
    
        return view('equipos.PrimerEquipo', compact('jugadores','articulos'));
    }

    public function EquipoFilial()
    {
        return view('equipos.EquipoFilial');
    }

    public function EquipoSub20()
    {

        return view('equipos.Sub20');
    }

    public function EquipoSub19()
    {
        return view('equipos.Sub19');
    }

    public function EquipoSub18()
    {
        return view('equipos.Sub18');
    }

    public function EquipoSub16()
    {
        return view('equipos.Sub16');
    }

    
}
