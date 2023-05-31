<?php

namespace App\Http\Controllers;

use App\Models\Load;
use Carbon\Carbon;
use PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

class consultController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('students.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
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
  public function show(Request $request)
  {
    $documento = $request->documento;
    $studentCertificates = Load::where('numero_documento', $documento)->get();
    return view('students.show', compact('studentCertificates', 'documento'));
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function printPDF($id)
  {
    // CAPTURAMOS INFORMACION DE CERTIFICADO COMPLETO
    $report = Load::findOrFail($id);

    // FORMATEAMOS FECHA REALIZACION DEL CURSO
    $day_r = Carbon::parse($report->fecha_realización)->format('d');
    $dateMonth = Carbon::parse($report->fecha_realización)->locale('es');
    $month_r = $dateMonth->monthName;
    $year_r = Carbon::parse($report->fecha_realización)->format('Y');

    // GENERAMOS URL PARA EL QR CON LOS PARAMETROS DEL CERTIFICADO GENERADO
    $base = $_ENV['APP_URL'];
    $name = $report->nombre_estudiante;
    $document = $report->numero_documento;
    $date_realization = $report->fecha_realización;
    $consecutive = now()->format('Ym') . $id;
    $url_validate = $base . "validateQr/" . $name . "/" . $document .  "/" . $date_realization;
    $qr = QrCode::size(100)
      ->backgroundColor(143, 218, 0, 0.5)
      ->color(31, 41, 54)
      ->margin(2)
      ->generate($url_validate);
    // GENERAMOS LA FECHA DE EXPEDICION SI ES UN CERTIFICADO NUEVO
    $date = now()->locale('es');
    $day = now()->format('d');
    $month = $date->monthName;
    $year = now()->format('Y');

    // PASAMOS LOS DEMAS PARAMETROS PARA GENERAR EL CERTIFICADO
    $cons = now()->format('Ym');
    $pdf = PDF::loadView('students.pdf', compact('report', 'cons', 'day', 'month', 'year', 'qr', 'day_r', 'month_r', 'year_r'));
    $pdf->setPaper('A5', 'landscape');
    return $pdf->download($report->nombre_estudiante . $report->numero_documento . '.pdf');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function validateQr(Request $request)
  {
    return $request->name . "/" . $request->document;
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
