<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
  public function index()
  {
    $titulo="Contáctanos";
    return view('contacto.index', compact('titulo'));
  }
}
