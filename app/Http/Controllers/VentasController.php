<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentasController extends Controller
{
  public function index()
  {

    $titulo = "Venta de Stands";

    return view('feipobol.venta', compact('titulo'));
  }
}
