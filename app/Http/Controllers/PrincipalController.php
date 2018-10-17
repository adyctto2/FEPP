<?php

namespace App\Http\Controllers;

use App\Entidades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrincipalController extends Controller
{
  public function entidadeShow()
  {
    $ent1 = Entidades::find(1);
    $ent2 = Entidades::find(2);
    $ent3 = Entidades::find(7);
    // dd($entidades);
    //
    // $titulo="Entidades Afiliadas";
    return view('index', compact('ent1', 'ent2','ent3'));
  }
}
