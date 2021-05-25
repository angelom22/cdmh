<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Model\Jugadores;
use App\Http\Requests\JugadorRequest;
use  Carbon\Carbon;
use  Laracasts\Flash\Flash;

class JugadoresController extends Controller
{
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
        $jugadores = Jugadores::simplePaginate(11);

        return view('admin.jugadores.index', compact('jugadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.jugadores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JugadorRequest $request)
    {

        $jugador = Jugadores::create([
            'nombre' => $request->nombre,
            'edad' => $request->edad,
            'fecha_nacimiento' => Carbon::parse($request->fecha_nacimiento), 
            'nacionalidad' => $request->nacionalidad, 
            'sexo' => $request->sexo,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'direccion' => $request->direccion,
            'posicion' => $request->posicion,
            'partidos' => $request->partidos,
            'goles' => $request->goles,
            'categoria_jugador' => $request->categoria_jugador,
            // 'foto' => Storage::url($file)
        ]);
            
        // optimización de la imagen
        // $image = Image::make( Storage::get($file) )->resize(770, 512)->encode();

        // se reemplaza la imagen que subio el usuario por la imagen optimizada
        // Storage::put($jugador->foto, (string) $image);

        $foto =  request()->file('file')->store('public/atletas/'. $request->nombre);
        
        // Subir la imagen con Intervetion Imagen
        $ruta = storage_path() . '/app/' . $foto;

        // optimización de la imagen
        $image = Image::make( request()->file('file') )
                        ->resize(770, 512)
                        ->encode()
                        ->save($ruta);

        // Se guarda la foto en la tabla imagenes
        $jugador->imagen()->create([
            'url'   => Storage::url($foto),
            'imagen_id' => $jugador->id     
        ]);
      
        Flash("El jugador " . $jugador->nombre .  " se a registrado de forma corecta")->success();

        return redirect()->route('atleta.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jugador = Jugadores::findOrFail($id);
        

        return 'Vista para la ficha del jugador';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jugador = Jugadores::find($id);
        
        return view('admin.jugadores.edit', compact('jugador'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jugadores $jugador)
    {
        // dd($jugador);

        try {
            if (request()->ajax()) {
               
                $fotoRuta = str_replace('storage', 'public', $jugador->imagen->url);
            
                Storage::delete($fotoRuta);
                
                $jugador->delete();

                Flash("Se ha eliminado el artículo " . $jugador->nombre .  " de forma correcta")->success();

                return redirect()->route('jugador.index');
            } else {
                abort(401);
            }
        } catch (\Exception $exception) {
            session()->flash("message", ["danger", $exception->getMessage()]);
        }
    }
}
