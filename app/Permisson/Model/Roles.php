<?php

namespace App\Permisson\Model;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
  // es desde aqui
  // en: from here

  protected $fillable = [
        'name', 'slug', 'descripcion', 'full-acceso'
    ];

   public function users()
    {
      return $this->belongsToMany('App\User')->withTimesTamps();
    }
}
