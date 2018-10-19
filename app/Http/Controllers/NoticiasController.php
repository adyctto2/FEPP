<?php

namespace App\Http\Controllers;

use App\Noticias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoticiasController extends Controller
{
  public function index()
  {
    $noticias = Noticias::all();
    $not1 = Noticias::find(1);


    $titulo="Noticias";


    return view('noticias.index', compact('titulo','noticias','not1'));


  }

  public function show($id)
  {
    $not = Noticias::findOrFail($id);
    $noticias = Noticias::get();
    $not1 = Noticias::find(1);


    $titulo="Noticias";


    return view('noticias.show', compact('titulo','noticias','not1','not'));


  }

}