<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
  protected $fillable = [
        'nombre','img', 'trabajo1', 'trabajo2', 'evento_id', 'red_social'
      ];
}
