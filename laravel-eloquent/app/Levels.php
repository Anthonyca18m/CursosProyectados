<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Levels extends Model
{
    // RELACIÓN DE UN LEVEL TIENE MUCHOS USUARIOS : UNO A MUCHOS
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
