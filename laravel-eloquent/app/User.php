<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // RELACIÓN DE UN USUARIO TIENE UN PERFIL 1/1
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    // RELACIÓN DE UN USUARIO PERTENECE A UN NIVEL
    public function level()
    {
        return $this->belongsTo(Levels::class);
    }
}
