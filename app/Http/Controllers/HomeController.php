<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resquests;

use App\Model\Articulo;
use App\Model\Categoria;
use App\Model\Etiqueta;
use App\Model\Image;
use  Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'filtarCategoria', 'filtrarEtiqueta']]);
        Carbon::setLocale('es');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $articulos = Articulo::orderBy('id', 'DESC')->simplePaginate(4);
        // $categorias =  Categoria::orderBy('name', 'ASC')->get();
        // dd( $articulos);
        return view('main.home', compact('articulos'));
        // return view('home');
    }

    public function filtarCategoria($name)
    {
        $categoria = Categoria::FiltrarCategoria($name)->first();
        $articulos = $categoria->articulos()->simplePaginate(4);
        // $articulos->each(function($articulos){
        //   $articulo->categoria;
        //   $articulo->imagen;
        // });

        // dd($articulo->categoria);

        $categorias =  Categoria::orderBy('name', 'ASC')->get();
        $etiquetas = Etiqueta::orderBy('name', 'ASC')->get();

        return view('noticias.index', compact('articulos', 'categorias', 'etiquetas'));
    }

    public function filtrarEtiqueta($name)
    {
        $etiqueta = Etiqueta::FiltrarEtiqueta($name)->first();
        $articulos = $etiqueta->articulos()->simplePaginate(4);

        $categorias =  Categoria::orderBy('name', 'ASC')->get();
        $etiquetas = Etiqueta::orderBy('name', 'ASC')->get();

        return view('noticias.index', compact('articulos', 'categorias', 'etiquetas'));
    }
}
