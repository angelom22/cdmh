<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Galeria extends Model
{
    use HasFactory, Sluggable, SluggableScopeHelpers;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'nombre',
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

    protected $table = 'galeria';

    protected $casts = [
        'fecha' => 'datetime:d-m-Y',
    ];

    protected $fillable = ['nombre', 'slug', 'fecha', 'imagen', 'video', 'categoria_id'];

    public function categoria()
    {
        return $this->belongsTo('App\Model\Categoria');
    }

    // Relación uno a mucho polimorfica
    public function imagen()
    {
        return $this->morphMany('App\Model\Imagen', 'imagen');
    }

    public function scopePublicados($query){

        $query->orderBy('id', 'DESC')
                ->where('status', 'PUBLICADO');

    }
}
