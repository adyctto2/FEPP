<?php

namespace App\Http\Controllers;

use App\Expositores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpositoresController extends Controller
{
  public function index()
  {
      $exp1=Expositores::find(1);
      $expo= Expositores::all();

    return view('feipobol.expositores', compact('expo','exp1'));
  }


  public function indexCreate(){
    $expo = Expositores::all();
    $titulo ="Lista de Expositor";
    return view('feipobol.createExpositor',compact('titulo','expo'));
  }
  public function create(){
    $titulo = "Crear Expositor";
    return view('feipobol.nuevoExpositor',compact('titulo'));
  }
  public function show($id)
  {
    $exp1 = Expositores::findOrFail($id);
    $expo= Expositores::all();
    // $entidades = Entidades::get();
    // $ent1 = Entidades::find(1);
    // dd($entidadd);
    // $titulo="CONSEJO DIRECTIVO";
    return view('feipobol.expositores', compact( 'exp1','expo'));
  }
  public function store(Request $request){
      if($request->hasfile('imagen'))
        {
          $file = $request->file('imagen');
          $name=time().$file->getClientOriginalName();
          $file->move(public_path().'/img/expositores/', $name);
        }
        $exp = new Expositores;
      $exp->nombre = $request->input('titulo');
      $exp->direccion = $request->input('direccion');
      $exp->descripcion = $request->input('descripcion');
      $exp->telefono = $request->input('telefono');
      $exp->website = '';
      $exp->facebook = '';
      $exp->youtube = '';
      $exp->instagram = '';
      $exp->twitter = '';

      $exp->img=$name;
      $exp->save();
      
      return redirect('/adcf/adcfStands')->with('success', 'correcto');
  }
}
