<?php

namespace App\Http\Controllers;
use App\Noticias;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FeipobolController extends Controller
{
  public function index()
  {



    return view('feipobol.index','not1', 'not2');
  }

  public function show()
  {
     $not1 = Noticias::where('titulo','like','%feipobol%')->get()->first();
      $not2 = Noticias::where('titulo','like','%feipobol%')->get()->last();
     //
     // $not1 = Noticias::find(1);
     // $not2 = Noticias::find(2);
    return view('feipobol.index', compact('not1', 'not2'));
  }
}
