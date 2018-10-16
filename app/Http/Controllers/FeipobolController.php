<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeipobolController extends Controller
{
  public function index()
  {
    return view('feipobol.index');
  }
}
