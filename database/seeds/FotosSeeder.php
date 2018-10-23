<?php

use App\Fotos;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Fotos::create([
        'nombre' => 'ERLINDA CRUZ Y LAS CONSENTIDAS',
        'img' => '1.jpg'
      ]);
      Fotos::create([
        'nombre' => 'IMITADORA DE ALICIA VILLARREAL',
        'img' => '2.jpg'
      ]);
      Fotos::create([
        'nombre' => 'EL POCHOLO Y SU MARIDA',
        'img' => '3.jpg'
      ]);
      Fotos::create([
        'nombre' => 'MATAMBA',
        'img' => '4.jpg'
      ]);
      Fotos::create([
        'nombre' => 'IMITADOR DE LEONARDO FAVIO',
        'img' => '5.jpg'
      ]);
      Fotos::create([
        'nombre' => 'SPRAY (Tributo a Soda Stereo)',
        'img' => '6.jpg'
      ]);

    }
}
