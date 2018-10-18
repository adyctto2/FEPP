<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
  protected $fillable = [
        'titulo','subtitulo', 'imagen', 'descripcion', 'temario', 'fecha','duracion', 'horarios', 'lugar', 'costo', 'expositor', 'certificacion',
      ];
}
