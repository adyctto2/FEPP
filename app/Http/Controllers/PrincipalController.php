<?php

namespace App\Http\Controllers;

use App\Entidades;
use App\Noticias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrincipalController extends Controller
{
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
    // dd($entidades);
    //
    // $titulo="Entidades Afiliadas";
    return view('index', compact('ent1', 'ent2','ent3','ent4','not1', 'not2','not3','not4'));
  }
}
