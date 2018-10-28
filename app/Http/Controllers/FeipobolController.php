<?php

namespace App\Http\Controllers;
use App\Noticias;
use App\Expositores;
use App\Artista;
use App\Eventos;
use App\Fotos;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use DateTime;

class FeipobolController extends Controller
{
  public function index()
  {



    return view('feipobol.index','not1', 'not2');
  }

  public function show()
  {
     $not1 = Noticias::where('titulo','like','%feipobol%')->get()->first();
      $not2 = Noticias::where('titulo','like','%feipobol%')->get()->last();

        $expositores1 = Expositores::latest('id')
                      ->take(3)
                      ->get();
        $expositores = Expositores::first()
                      ->take(3)
                      ->get();

        $exp2 =Expositores::find(1);
        $exp3 = Expositores::find(2);
        $exp4= Expositores::find(3);
        $exp5 =Expositores::find(4);
        $exp6 = Expositores::find(8);
        $exp7= Expositores::find(6);

        $f1 = Fotos::find(1);
        $f2 = Fotos::find(2);
        $f3 = Fotos::find(3);
        $f4 = Fotos::find(4);
        $f5 = Fotos::find(5);
        $f6 = Fotos::find(6);

     // $not1 = Noticias::find(1);
     // $not2 = Noticias::find(2);

     $dta = new DateTime();
     $dt=$dta->format('Y-m-d');
     $evento = Eventos::where('fecha','=',$dt)->get()->first();
     $todo = Eventos::all();
     $mensaje = "";
     if(count($evento) > '0'){
       $mensaje = "Hoy en la feria";
       $importante = Eventos::where('id','=',$evento->id)->get();
     }
     else{
       $mensaje = "Proximamente";
        $importante = Eventos::where('id','=','1')->get()->last();
     }
     $grupos = Artista::where('evento_id','=',$importante->id)->get();
     $fecha = array('Enero','febreo', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto','septiembre', 'octubre', 'noviembre', 'diciembre');
    return view('feipobol.index', compact('not1', 'not2','expositores','expositores1','exp2','exp3','exp4','exp5','exp6','exp7','f1','f2','f3','f4','f5','f6','todo','importante','grupos', 'mensaje','fecha'));
  }
}
