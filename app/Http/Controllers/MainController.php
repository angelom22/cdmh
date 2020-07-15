<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resquests;

use App\Articulo;
use App\Categoria;
use App\Etiqueta;
use App\Image;
use  Carbon\Carbon;



class MainController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
    }

    public function index()
    {
        $articulos = Articulo::orderBy('id', 'DESC')->paginate(4);

        // $articulos->each(function ($articulos) {
        //     $articulos->categoria;
        //     $articulos->imagen;
        // });

        return view('main.home', compact('articulos'));
    }

    public function filtarCategoria($name)
    {
        $categoria = Categoria::FiltrarCategoria($name)->first();
        $articulos = $categoria->articulos()->paginate(4);
        // dd($articulos);

        // $articulos->each(function ($articulos) {
        //     $articulos->categoria;
        //     $articulos->imagen;
        // });

        return view('main.home', compact('articulos'));
    }

    public function filtrarEtiqueta($name)
    {
        $etiqueta = Etiqueta::FiltrarEtiqueta($name)->first();

        $articulos = $etiqueta->articulos()->paginate(4);

        // $articulos->each(function ($articulos) {
        //     $articulos->categoria;
        //     $articulos->imagen;
        // });

        return view('main.home', compact('articulos'));
    }
}
