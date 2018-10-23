<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NferiaController extends Controller
{
  public function index()
  {

    $titulo = "Venta de Stands";

    return view('feipobol.nferia', compact('titulo'));
  }
}
