<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function PrimerEquipo()
    {
        return view('equipos.PrimerEquipo');
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

    
}
