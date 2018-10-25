<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentasController extends Controller
{
  public function index()
  {

    $titulo = "VENTA DE STANDS";

    return view('feipobol.venta', compact('titulo'));
  }
}
