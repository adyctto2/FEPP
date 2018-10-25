<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function index()
  {
    $titulo="Administracion de contenido";
    return view('layoutAdmi', compact('titulo'));
  }
}
