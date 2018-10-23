<?php

namespace App\Http\Controllers;
use App\Noticias;
use Illuminate\Http\Request;

class FeipobolLayoutController extends Controller
{
  public function show($id)
  {

    $not1 = Noticias::where('titulo','like','%feipobol%')->get()->first();



    $variable = Noticias::find($id);
    if(Cache::has($id)==false){
        Cache::add($id,'contador',0.30);
        $variable->total_visitas++;
        $variable->save();
      }
    return view('layoutFeipobol', compact('noticias','not1','not', 'variable'));


  }

  public function index()
  {
    $not1 = Noticias::where('titulo','like','%feipobol%')->get()->first();
    return view('feipobol.noticias');
  }
}
