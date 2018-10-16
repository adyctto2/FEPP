<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
  public function index()
  {
    $titulo="Acerca de";
    return view('about.index', compact('titulo'));
  }
}
