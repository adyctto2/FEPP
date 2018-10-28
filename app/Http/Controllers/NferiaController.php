<?php

namespace App\Http\Controllers;
use App\Noticias;
use App\Expositores;
use App\Artista;
use App\Eventos;
use App\Fotos;
use Illuminate\Http\Request;
use DateTime;
class NferiaController extends Controller
{
  public function index()
  {

    $titulo = "Venta de Stands";
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
    return view('feipobol.nferia', compact('titulo','todo','importante','grupos', 'mensaje','fecha'));
  }

  public function show($id)
  {

    $titulo = "Venta de Stands";
    $dta = new DateTime();
    $dt=$dta->format('Y-m-d');
    $evento = Eventos::where('fecha','=',$dt)->get()->first();
    $todo = Eventos::all();
    $mensaje = "";
    if(count($evento) > '0'){
      $mensaje = "Hoy en la feria";
      $importante = Eventos::where('id','=',$evento->id)->findOrFail($id);


    }
    else{
      $mensaje = "Proximamente";
       $importante = Eventos::where('id','=',$id)->findOrFail($id);

    }
    $grupos = Artista::where('evento_id','=',$id)->get();
    // dd($grupos);
    $fecha = array('Enero','febreo', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto','septiembre', 'octubre', 'noviembre', 'diciembre');
    return view('feipobol.nferia', compact('titulo','todo','importante','grupos', 'mensaje','fecha'));
  }
}
