<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programa extends Model
{
    protected $fillable = ['nom_programa','descripcio','tipus','classificacio'];
}
