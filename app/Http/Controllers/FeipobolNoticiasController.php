<?php

namespace App\Http\Controllers;

use Cache;
use App\Noticias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeipobolNoticiasController extends Controller
{
  public function show($id){
    $titulo="prueba ";
    $not = Noticias::findOrFail($id);
    $noticias = Noticias::get();
    $notis = Noticias::where('titulo','like','%feipobol%')->get();

    $variable = Noticias::find($id);
    if(Cache::has($id)==false){
        Cache::add($id,'contador',0.30);
        $variable->total_visitas++;
        $variable->save();
      }
      $not1 = Noticias::where('titulo','like','%feipobol%')->get()->first();
       $not2 = Noticias::where('titulo','like','%feipobol%')->get()->last();
    return view('feipobol.noticias', compact('titulo','not','variable', 'noticias','not1','not2','notis'));
  }

  public function index()
  {
    $not = Noticias::where('titulo','like','%feipobol%')->get()->first();
    $notis = Noticias::where('titulo','like','%feipobol%')->get();
    $id=$not->id;
    // dd($id);
    $variable = Noticias::find($id);
    if(Cache::has($id)==false){
        Cache::add($id,'contador',0.30);
        $variable->total_visitas++;
        $variable->save();
      }


    return view('feipobol.noticias', compact('not','variable','notis'));
  }
}
