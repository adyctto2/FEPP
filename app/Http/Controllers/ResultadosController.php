<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultadosController extends Controller
{
  public function index()
  {
    $titulo="Resultados Feipobol";
    return view('feipobol.resultados', compact('titulo'));
  }
}
