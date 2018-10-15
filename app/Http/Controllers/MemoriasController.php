<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemoriasController extends Controller
{
  public function index()
  {
    $titulo="Memoria Institucional";
    return view('memorias.index', compact('titulo'));
  }
}
