<?php

namespace App\Http\Controllers;

use App\Expositores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpositoresController extends Controller
{
  public function index()
  {
      $exp1=Expositores::find(1);
      $expo= Expositores::all();

    return view('feipobol.expositores', compact('expo','exp1'));
  }



  public function show($id)
  {
    $exp1 = Expositores::findOrFail($id);
    $expo= Expositores::all();
    // $entidades = Entidades::get();
    // $ent1 = Entidades::find(1);
    // dd($entidadd);
    // $titulo="CONSEJO DIRECTIVO";
    return view('feipobol.expositores', compact( 'exp1','expo'));
  }
}
