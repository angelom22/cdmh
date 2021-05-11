<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Articulo;
use App\Model\Imagen;
use Illuminate\Support\Facades\Storage;

class FotosController extends Controller
{
    public function store(Articulo $articulo)
    {
        $this->validate(request(), [
            'image' => 'image|max:2048'
        ]);

        // Manipulación de imagen
        $file = request()->file('file')->store('public/articulos/'.$request->titulo);

        $img = Imagen::create([
            'name' => Storage::url($file),
            'articulo_id' => $articulo->id
        ]);
        
        // optimización de la imagen
        $image = Image::make(Storage::get($img))
                        // ->widen(600)
                        ->resize(1080, 1080)
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
