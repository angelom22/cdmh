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
        // $this->middleware('auth', ['except' => ['filtarCategoria', 'filtrarEtiqueta']]);
        Carbon::setLocale('es');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    // public function home()
    // {
    //     $articulos = Articulo::orderBy('id', 'DESC')->paginate(4);

    //     return view('main.home', compact('articulos'));
    // }

    public function index()
    {
        $articulos = Articulo::orderBy('id', 'DESC')->paginate(4);

        return view('main.home', compact('articulos'));
        // return view('home');
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
