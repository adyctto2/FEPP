<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{
  public function index()
  {
    $titulo="Noticias";
    return view('noticias.index', compact('titulo'));
  }
}
