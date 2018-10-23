<?php

namespace App\Http\Controllers;


use App\Fotos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FotosController extends Controller
{
  public function index()
  {
    $titulo = "Fotos";  
    $fotos = Fotos::all();
    return view('feipobol.fotos', compact('fotos', 'titulo'));
  }
}
