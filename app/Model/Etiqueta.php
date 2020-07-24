<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    protected $table = 'etiquetas';

    protected $fillable = ['name'];

    public function articulos()
    {
        return $this->belongsToMany('App\Model\Articulo')->withTimestamps();
    }

    public function scopeBuscador($query, $name)
    {
        return $query->where('name', 'LIKE', "%$name%");
    }

    public function scopeFiltrarEtiqueta($query, $name)
    {
        return $query->where('name', '=', $name);
    }
}
