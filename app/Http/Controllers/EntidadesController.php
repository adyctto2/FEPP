<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntidadesController extends Controller
{
  public function index()
  {
    $titulo="Entidades Afiliadas";
    return view('entidades.index', compact('titulo'));
  }
}
