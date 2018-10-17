<?php

namespace App\Http\Controllers;

use App\Entidades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntidadesController extends Controller
{
  public function index()
  {
    $entidades = Entidades::all();
    $ent1 = Entidades::find(1);

    // dd($entidades);

    $titulo="CONSEJO DIRECTIVO";
    return view('entidades.index', compact('titulo', 'entidades','ent1'));

  }
  public function show($id)
  {
    $ent = Entidades::findOrFail($id);
    $entidades = Entidades::get();
    $ent1 = Entidades::find(1);
    // dd($entidadd);
    $titulo="CONSEJO DIRECTIVO";
    return view('entidades.show', compact('titulo', 'ent','entidades','ent1'));
  }
}
