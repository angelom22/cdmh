<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Http\Requests\ArticuloRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Model\Categoria;
use App\Model\Articulo;
use App\Model\Etiqueta;
use App\Model\Imagen;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Str;

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
        $articulos = Articulo::Buscador($request->titulo)->orderBy('id', 'DESC')->simplePaginate(3);
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
        
        // Manipulación de imagen
        // $file = request()->file('image')->store('public/articulos/'.$request->titulo);
        // $imgUrl = Storage::url($file);

        // Se crea el contenido del articulo
        $articulo = new Articulo();
        $articulo->titulo = $request->get('titulo');
        // $noticia->url = Str::slug($request->get('titulo'));
        $articulo->extracto = $request->get('extracto');
        $articulo->contenido = $request->get('contenido');
        $articulo->categoria_id = Categoria::find($cat = $request->get('categoria_id')) ? $cat : Categoria::create(['name' => $cat])->id;
        $articulo->user_id = Auth::user()->id;
        $articulo->save();

        // Para guardar la etiquetas en BD
        $etiquetas = [];
        foreach( $request->get('etiquetas') as $etiqueta )
        {
            $etiquetas[] = Etiqueta::find($etiqueta) 
                                    ? $etiqueta 
                                    : Etiqueta::create(['name' => $etiqueta])->id; 
        }

        // Se guardan la etiquetas asociadas al articulo
        $articulo->etiquetas()->attach($etiquetas);


        // Subir la imagen con Intervetion Imagen
        $nombreImagen = Str::random(5) . $request->file('file');
        $ruta = storage_path() . '/app/public/articulos/' . $nombreImagen;

        // optimización de la imagen
        $image = Image::make( $request->file('image') )->resize(960, null, function($constraint){
            $constraint->aspectRatio();
        })->save($ruta);

        // Se guarda la foto en la tabla imagenes
        $articulo->imagen()->create([
            'url'   => '/storage/articulos/'. $nombreImagen ,
        ]);
        
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

        // dd( $articulo->etiquetas[0]->id);

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
    public function destroy(Articulo $articulo)
    {
        
        try {
            if (request()->ajax()) {

                $fotoRuta = str_replace('storage', 'public', $articulo->imagen->url);

                Storage::delete($fotoRuta);

                $articulo->delete();

                Flash("Se ha eliminado el artículo " . $articulo->titulo .  " de forma correcta")->success();

                return redirect()->route('articulos.index');
            } else {
                abort(401);
            }
        } catch (\Exception $exception) {
            session()->flash("message", ["danger", $exception->getMessage()]);
        }

        // $articulo = Articulo::find($id);
        // $articulo->delete();

    }
}
