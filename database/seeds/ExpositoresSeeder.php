<?php

use App\Expositores;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ExpositoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Expositores::create([
        'nombre' => 'ZOE HAIR STYLE',
        'img' => '1.png',
        'descripcion' => '',
        'direccion' => '',
        'telefono' => '',
        'website' => '',
        'facebook' => '',
        'instagram' => '',
        'youtube' =>'',
        'twitter' => ''
      ]);
      Expositores::create([
        'nombre' => 'YOU',
        'img' => '2.png',
        'descripcion' => '',
        'direccion' => '',
        'telefono' => '',
        'website' => '',
        'facebook' => '',
        'instagram' => '',
        'youtube' =>'',
        'twitter' => ''
      ]);
      Expositores::create([
        'nombre' => 'VINOS VILTE',
        'img' => '3.png',
        'descripcion' => '',
        'direccion' => '',
        'telefono' => '',
        'website' => '',
        'facebook' => '',
        'instagram' => '',
        'youtube' =>'',
        'twitter' => ''
      ]);
      Expositores::create([
        'nombre' => 'TEXTILÓN',
        'img' => '4.png',
        'descripcion' => '',
        'direccion' => '',
        'telefono' => '',
        'website' => '',
        'facebook' => '',
        'instagram' => '',
        'youtube' =>'',
        'twitter' => ''
      ]);
      Expositores::create([
        'nombre' => 'RENOVA',
        'img' => '5.png',
        'descripcion' => '',
        'direccion' => '',
        'telefono' => '',
        'website' => '',
        'facebook' => '',
        'instagram' => '',
        'youtube' =>'',
        'twitter' => ''
      ]);
      Expositores::create([
        'nombre' => 'PATRA',
        'img' => '6.png',
        'descripcion' => '',
        'direccion' => '',
        'telefono' => '',
        'website' => '',
        'facebook' => '',
        'instagram' => '',
        'youtube' =>'',
        'twitter' => ''
      ]);
      Expositores::create([
        'nombre' => 'OPTICAS NUEVA IMAGEN',
        'img' => '8.png',
        'descripcion' => '',
        'direccion' => '',
        'telefono' => '',
        'website' => '',
        'facebook' => '',
        'instagram' => '',
        'youtube' =>'',
        'twitter' => ''
      ]);
      Expositores::create([
        'nombre' => 'BIANCHI',
        'img' => '9.png',
        'descripcion' => '',
        'direccion' => '',
        'telefono' => '',
        'website' => '',
        'facebook' => '',
        'instagram' => '',
        'youtube' =>'',
        'twitter' => ''
      ]);
      Expositores::create([
        'nombre' => 'BAR IT',
        'img' => '10.png',
        'descripcion' => '',
        'direccion' => '',
        'telefono' => '',
        'website' => '',
        'facebook' => '',
        'instagram' => '',
        'youtube' =>'',
        'twitter' => ''
      ]);
    }
}
