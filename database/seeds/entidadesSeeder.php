<?php

use App\Entidades;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class entidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('entidades')->truncate();
        //



        // DB::table('entidades')->insert([
        //   'nombre' => 'Minera San Cristobal S.A.',
        //   'descripcion' => 'Mineria a nivel internacional',
        //   'img' => 'img.png',
        //   'gerente' => 'Jose Perez',
        //   'presidente' => 'Juan Lopez',
        //   'telefono' => '6254847',
        //   'email' => 'anemix@gmail.com',
        //   'direccion' => 'La Paz 521',
        //   'website' => 'MSC.com',
        //   'facebook' => 'MSC',
        //   'twitter' => 'MSC.ds'
        // ]);
        Entidades::create([
          'nombre' => 'Minera San Cristobal S.A.',
          'descripcion' => 'Mineria a nivel internacional',
          'img' => 'img.png',
          'gerente' => 'Jose Perez',
          'presidente' => 'Juan Lopez',
          'telefono' => '6254847',
          'email' => 'anemix@gmail.com',
          'direccion' => 'La Paz 521',
          'website' => 'MSC.com',
          'facebook' => 'MSC',
          'twitter' => 'MSC.ds'
        ]);

        factory(Entidades::class)->times(20)->create();


    }
}
