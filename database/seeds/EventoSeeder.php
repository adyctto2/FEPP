<?php

use App\Eventos;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eventos::create([
            'nombre' => 'SERENETA POTOSÍNA',
            'img' => '1.jpg',
            'auspiciador' => 'GOBIERNO AUTÓNOMO DEPARTAMENTAL DE POTOSÍ',
            'costo' => '0',
            'fecha' => '2018-11-09'
          ]);
          Eventos::create([
            'nombre' => 'NOCHE POTOSINA',
            'img' => '2.jpg',
            'auspiciador' => 'CERVECERÍA NACIONAL POTOSÍ LTDA.',
            'costo' => '30',
            'fecha' => '2018-11-10'
          ]);
          
          Eventos::create([
            'nombre' => 'NOCHE POPULAR',
            'img' => '3.jpg',
            'auspiciador' => '',
            'costo' => '30',
            'fecha' => '2018-11-11'
          ]);

          Eventos::create([
            'nombre' => 'NOCHE DE HUMOR',
            'img' => '4.jpg',
            'auspiciador' => '',
            'costo' => '30',
            'fecha' => '2018-11-12'
          ]);
          Eventos::create([
            'nombre' => 'NOCHE DEL RECUERDO',
            'img' => '5.jpg',
            'auspiciador' => '',
            'costo' => '30',
            'fecha' => '2018-11-13'
          ]);
          Eventos::create([
            'nombre' => 'NOCHE DE FOLKLORE Y BELLEZA',
            'img' => '6.jpg',
            'auspiciador' => 'MINERA SAN CRISTOBAL',
            'costo' => '30',
            'fecha' => '2018-11-14'
          ]);
          Eventos::create([
            'nombre' => 'NOCHE DE CUMBIA',
            'img' => '7.jpg',
            'auspiciador' => '',
            'costo' => '30',
            'fecha' => '2018-11-15'
          ]);
          Eventos::create([
            'nombre' => 'NOCHE DE ROCK',
            'img' => '8.jpg',
            'auspiciador' => '',
            'costo' => '30',
            'fecha' => '2018-11-16'
          ]);
          Eventos::create([
            'nombre' => 'NOCHE DE TROPICAL',
            'img' => '9.jpg',
            'auspiciador' => '',
            'costo' => '30',
            'fecha' => '2018-11-17'
          ]);
          Eventos::create([
            'nombre' => 'NOCHE DE CLAUSURA',
            'img' => '10.jpg',
            'auspiciador' => '',
            'costo' => '30',
            'fecha' => '2018-11-18'
          ]);
    }
}
