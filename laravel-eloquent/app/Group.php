<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //

    // RELACIÓN DE UN GRUPO TIENE UNO O MUCHOS USUARIOS
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
}
