<?php

namespace App\Traits;

use Illuminate\Http\Request;
use App\Model\Categoria;
use App\Model\Galeria;

trait GaleriaTrait
{
    public function GaleriaEditar(Galeria $galerium)
    {
        $categorias =  Categoria::orderBy('name', 'ASC')->get();

        return view('galeria.editar', compact('galerium', 'categorias'));
    }

    public function GaleriaUpdate(Galeria $galerium, Request $request)
    {
        return 'galeria editada';
    }
}
