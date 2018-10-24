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
        'descripcion' => 'ZOE Hair Styles es una empresa que se dedica al cuidado personal.',
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
        'descripcion' => 'Empresa dedicada a la venta de Jeans para damas',
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
        'descripcion' => 'Tenemos más de 19 años en el sector de la producción vitivinícola, con distribución principal en el Departamento de Tarija - Bolivia, como a nivel nacional, con nuestros diferentes vinos, participando en diferentes ferias y ganando mercado, mejorando nuestra calidad de producción día a día. ',
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
        'descripcion' => 'Textilón la marca más reconocida en medias y estilo en Bolivia',
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
      Expositores::create([
        'nombre' => 'PATRA',
        'img' => '6.png',
        'descripcion' => 'PATRA es pionera en la confección de prendas de gimnasia, fabricamos prendas de calidad y con sello de garantía.',
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
        'descripcion' => 'Ópticas Nueva Imagen ofrece los mejores servicios ópticos en general y atención de Optometría con medición de agudeza visual computarizada.',
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
        'descripcion' => 'Bianchi ofrece a sus clientes una linea completa de Medias Lycra, Lujo, Stretch , Camisetas Térmicas y productos de Algodón',
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
