<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entidades extends Model
{
  protected $fillable = [
        'nombre', 'descripcion', 'img', 'gerente', 'presidente','telefono', 'email', 'direccion', 'website', 'facebook', 'twitter',
      ];
}
