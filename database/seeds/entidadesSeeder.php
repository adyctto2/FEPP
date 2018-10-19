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
          'nombre' => 'BANCO BISA S.A.',
          'descripcion' => 'Desde nuestra fundación, el 5 de julio de 1963, en Banco BISA asumimos como compromiso de vida, promover el desarrollo nacional y satisfacer las necesidades de nuestros clientes con oportunidad y calidad, guiados por cinco valores fundamentales: Calidad, Prudencia, Compromiso, Coordinación e Innovación.',
          'img' => '1.png',
          'gerente' => '',
          'presidente' => 'Julio Cesar León Prado',
          'telefono' => '800-10-5555',
          'email' => '',
          'direccion' => 'Sucursal Potosi: Calle Sucre # 27-29',
          'website' => 'http://www.bisa.com',
          'facebook' => 'http://www.facebook.com/BancoBisa/',
          'twitter' => ''
        ]);

        Entidades::create([
          'nombre' => 'BANCO NACIONAL DE BOLIVIA S.A.',
          'descripcion' => 'Hoy, luego de 145 años, el Banco Nacional de Bolivia S.A. es uno de los bancos más grandes y modernos de Bolivia, cuenta con una importante red de sucursales y agencias, mediante la cual ofrece una amplia gama de productos y servicios bancarios, contando además con un plantel ejecutivo de reconocida capacidad. Desde el punto de vista de la preferencia del público, reflejado en términos de captaciones y colocaciones, el Banco Nacional de Bolivia S.A. ha consolidado su posición entre los primeros bancos del sistema, constituidos con capital nacional.',
          'img' => '2.png',
          'gerente' => '',
          'presidente' => '',
          'telefono' => '+(591) 2 611-6111',
          'email' => '',
          'direccion' => 'Sucursal Potosí: Calle Junín # 4',
          'website' => 'http://www.bnb.com.bo',
          'facebook' => 'http://www.facebook.com/BancoNacionaldeBoliviaSA/',
          'twitter' => 'http://twitter.com/bnbsa'
        ]);

        Entidades::create([
          'nombre' => 'CERVECERÍA NACIONAL POTOSÍ LTDA.',
          'descripcion' => 'Una empresa industrial dedicada a la producción y comercialización de cerveza y bebidas gaseosas para el mercado nacional.',
          'img' => '3.png',
          'gerente' => '',
          'presidente' => '',
          'telefono' => '+(591) 2 622-2877',
          'email' => 'info@potosina.bo',
          'direccion' => 'Calle La Paz #',
          'website' => 'http://potosina.bo/',
          'facebook' => 'https://www.facebook.com/Cervezapotosina/',
          'twitter' => ''
        ]);

        Entidades::create([
          'nombre' => 'CAMARA DEPARTAMENTAL DE HOTELERIA',
          'descripcion' => 'Institución privada, autónoma, con capacidad, nombre y personalidad jurídica propia, de servicio público y sin fines de lucro, compuesta por todos los establecimientos de hospedaje de la capital y provincias del Departamento de Potosí, estando sus  actividades al margen de filiaciones político-religiosas, encuadrando sus actos a los preceptos legales vigentes siendo esta la máxima entidad representativa de la hotelería departamental de Potosí',
          'img' => '4.png',
          'gerente' => '',
          'presidente' => '',
          'telefono' => '+(591) 2 622-8343',
          'email' => '',
          'direccion' => 'Wenceslao Alba # 59',
          'website' => '',
          'facebook' => 'https://www.facebook.com/pages/category/Travel-Agency/Camara-Hotelera-Potosi-163748817107181/',
          'twitter' => ''
        ]);

        Entidades::create([
          'nombre' => 'CAMARA DEPARTAMENTAL DE MINERÍA',
          'descripcion' => 'La Cámara Departamental de Minería de Potosí, nació con personalidad propia el 20 de enero de 1953 en sustitución a la Asociación Departamental de Mineros que emergió el 10 de diciembre de 1934, en cumplimiento al D.S. Nº 8327 de 5 de marzo de 1953. CADEMIN está constituida por todas la personas naturales o jurídicas en su condición de productores de minerales, industriales de plantas de concentración y plantas de tratamiento que llenen los requisitos de inscripción de acuerdo al art. 5 del D.L. Nº 07921 de 13 de noviembre de 1953.',
          'img' => '5.png',
          'gerente' => '',
          'presidente' => 'Óscar Gardeazaval',
          'telefono' => '+(591) 2 622-4563',
          'email' => 'Ca-de-min@hotmail.com',
          'direccion' => 'Quijarro # 12',
          'website' => '',
          'facebook' => '',
          'twitter' => ''
        ]);

        Entidades::create([
          'nombre' => 'CAMARA DEPARTAMENTAL DE CONSTRUCCIÓN',
          'descripcion' => 'Institución que agrupa empresas constructoras del departamento de Potosí',
          'img' => '6.png',
          'gerente' => '',
          'presidente' => 'Ing. David Velasquez',
          'telefono' => '+(591) 2 622-7124',
          'email' => 'cadecopt@cotapnet.com.bo',
          'direccion' => 'Av. Pedro Domingo Murillo # 97',
          'website' => '',
          'facebook' => 'https://www.facebook.com/C%C3%A1mara-Departamental-de-la-Construcci%C3%B3n-Cadecosi-213638672346095/',
          'twitter' => ''
        ]);

        Entidades::create([
          'nombre' => 'MINERA SAN CRISTOBAL S.A.',
          'descripcion' => 'Producimos concentrados de zinc – plata y plomo – plata.
          Minera San Cristóbal es una subsidiaria de Sumitomo Corporation, uno de los consorcios empresariales líderes del Japón, operando por más de 400 años.',
          'img' => '7.png',
          'gerente' => 'Joseph David Assels',
          'presidente' => 'Mitsuhiro Hirano',
          'telefono' => '+(591) 2 612-0487',
          'email' => 'info@minerasancristobal.com',
          'direccion' => 'Calle Tarija # 12',
          'website' => 'http://www.minerasancristobal.com/v3/es/',
          'facebook' => 'https://www.facebook.com/minerasancristobal/',
          'twitter' => ''
        ]);

        Entidades::create([
          'nombre' => 'EMPRESA MINERA MANQUIRI S.A',
          'descripcion' => 'Empresa Minera Potosina con los mas altos estandares de produccion, seguridad y responsabilidad social.',
          'img' => '8.png',
          'gerente' => '',
          'presidente' => '',
          'telefono' => '',
          'email' => 'sanbartolome@manquiri.com.bo',
          'direccion' => 'Carretera Potosí-Tarija Km 3',
          'website' => '',
          'facebook' => '',
          'twitter' => ''
        ]);

        Entidades::create([
          'nombre' => 'HOTEL CLAUDIA',
          'descripcion' => 'Desde la montaña más generosa del mundo nace Hotel Claudia. Se ubica a sólo cuatro manzanos del centro histórico en una avenida arbolada y de fácil acceso. Con el objetivo de ofrecer el mejor servicio en hotelería en la ciudad de Potosí.',
          'img' => '9.png',
          'gerente' => '',
          'presidente' => '',
          'telefono' => '+(591) 2 622-2242',
          'email' => 'reservas@hotelclaudia.com.bo',
          'direccion' => 'Av. del Maestro # 322',
          'website' => 'http://www.hotelclaudia.com.bo/',
          'facebook' => '',
          'twitter' => ''
        ]);

        Entidades::create([
          'nombre' => 'INGENIO MINERO DEL SUR',
          'descripcion' => 'Explotación de minas y canteras',
          'img' => '0.png',
          'gerente' => '',
          'presidente' => '',
          'telefono' => '+(591) 2 622-7793',
          'email' => ' jose4mancilla@hotmail.com',
          'direccion' => 'Av. Cincunvalacion s/n Zona Sta. Rosa',
          'website' => '',
          'facebook' => '',
          'twitter' => ''
        ]);

        Entidades::create([
          'nombre' => 'HOTEL SAN ANTONIO',
          'descripcion' => 'Complejo hotelero en la Ciudad de Potosi',
          'img' => '0.png',
          'gerente' => '',
          'presidente' => '',
          'telefono' => '+(591) 2 622-3566',
          'email' => 'hotel_sanantonio@hotmail.com',
          'direccion' => 'Oruro # 136',
          'website' => '',
          'facebook' => 'https://www.facebook.com/pages/category/Hotel-Resort/Hotel-San-Antonio-1777031172621095/',
          'twitter' => ''
        ]);

        Entidades::create([
          'nombre' => 'HOTEL GRAN LIBERTADOR',
          'descripcion' => 'Nos consolidamos como una empresa hotelera líder que sea reconocida a nivel local, nacional e internacional, comprometidos con un buen servicio de hospitalidad.',
          'img' => '10.png',
          'gerente' => '',
          'presidente' => '',
          'telefono' => '+(591) 2 622-7877',
          'email' => 'libertador@entelnet.bo',
          'direccion' => 'Millares esq. Nogales # 58',
          'website' => 'http://www.hotelgranlibertador.com/',
          'facebook' => 'https://www.facebook.com/Hotel-Gran-Libertador-284506171604180/',
          'twitter' => ''
        ]);

        Entidades::create([
          'nombre' => 'CONSULTORA CONTABLE D & J',
          'descripcion' => 'Consultoría contable, capacitación y asesoramiento en el área de consultorias multidisciplinarias.',
          'img' => '11.png',
          'gerente' => '',
          'presidente' => '',
          'telefono' => '',
          'email' => '',
          'direccion' => 'Cobija # 23',
          'website' => '',
          'facebook' => '',
          'twitter' => ''
        ]);

        Entidades::create([
          'nombre' => 'FABRICA DE ROPA MARIO SPORT',
          'descripcion' => '',
          'img' => '0.png',
          'gerente' => '',
          'presidente' => '',
          'telefono' => '+(591) 2 624-2155',
          'email' => '',
          'direccion' => '',
          'website' => '',
          'facebook' => '',
          'twitter' => ''
        ]);

        Entidades::create([
          'nombre' => 'EMPRESA DE EVENTOS FINADEMPO',
          'descripcion' => '',
          'img' => '0.png',
          'gerente' => '',
          'presidente' => '',
          'telefono' => '+(591) 2 624-9752',
          'email' => '',
          'direccion' => 'Oruro # 481 ',
          'website' => '',
          'facebook' => 'https://www.facebook.com/Finadempo-305026169613614/',
          'twitter' => ''
        ]);

        Entidades::create([
          'nombre' => 'PERIODICO EL POTOSI',
          'descripcion' => 'Medio de comunicación y noticias',
          'img' => '12.png',
          'gerente' => '',
          'presidente' => '',
          'telefono' => '+(591) 4 622-7835',
          'email' => 'info@elpotosi.net',
          'direccion' => 'Cochabamba # 35',
          'website' => 'https://elpotosi.net/',
          'facebook' => 'https://www.facebook.com/elpotosi.noticias/',
          'twitter' => 'https://twitter.com/elpotosinet'
        ]);

        Entidades::create([
          'nombre' => 'LABORATORIO QUIMICO SEQUIRCOMIN',
          'descripcion' => '',
          'img' => '0.png',
          'gerente' => '',
          'presidente' => '',
          'telefono' => '',
          'email' => '',
          'direccion' => '',
          'website' => '',
          'facebook' => '',
          'twitter' => ''
        ]);


        Entidades::create([
          'nombre' => 'INDUSTRIAS GRAFICAS LA PREDILECTA',
          'descripcion' => '',
          'img' => '13.png',
          'gerente' => '',
          'presidente' => '',
          'telefono' => '',
          'email' => '',
          'direccion' => '',
          'website' => '',
          'facebook' => '',
          'twitter' => ''
        ]);



        Entidades::create([
          'nombre' => 'FUNDACIÓN MUJER',
          'descripcion' => '',
          'img' => '0.png',
          'gerente' => '',
          'presidente' => '',
          'telefono' => '',
          'email' => '',
          'direccion' => '',
          'website' => '',
          'facebook' => '',
          'twitter' => ''
        ]);


        Entidades::create([
          'nombre' => 'CAMARA GRAFICA POTOSI',
          'descripcion' => '',
          'img' => '14.png',
          'gerente' => '',
          'presidente' => '',
          'telefono' => '',
          'email' => '',
          'direccion' => '',
          'website' => '',
          'facebook' => '',
          'twitter' => ''
        ]);

        Entidades::create([
          'nombre' => 'CAMARA TEXTIL POTOSÍ',
          'descripcion' => '',
          'img' => '15.png',
          'gerente' => '',
          'presidente' => '',
          'telefono' => '',
          'email' => '',
          'direccion' => '',
          'website' => '',
          'facebook' => '',
          'twitter' => ''
        ]);
      //  factory(Entidades::class)->times(20)->create();


    }
}
