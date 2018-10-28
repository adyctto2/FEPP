<?php

use App\Artista;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ArtistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artista::create([
            'nombre' => 'JORGE EDUARDO, TRIBUTO A LA CUMBIA BOLIVIANA',
            'img' => '11.jpg',
            'trabajo1' => 'https://www.youtube.com/watch?v=11cGKpDlSIA',
            'trabajo2' => 'https://www.youtube.com/watch?v=Qt2Viiwoj5c',
            'evento_id' => '1',
            'red_social' => 'https://www.facebook.com/jorgeeduardo.riverourioste'
          ]);
          Artista::create([
            'nombre' => 'ADRIAN Y LOS DADOS NEGROS',
            'img' => '12.jpg',
            'trabajo1' => 'https://www.youtube.com/watch?v=y7mYJwDwuuY',
            'trabajo2' => 'https://www.youtube.com/watch?v=b3N7IbF1mZg',
            'evento_id' => '1',
            'red_social' => 'https://www.facebook.com/Adrian-Y-Los-Dados-Negros-Oficial-304489996351897/'
          ]);

          Artista::create([
            'nombre' => 'DOBLE VIA',
            'img' => '22.jpg',
            'trabajo1' => 'https://www.youtube.com/watch?v=cjZli0fC670',
            'trabajo2' => 'https://www.youtube.com/watch?v=dna5RuQDhIU',
            'evento_id' => '2',
            'red_social' => 'https://www.facebook.com/dobleviabolivia/'
          ]);
          Artista::create([
            'nombre' => 'KUMBIA CON KLASE',
            'img' => '21.jpg',
            'trabajo1' => '',
            'trabajo2' => '',
            'evento_id' => '2',
            'red_social' => 'https://www.facebook.com/'
          ]);
          Artista::create([
            'nombre' => 'CUMBIA DE LA CRUZ',
            'img' => '23.jpg',
            'trabajo1' => 'https://www.youtube.com/watch?v=Mskja4Zp3z4',
            'trabajo2' => 'https://www.youtube.com/watch?v=_-cE_Vdb0pc',
            'evento_id' => '2',
            'red_social' => 'https://www.facebook.com/cumbiadelacruzbolivia/'
          ]);


          Artista::create([
            'nombre' => 'LAS JOYITAS',
            'img' => '31.jpg',
            'trabajo1' => '',
            'trabajo2' => '',
            'evento_id' => '3',
            'red_social' => ''
          ]);
          Artista::create([
            'nombre' => 'GRUPO AROMA DEL AMOR',
            'img' => '32.jpg',
            'trabajo1' => '',
            'trabajo2' => '',
            'evento_id' => '3',
            'red_social' => ''
          ]);
          Artista::create([
            'nombre' => 'INTERNACIONAL CLIMAX',
            'img' => '33.jpg',
            'trabajo1' => 'https://www.youtube.com/watch?v=x-_KbgPjo1o',
            'trabajo2' => 'https://www.youtube.com/watch?v=zIQXueDrvRE',
            'evento_id' => '3',
            'red_social' => ''
          ]);
          Artista::create([
            'nombre' => 'GRUPO EXPRESO',
            'img' => '34.jpg',
            'trabajo1' => 'https://www.youtube.com/watch?v=FzQQdL-vHpw',
            'trabajo2' => 'https://www.youtube.com/watch?v=v5mRrl5s6r4',
            'evento_id' => '3',
            'red_social' => 'https://www.facebook.com/Grupo-Expreso-La-Paz-Bolivia-178071232364/'
          ]);

          Artista::create([
            'nombre' => 'IVAN CORNEJO',
            'img' => '41.jpg',
            'trabajo1' => 'https://www.youtube.com/watch?v=l8nwS_vvHiM',
            'trabajo2' => 'https://www.youtube.com/watch?v=WR0JlnQiXWM',
            'evento_id' => '4',
            'red_social' => ''
          ]);
          Artista::create([
            'nombre' => 'ALISON SANTOS',
            'img' => '42.jpg',
            'trabajo1' => 'https://www.youtube.com/watch?v=U-iZYgjvlIQ',
            'trabajo2' => 'https://www.youtube.com/watch?v=3vgyibGZurY',
            'evento_id' => '4',
            'red_social' => 'https://www.youtube.com/channel/UCEXBgeSToWwEzgq9GDkkBJg'
          ]);

          Artista::create([
            'nombre' => 'ALBA',
            'img' => '51.jpg',
            'trabajo1' => '',
            'trabajo2' => '',
            'evento_id' => '5',
            'red_social' => ''
          ]);
          Artista::create([
            'nombre' => 'MAMBA',
            'img' => '52.jpg',
            'trabajo1' => '',
            'trabajo2' => '',
            'evento_id' => '5',
            'red_social' => ''
          ]);
          Artista::create([
            'nombre' => 'PITY ZAPATA Y EL GRUPO SCORPIO',
            'img' => '53.jpg',
            'trabajo1' => 'https://www.youtube.com/watch?v=WOj0f5HOIGY',
            'trabajo2' => 'https://www.youtube.com/watch?v=jLPHm0ys1Yg',
            'evento_id' => '5',
            'red_social' => 'https://www.facebook.com/pity.zapataramirez'
          ]);

          
          Artista::create([
            'nombre' => 'ODA',
            'img' => '61.jpg',
            'trabajo1' => '',
            'trabajo2' => '',
            'evento_id' => '6',
            'red_social' => 'https://www.facebook.com/ODA-1436190463070994/'
          ]);
          Artista::create([
            'nombre' => 'QOLQE T\'IKAS',
            'img' => '62.jpg',
            'trabajo1' => 'https://www.youtube.com/watch?v=9T-99SfZKHI',
            'trabajo2' => 'https://www.youtube.com/watch?v=lk71kx_BBlc',
            'evento_id' => '6',
            'red_social' => 'https://www.facebook.com/QOLQE-TIKAS-150855555009686/'
          ]);
          Artista::create([
            'nombre' => 'ELECCION MISS FEIPOBOL 2018',
            'img' => '63.jpg',
            'trabajo1' => '',
            'trabajo2' => '',
            'evento_id' => '6',
            'red_social' => ''
          ]);
          Artista::create([
            'nombre' => 'SAVIA ANDINA',
            'img' => '64.jpg',
            'trabajo1' => 'https://youtu.be/keSbxxXxopw',
            'trabajo2' => 'https://youtu.be/UuiRClpwC4M',
            'evento_id' => '6',
            'red_social' => 'https://www.facebook.com/SaviaAndinaOficial/'
          ]);

          Artista::create([
            'nombre' => 'LA NUEVA SKINA',
            'img' => '71.jpg',
            'trabajo1' => 'https://www.youtube.com/watch?v=X6fLaxEtUKc',
            'trabajo2' => 'https://www.youtube.com/watch?v=tW3hW3S7Qvo',
            'evento_id' => '7',
            'red_social' => 'https://www.facebook.com/profile.php?id=100024347199720&ref=br_rs'
          ]);
          Artista::create([
            'nombre' => 'ARIEL Y LOS PUMAS',
            'img' => '72.jpg',
            'trabajo1' => 'https://www.youtube.com/watch?v=tQgiZMr0sFY',
            'trabajo2' => 'https://www.youtube.com/watch?v=tW3hW3S7Qvo',
            'evento_id' => '7',
            'red_social' => 'https://www.facebook.com/arielylospumas/'
          ]);
          Artista::create([
            'nombre' => 'SABOR Y SABOR',
            'img' => '73.jpg',
            'trabajo1' => 'https://www.youtube.com/watch?v=kd7wiIgTBkA',
            'trabajo2' => 'https://www.youtube.com/watch?v=rBL34pKQSvo',
            'evento_id' => '7',
            'red_social' => 'https://www.facebook.com/WilsonMoralesSaborSabor/'
          ]);

          Artista::create([
            'nombre' => 'ALMA ETERNA',
            'img' => '81.jpg',
            'trabajo1' => 'https://www.youtube.com/watch?v=EQvrMuGV7aw',
            'trabajo2' => 'https://www.youtube.com/watch?v=6TGPzMm-NSk',
            'evento_id' => '8',
            'red_social' => 'https://www.facebook.com/alma.eterna.3/'
          ]);
          Artista::create([
            'nombre' => 'LOS JAMES',
            'img' => '82.jpg',
            'trabajo1' => 'https://www.youtube.com/watch?v=7gVBqcd-LvI',
            'trabajo2' => 'https://youtu.be/mwxvpkKD-O8',
            'evento_id' => '8',
            'red_social' => 'https://www.facebook.com/losjimmyjames/'
          ]);
          Artista::create([
            'nombre' => 'ARMADURA',
            'img' => '83.jpg',
            'trabajo1' => 'https://www.youtube.com/watch?v=Y2QNI84J43s',
            'trabajo2' => 'https://www.youtube.com/watch?v=hQByE86lGOE',
            'evento_id' => '8',
            'red_social' => 'https://www.facebook.com/armadurabo/'
          ]);
          Artista::create([
            'nombre' => 'ALCOHOLIKA L.C.',
            'img' => '84.jpg',
            'trabajo1' => 'https://www.youtube.com/watch?v=lfMsDi1e4i8',
            'trabajo2' => 'https://www.youtube.com/watch?v=U9V8qe298G0',
            'evento_id' => '8',
            'red_social' => 'https://www.facebook.com/alcoholika/'
          ]);
          Artista::create([
            'nombre' => 'ALCOHOLIKA L.C.',
            'img' => '84.jpg',
            'trabajo1' => 'https://www.youtube.com/watch?v=lfMsDi1e4i8',
            'trabajo2' => 'https://www.youtube.com/watch?v=U9V8qe298G0',
            'evento_id' => '8',
            'red_social' => 'https://www.facebook.com/alcoholika/'
          ]);

          
          Artista::create([
            'nombre' => 'COCO AGUILAR Y LOS T-CUAS',
            'img' => '91.jpg',
            'trabajo1' => 'https://www.youtube.com/watch?v=37-w9lNN9L0',
            'trabajo2' => '',
            'evento_id' => '9',
            'red_social' => 'https://www.facebook.com/Coco-Aguilar-los-T-cuas-2042655425971772/'
          ]);
          Artista::create([
            'nombre' => 'MISTI-K SWING',
            'img' => '92.jpg',
            'trabajo1' => 'https://www.youtube.com/watch?v=aykBA3lEq2k',
            'trabajo2' => 'https://www.youtube.com/watch?v=cQ1USlvl_GA',
            'evento_id' => '9',
            'red_social' => 'https://www.facebook.com/MistikSwing/'
          ]);
          Artista::create([
            'nombre' => 'JAMBAO',
            'img' => '93.jpg',
            'trabajo1' => 'https://www.youtube.com/watch?v=SJl8AgTu0Vg',
            'trabajo2' => 'https://www.youtube.com/watch?v=iSIRviciSrI',
            'evento_id' => '9',
            'red_social' => 'https://www.facebook.com/Jambaodeargentinaoficial/'
          ]);
          
          Artista::create([
            'nombre' => 'RIGOR SAMSA',
            'img' => '101.jpg',
            'trabajo1' => '',
            'trabajo2' => '',
            'evento_id' => '10',
            'red_social' => 'https://www.facebook.com/rigorsamsa/'
          ]);
          Artista::create([
            'nombre' => 'CALIPSO SKA',
            'img' => '102.jpg',
            'trabajo1' => 'https://www.youtube.com/watch?v=MkBhBrg1Vys',
            'trabajo2' => 'https://www.youtube.com/watch?v=dwUmajrMs1s',
            'evento_id' => '10',
            'red_social' => 'https://www.facebook.com/calipsoska'
          ]);
          Artista::create([
            'nombre' => 'LA MOSCA',
            'img' => '103.jpg',
            'trabajo1' => 'https://www.youtube.com/watch?v=w6Bz1eq0RSQ',
            'trabajo2' => 'https://www.youtube.com/watch?v=KnS2gG-1n2o',
            'evento_id' => '10',
            'red_social' => 'https://www.facebook.com/lamoscaofical/'
          ]);
    }
}
