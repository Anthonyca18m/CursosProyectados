<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    // RELACION DE UN PERFIL TIENE UNA LOCALIZACION
    public function location()
    {
        return $this->hasOne(Location::class);
    }
}
