<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // es: Desde aqui
    // en: from here

    public function roles()
    {
        return $this->belongsToMany('App\Permisson\Model\Roles')->withTimesTamps();
    }

    public function articulo()
    {
        return $this->hasMany('App\Articulo');
    }

    public function Admin()
    {
        return $this->type === 'admin';
    }
}
