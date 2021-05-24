<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $guarded = [];

    use HasFactory;
    
    // protected $table = 'imagens';

    // protected $fillable = ['url', 'imagen_id', 'imagen_modelo'];

    public function imagen()
    {
        return $this->morphTo();
    }
    
}
