<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;


class Articulo extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */


    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'titulo',
                'maxLength'          => null,
                'maxLengthKeepWords' => true,
                'method'             => null,
                'separator'          => '-',
                'unique'             => true,
                'uniqueSuffix'       => null,
                'includeTrashed'     => false,
                'reserved'           => null,
                'onUpdate'           => true,
            ],

        ];
    }

    protected $table = 'articulos';

    protected $fillable = ['titulo', 'extracto', 'contenido', 'user_id', 'slug', 'categoria_id'];


    public function categoria()
    {
        return $this->belongsTo('App\Model\Categoria');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function imagen()
    {
        return $this->hasOne('App\Model\Imagen');
    }

    public function etiquetas()
    {
        return $this->belongsToMany('App\Model\Etiqueta');
    }

    public function scopeBuscador($query, $titulo)
    {
        return $query->where('titulo', 'LIKE', "%$titulo%");
    }
}
