<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
  protected $fillable = [
        'nombre','img', 'auspiciador', 'costo', 'fecha',
      ];
}
