<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
  public function index()
  {
    $titulo="Cursos";
    return view('cursos.index', compact('titulo'));
  }
}
