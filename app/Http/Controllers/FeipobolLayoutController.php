<?php

namespace App\Http\Controllers;
use App\Noticias;
use Illuminate\Http\Request;

class FeipobolLayoutController extends Controller
{
  public function show($id)
  {

    $not1 = Noticias::find(1);



    $variable = Noticias::find($id);
    if(Cache::has($id)==false){
        Cache::add($id,'contador',0.30);
        $variable->total_visitas++;
        $variable->save();
      }
    return view('layoutFeipobol', compact('noticias','not1','not', 'variable'));


  }
}
