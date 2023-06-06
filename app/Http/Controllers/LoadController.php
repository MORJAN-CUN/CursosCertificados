<?php

namespace App\Http\Controllers;

use App\Imports\LoadsImport;
use App\Mail\LoadMailable;
use App\Models\Load;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class LoadController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    $loadscount = Load::all();
    $texto = trim($request->get('texto'));
    $loads = Load::where('nombre_estudiante', 'LIKE', '%' . $texto . '%')
      ->orWhere('numero_documento', 'LIKE', '%' . $texto . '%')
      ->orderByDesc('id')
      ->paginate(15);
    return view('loads.index', compact('loadscount', 'texto', 'loads'));
  }

  /**
   * Show the form for importing a new file whit certificates for generate.
   *
   * @return \Illuminate\Http\Response
   */
  public function load(Request $request)
  {
    // VALIDACIO DEL CAMPO QUE TRAE EL ARCHIVO DESDE EL FORMULARIO
    $request->validate([
      'file' => 'required'
    ]);
    $texto = trim($request->get('texto'));
    $loadscount = Load::all();
    $loads = Load::where('nombre_estudiante', 'LIKE', '%' . $texto . '%')
      ->orWhere('numero_documento', 'LIKE', '%' . $texto . '%')
      ->orderByDesc('id')
      ->paginate(15);

    try {
      Excel::import(new LoadsImport, request()->file('file'));
    } catch (\Throwable $th) {
      return redirect()->route('loads.index', compact('loadscount', 'texto', 'loads'))->dangerBanner('Archivo no cargado, revisar por que: ' . $th);
    }

    
    // AQUI SE EXTRAE LA INFROMACION DE LA TABLA PARA TRAER LOS CAMPOS EMAIL,NOMBRE,CURSO,FECHAREALIZACION.
    $loads = DB::table('loads')->select('email','nombre_estudiante','nombre_producto','fecha_realización')->distinct()->get();
    foreach ($loads as $load){
      $mail = $load->email;
      $nombre = $load->nombre_estudiante;
      $curso = $load->nombre_producto;

      // FORMATEAMOS FECHA REALIZACION DEL CURSO COPIA
      $day_r = Carbon::parse($load->fecha_realización)->format('d');
      $dateMonth = Carbon::parse($load->fecha_realización)->locale('es');
      $month_r = $dateMonth->monthName;
      $year_r = Carbon::parse($load->fecha_realización)->format('Y');

      try {
          Mail::to($mail)->queue(new LoadMailable($nombre,$curso,$day_r,$month_r,$year_r));
      } catch (\Throwable $th) {
          return $th->getMessage();
          return redirect()->route('loads.index', compact('loadscount', 'texto', 'loads'))->dangerBanner('Email no se envio, verificar!.');
      }
    }
    return redirect()->route('loads.index', compact('loadscount', 'texto', 'loads'))->banner('Registro cargado exitosamente.');
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return "create";
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    return "EDIT";
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Load $load)
  {
    try {
      $load->update($request->all());
    } catch (\Throwable $th) {
      return redirect()->route('loads.index')->dangerBanner('Registro no modificado, revisar por que: ' . $th);
    }
    return redirect()->route('loads.index')->banner('Registro actualizado exitosamente.');

    // return $request;
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Load $load)
  {
    try {
      $load->delete();
    } catch (\Throwable $th) {
      return redirect()->route('loads.index')->dangerBanner('Registro no eliminad, revisar por que: ' . $th);
    }
    return redirect()->route('loads.index')->banner('Registro eliminado exitosamente.');
  }
}
