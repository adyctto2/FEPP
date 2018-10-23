<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expositores extends Model
{
  protected $fillable = [
        'nombre','img', 'descripcion',  'direccion', 'telefono', 'website', 'facebook','instagram', 'youtube' ,'twitter',
      ];
}
