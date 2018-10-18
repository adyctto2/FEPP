<?php

namespace App\Http\Controllers;

use App\Cursos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursosController extends Controller
{
  public function index()
  {
      $cursos=Cursos::all();
     $curso1 = Cursos::find(1);

    $titulo="Cursos";
    return view('cursos.index', compact('titulo','curso1','cursos'));
  }

  public function show($id)
  {
      $cur = Cursos::findOrFail($id);
     $cursos=Cursos::all();
     $curso1 = Cursos::find(1);

    $titulo="Cursos";
    return view('cursos.index', compact('titulo','curso1', 'cursos','cur'));
  }

}
