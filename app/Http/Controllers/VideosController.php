<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class VideosController extends Controller
{
  public function index()
  {
    $titulo = "Galeria de Videos";  
    return view('feipobol.videos', compact('titulo'));
  }
}
