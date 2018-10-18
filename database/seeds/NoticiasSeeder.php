<?php
use App\Noticias;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      Noticias::create([
        'titulo' => 'Posesión Federación de Empresarios Privados de Potosí',
        'imagen' => '1.jpg',
        'fecha' => '2017-10-25',
        'fuente' => 'Correo del Sur',
        'descripcion' => 'La Federación de Empresarios Privados de Potosí celebró el acto de posesión de su nuevo Comité Ejecutivo para la gestión 2015-2017 en el Salón Yolanda del hotel Coloso. En la oportunidad, se contó con la participación de autoridades y representantes de instituciones locales y nacionales como el gobernador de Potosí, Juan Carlos Cejas Ugarte; el presidente de la Confederación de Empresarios Privados de Bolivia, Ronald Nostas, y el gerente de Responsabilidad Social Corporativa y MM.AA. San Cristóbal, Javier Díaz de Medina.'
      ]);

      Noticias::create([
        'titulo' => 'Empresarios destacan los resultados de la Feipobol',
        'imagen' => '2.jpg',
        'fecha' => '2017-12-08',
        'fuente' => 'El Potosí',
        'descripcion' => 'La Federación de Empresarios Privados de Potosí (FEPP) destaca los resultados que se lograron con la Feria Internacional Potosí - Bolivia (Feipobol), desarrollada en esta capital la semana anterior.
El gerente de la Feipobol, Rommel Gutiérez, destacó que la evaluación efectuada por los empresarios señala satisfacción de parte de los organizadores y de los que acudieron a exponer sus productos en los diferentes puestos armados en el campo ferial de Potosí.
Informó que los más de 200 expositores expresaron su satisfacción por la infraestructura que tienen en la actualidad y permita desarrollar la actividad económica de una mejor manera.
Algunos de los expositores adelantaron que ven a Potosí como un buen mercado, por lo que anunciaron que abrierán agencias de venta; tal es el caso de la empresa Honda.
La feria también permitió que algunos empresarios de la ciudad de Potosí tomen contacto con las firmas expositoras con la finalidad de abrir representaciones para la comercialización de sus respectivos productos.
Algunos empresarios que participaron en la rueda de negocios anunciaron su predisposición de invertir en esta parte del país con la finalidad de generar más fuentes de trabajo y beneficios para toda la gente así como para sus instituciones.
La semana venidera se presentará el informe sobre la Feria Internacional Potosí, oportunidad en la que se podrá apreciar los avances logrados durante los días que estuvo abierta la feria y de la rueda de negocios que cerró con una intención de negociospor alrededor de $us 50 millones.'
      ]);

      Noticias::create([
        'titulo' => 'Empresarios pagan 60.000 por alquiler de Campo Ferial',
        'imagen' => '3.jpg',
        'fecha' => '2017-12-05',
        'fuente' => 'El Potosí',
        'descripcion' => 'Los empresarios privados de Potosí cancelaron 60.000 Bolivianos por el alquiler del Campo Ferial Potosí, lugar donde se desarrollo la Feipobol 2017.
El presidente de este sector, Oscar Gardeazabal, afirmó que para el uso del inmueble se dejó una garantía de  15.000 Bolivianos.
"Independientemente, a la cancelación del alquiler por nuestra cuenta va correr absolutamente toda la refacción", afirmó.
Dijo que inclusive taparán las perforaciones que hicieron en las paredes, además pintarán los ambientes que usaron si es que hubiese algunas manchas.
"Se va hacer la reposición absolutamente del cien por cien de la parte de la pintura de los tres pisos y se va devolver en las misma o mejores condiciones de las que nos han entregado", anunció.
Dijo que el alquiler del Campo Ferial Potosí no contempló el pago de los servicios básicos; por tanto, se realiza la cancelación de manera separada, informó Gardeazabal.
Asimismo, el presidente de los empresarios lamentó que se hayan hecho comentarios irresponsables sobre el deceso de personas.
"Seguramente eran muertos de envidia y lamentó que el potosino es el lobo del potosino. Pareciera que le molesta el éxito de las personas, ya que algunos potosinos tratan de hacer observaciones fuera del lugar y ojalá que el tiempo nos cambie", aseveró.'
      ]);

      Noticias::create([
        'titulo' => 'La Feipobol premia a las empresas destacadas',
        'imagen' => '4.jpg',
        'fecha' => '2017-11-26',
        'fuente' => 'El Potosí',
          'descripcion' => 'La Feria Internacional Potosí-Bolivia (Feipobol) entregó reconocimientos a 31 empresas, instituciones y expositores más destacados que participan en la segunda versión de la actividad institucional.
Los organizadores de la Feipobol entregaron hermosas plaquetas de vidrio que lleva el símbolo de la marca de la feria, el nombre de la empresa y el detalle del reconocimiento de acuerdo al área y su especialidad. Yacimientos Petrolíferos Fiscales de Bolivia recibió una medalla de plata en forma de macuquina corazón.
Entre las empresas que fueron reconocidas son el Club Real Potosí, por puesto creativo; la Cervecería Nacional Potosí, por tener el mejor puesto comercial; Soboce, por el espacio empresarial; Aduana Nacional y Agencia Nacional de Hidrocarburos, por mejor puesto institucional; Banco Unión y Banco FIE, por mejor espacio financiero; Toyosa, por ser el más visitado y tener el mayor parque automotor; Atlas Sweden, por el puesto innovador; Empresa Nacional de Telecomunicaciones, por tener el mejor puesto de la feria y de imagen corporativa; Cecilia Vera, de la Empresa Minera Manquiri, por ser mejor azafata y demostrar conocimiento, explicación y su cordialidad con la gente; y Rio Selva, por tener las mejores operaciones turísticas.
El presidente de la Federación de Empresarios Privados de Potosí, Óscar Gardeazabal, agradeció la confianza de las empresas en la feria y apostar para mostrar sus productos y ofertas. Reiteró el apoyo de la población que visitó la feria los nueve días.
Varios representantes de las empresas que recibieron el reconocimiento, felicitaron a los potosinos por inaugurar y presentar un campo ferial adecuado y en las mejores condiciones para los expositores.'
      ]);


      Noticias::create([
        'titulo' => 'Arranca la Feipobol con mucha expectativa',
        'imagen' => '5.jpg',
        'fecha' => '2017-11-19',
        'fuente' => 'El Potosí',
        'descripcion' => 'Anoche se desarrolló el acto de inauguración de la segunda Feria Internacional Potosí-Bolivia (Feipobol 2017), en medio de gran expectativa y esperanza de que sea el aporte al crecimiento y desarrollo de Potosí.
El acto tuvo la presencia del vicepresidente del Estado Plurinacional, Álvaro García Linera, el gobernador Juan Carlos Cejas y el alcalde Williams Cervantes.
El presidente de la Federación de Empresarios Privados de Potosí, Óscar Gardeazabal, dijo que la feria estrena la moderna estructura del campo ferial, que la organización no fue fácil, pero con esfuerzo y coordinación con las autoridades se logra arrancar con gran participación de la empresa local, nacional e internacional. Anunció que Evo Morales es el presidente honorífico de la feria.
El gobernador Cejas, dijo que con el campo ferial, la Feipobol llega a ser similar a otras ferias, saludó la presencia de los expositores y empresarios, alentará para que el edificio sirva para otras actividades y que seguirá construyendo más infraestructuras.
García Linera, recordó que hace años inauguró otra feria de Potosí bajo las gradas del estadio y que ahora está orgulloso que la feria se haga en un lugar decente y en un edificio que llamará la atención por su calidad. Dijo que en la feria están empresas estatales porque Potosí fue la gloria y seguirá siendo con estos acontecimientos.
La Feipobol 2017 reúne a más de 200 expositores y empresas e diferentes áreas, entre ellas minería, automotor, construcción, industria, comercio, servicios, turismo, gastronomía, emprendimientos, de responsabilidad empresarial y bebidas.
Anoche actuaron los grupos Candente Perversión, Ariel y los Pumas y Super Auto (ex carro show), con una variedad de ritmos musicales.'
      ]);



    }
}
