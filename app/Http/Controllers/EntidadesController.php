<?php

namespace App\Http\Controllers;

use App\Entidades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntidadesController extends Controller
{
  public function index()
  {
    $entidades = Entidades::all()->sortbyDesc('id');

    // dd($entidades);

    $titulo="Entidades Afiliadas";
    return view('entidades.index', compact('titulo', 'entidades'));

  }
  public function show($id)
  {
    $ent = Entidades::findOrFail($id);
    $entidades = Entidades::get();

    // dd($entidadd);
    $titulo="Entidades Afiliadas";
    return view('entidades.show', compact('titulo', 'ent','entidades'));
  }
}
