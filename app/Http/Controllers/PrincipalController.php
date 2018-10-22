<?php

namespace App\Http\Controllers;

use App\Entidades;
use App\Noticias;
use App\Cursos;
use App\Contador;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PrincipalController extends Controller
{
//   public function getIp(){
//     foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
//         if (array_key_exists($key, $_SERVER) === true){
//             foreach (explode(',', $_SERVER[$key]) as $ip){
//                 $ip = trim($ip); // just to be safe
//                 if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
//                     return $ip;
//                 }
//             }
//         }
//     }
// }
  public function Show()
  {
    $ent1 = Entidades::find(1);
    $ent2 = Entidades::find(2);
    $ent3 = Entidades::find(7);
    $ent4 = Entidades::find(12);

    $not1 = Noticias::find(1);
    $not2 = Noticias::find(2);
    $not3 = Noticias::find(3);
    $not4 = Noticias::find(4);

    $curso1 = Cursos::find(1);
    $curso2 = Cursos::find(2);
    $curso3 = Cursos::find(3);
    $curso4 = Cursos::find(4);
    // dd($entidades);
    //   $clientIP = \ Request :: ip ();
    //   $fecha = Carbon::createFromFormat('d-m-Y', $request->fecha)->toDateString();
    // $contador= new Contador;
    //
    // $contador->ip=$clientIP;
    // $contador->fecha=$fecha;


    // $variable = Noticias::find($id);
    // if(Cache::has($id)==false){
    //     Cache::add($id,'contador',0.30);
    //     $variable->total_visitas++;
    //     $variable->save();
    //   }

    // $titulo="Entidades Afiliadas";
    return view('index', compact('ent1', 'ent2','ent3','ent4','not1', 'not2','not3','not4','curso1','curso2','curso3','curso4'));
  }
  public function getHome()
  {

    return response(view('index'))->cookie('cookie1', 'valor','60');

    //return view('index')
  }
}
