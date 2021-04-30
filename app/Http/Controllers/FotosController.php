<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Articulo;
use App\Model\Image;
use Illuminate\Support\Facades\Storage;

class FotosController extends Controller
{
    public function store(Articulo $articulo)
    {
        $this->validate(request(), [
            'image' => 'image|max:2048'
        ]);

        // Manipulación de imagen
        if (request()->file('file')) {
            $file = request()->file('file');
            $ImagenName = 'CDHM_'  . time() .  '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/img/articulos';
            $file->move($path, $ImagenName);
        }

        //obtenemos el campo file definido en el formulario
        // $foto = request()->file('file')->store('/img/articulos/'.$articulo->titulo);

        $img = Image::create([
            'name' => $ImagenName,
            'articulo_id' => 5
        ]);
        
        // optimización de la imagen
        $image = Image::make(Storage::get($img))
                        ->widen(600)
                        // ->limitColors(255)
                        ->encode();

        // se reemplaza la imagen que subio el usuario por la imagen optimizada
        Storage::put($img->name, (string) $image);

        // return Storage::url($fotoUrl);
    }

    public function destroy(Foto $foto) 
    {
       
        $foto->delete();

        $fotoRuta = str_replace('storage', 'public', $foto->url);
        
        Storage::delete($fotoRuta);


        return back()->with('flash', 'Foto eliminada');
    }
}
