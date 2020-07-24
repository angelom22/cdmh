<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Laracasts\Flash\Flash;
use App\Model\Articulo;
use App\Model\Categoria;
use App\Model\Etiqueta;
use App\Model\Image;
use App\Http\Requests\ArticuloRequest;
use Illuminate\Support\Facades\Auth;
use App\User;
use  Carbon\Carbon;

class ArticulosController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'admin'], ['except' => ['show', 'index']]);
        Carbon::setLocale('es');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index(Request $request)
    {
        $articulos = Articulo::Buscador($request->titulo)->orderBy('id', 'DESC')->paginate(3);
        $articulos->each(function ($articulos) {
            $articulos->categoria();
            $articulos->user();
        });

        $categorias =  Categoria::orderBy('name', 'ASC')->get();
        $etiquetas = Etiqueta::orderBy('name', 'ASC')->get();


        return view('noticias.index', compact('articulos', 'categorias', 'etiquetas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias =  Categoria::orderBy('name', 'ASC')->get();
        // dd($categorias);

        $etiquetas = Etiqueta::orderBy('name', 'ASC')->get();

        return view('noticias.create', compact('categorias', 'etiquetas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticuloRequest $request)
    {
        // dd($request->etiquetas);

        // Manipulación de imagen
        if ($request->file('image')) {
            $file = $request->file('image');
            $ImagenName = 'CDHM_'  . time() .  '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/img/articulos';
            $file->move($path, $ImagenName);
        }

        $articulo = new Articulo($request->all());
        // dd($articulo);
        $articulo->user_id = Auth::user()->id;
        // dd($articulo->user_id);
        // $articulo->user_id = 2;
        $articulo->save();

        $articulo->etiquetas()->sync($request->etiquetas);

        $image = new Image();
        $image->name = $ImagenName;
        $image->articulo()->associate($articulo);
        $image->save();

        Flash("Se ha creado el artículo " . $articulo->titulo .  " de forma correcta")->success();

        return redirect()->route('articulos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $articulo = Articulo::findBySlugOrFail($slug);
        // dd($articulo);
        $categorias =  Categoria::orderBy('name', 'ASC')->get();
        $etiquetas = Etiqueta::orderBy('name', 'ASC')->get();

        return view('noticias.show', compact('articulo', 'categorias', 'etiquetas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articulo = Articulo::find($id);
        $categorias = Categoria::orderBy('name', 'DESC')->get();
        // $categorias = Categoria::pluck('id', 'name');
        $etiquetas = Etiqueta::orderBy('name', 'DESC')->get();
        $Mis_Etiquetas = $articulo->etiquetas->ToArray('name');

        // dd($Mis_Etiquetas);

        return view('noticias.edit', compact('articulo', 'categorias', 'etiquetas', 'Mis_Etiquetas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $articulo = Articulo::find($id);
        $articulo->fill($request->all());
        $articulo->save();

        $articulo->etiquetas()->sync($request->etiquetas);

        Flash("Se ha editado el artículo " . $articulo->titulo .  " de forma correcta")->warning();

        return redirect()->route('articulos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Articulo::find($id);
        $articulo->delete();

        Flash("Se ha eliminado el artículo " . $articulo->titulo .  " de forma correcta")->error();

        return redirect()->route('articulos.index');
    }
}
