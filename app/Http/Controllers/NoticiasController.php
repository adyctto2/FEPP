<?php

namespace App\Http\Controllers;
use Cache;
use App\Noticias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;

class NoticiasController extends Controller
{
  public function index()
  {
    $noticias = Noticias::all();
    $not1 = Noticias::find(1);


    $titulo="Noticias";


    return view('noticias.index', compact('titulo','noticias','not1'));


  }
  public function indexCreate(){
    $titulo = "Lista de noticias";
    $noticias = Noticias::all();
    return view('noticias.create', compact('titulo','noticias'));
  }
  public function create(){

    $titulo = "Crear Noticia";
    return view('noticias.nuevo', compact('titulo'));
  }
  public function store(Request $request)
  {

      $dta = new DateTime();
      $dt=$dta->format('Y-m-d');
      if($request->hasfile('imagen'))
        {
          $file = $request->file('imagen');
          $name=time().$file->getClientOriginalName();
          $file->move(public_path().'/img/noticias/', $name);
        }
        $noticia = new Noticias;
      $noticia->titulo = $request->input('titulo');
      $noticia->fuente = $request->input('fuente');
      $noticia->descripcion = $request->input('descripcion');
      $noticia->total_visitas = '0';
      $noticia->fecha = $dt;

      $noticia->imagen=$name;
      $noticia->save();

      return redirect('/adcf/adcfNoticia')->with('success', 'correcto');
  }
  public function show($id)
  {
    $not = Noticias::findOrFail($id);
    $noticias = Noticias::get();
    $not1 = Noticias::find(1);

    $titulo="Noticias";

    $variable = Noticias::find($id);
    if(Cache::has($id)==false){
        Cache::add($id,'contador',0.30);
        $variable->total_visitas++;
        $variable->save();
      }
    return view('noticias.show', compact('titulo','noticias','not1','not', 'variable'));


  }

}
