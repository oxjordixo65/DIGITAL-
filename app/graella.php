<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class graella extends Model
{
    //
    protected $fillable = ['canal_id', 'programa_id', 'hora', 'dia'];
}
