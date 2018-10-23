<?php

namespace App\Http\Controllers;

use App\Expositores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpositoresController extends Controller
{
  public function index()
  {
    return view('feipobol.expositores');
  }



  public function show($id)
  {
    $ent = Expositores::findOrFail($id);
    // $entidades = Entidades::get();
    // $ent1 = Entidades::find(1);
    // dd($entidadd);
    // $titulo="CONSEJO DIRECTIVO";
    return view('feipobol.expositores', compact( 'ent','entidades','ent1'));
  }
}
