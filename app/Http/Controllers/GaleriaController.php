<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Http\Requests\GaleriaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\Categoria;
use App\Model\Galeria;
use App\Model\Imagen;
use Carbon\Carbon;



class GaleriaController extends Controller
{
    // use GaleriaTrait;

    public function __construct()
    {
        $this->middleware(['auth', 'admin'], ['except' => ['show', 'index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galerias = Galeria::publicados()->simplePaginate(8);

        // dd($galerias);

        return view('galeria.index', compact('galerias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd($galerium);
        $categorias =  Categoria::orderBy('name', 'ASC')->get();

        return view('galeria.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $galeria = Galeria::create([
            'nombre'        => $request->nombre,
            'fecha'         => $request->fecha,
            'video'         => $request->video,
            'categoria_id'  => $request->categoria_id
        ]);

        // $imagen = request()->file('file')->store('public/galeria/' . $request->nombre);

        // // Subir la imagen con Intervetion Imagen
        // $nombreImagen = Str::random(5) . $request->file('file')->getClientOriginalName();
        // $ruta = storage_path() . '/app/public/galeria/' . $nombreImagen;

        // // optimización de la imagen
        // $image = Image::make( request()->file('file') )->resize(1080, null, function($constraint){
        //     $constraint->aspectRatio();
        // })->encode()->save($ruta);

        // $galeria->imagen()->create([
        //     'url'   => Storage::url($imagen),
        //     'imagen_id' => $galeria->id
        // ]);


        Flash("Se ha creado la galería " . $galeria->nombre .  " de forma correcta")->success();

        return redirect()->route('galeria.edit', $galeria);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($galeria)
    {
        return view('galeria.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeria $galerium)
    {
        // dd($galerium);

        $categorias =  Categoria::orderBy('name', 'ASC')->get();

        return view('galeria.edit', compact('galerium', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Galeria $galerium, Request $request)
    {   
        
        // se actualiza la galeria en la base da datos
        $galerium->update($request->all());

        Flash("Se han cargado las imagenes a la galería " . $galerium->nombre .  " de forma correcta")->success();

        return redirect()->route('galeria.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeria $galerium)
    {
        // return request()->ajax();

        try {
            if (request()->ajax()) {
                
                foreach($galerium->imagen as $imagen){
                    $imagenRuta = str_replace('storage', 'public', $imagen->url);
                    Storage::delete($imagenRuta);
                }
            
                $galerium->imagen()->delete();
                
                $galerium->delete();

                Flash("Se ha eliminado la galería " . $galerium->nombre .  " de forma correcta")->success();

                return redirect()->route('galeria.index');
            } else {
                abort(401);
            }
        } catch (\Exception $exception) {
            session()->flash("message", ["danger", $exception->getMessage()]);
        }
    }
}
