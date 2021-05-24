<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\Articulo;
use App\Model\Imagen;
use App\Model\Galeria;

class FotosController extends Controller
{
    public function store(Galeria $galerium)
    {
   

        // Validación de la imagen
        $this->validate(request(), [
            'image' => 'image|max:2048'
        ]);
        
        $imagen =  request()->file('file')->store('public/galeria/'. $galerium->nombre);
        
        // Subir la imagen con Intervetion Imagen
        $ruta = storage_path() . '/app/' . $imagen;

        // optimización de la imagen
        $image = Image::make( request()->file('file') )
                        ->resize(1080, null, function($constraint){
                            $constraint->aspectRatio();
                        })
                        ->encode()
                        ->save($ruta);

        // Se guarda la foto en la tabla imagenes
        $galerium->imagen()->create([
            'url'   => Storage::url($imagen),
            'imagen_id' => $galerium->id     
        ]);

        // -----------------------------------------------------------------

        

        // $img = Imagen::create([
        //     'url'       => Storage::url($imagen),
        //     'imagen_id' => 1
        // ]);
        
        // optimización de la imagen
        // $image = Image::make(Storage::get($img))
        //                 // ->widen(600)
        //                 ->resize(1080, null, function($constraint){
        //                     $constraint->aspectRatio();
        //                 })
        //                 ->encode();

        // se reemplaza la imagen que subio el usuario por la imagen optimizada
        // Storage::put($img->name, (string) $image);

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
