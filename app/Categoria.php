<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $tabe = 'categorias';

    protected $fillable = ['name'];

    public function articulos()
    {
        return $this->hasMany('App\Articulo');
    }

    public function scopeFiltrarCategoria($query, $name)
    {
        return $query->where('name', '=', $name);
    }
}
