<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class Probabilitas_Keadaan extends Controller
{
  public function hitungKeadaan(){
    $jml_ramai['ya'] = DB::table('data_korban_begal')->where('keadaan_lokasi', 'ramai')->where('patroli_rutin', 'ya')->count();
    $jml_ramai['tidak'] = DB::table('data_korban_begal')->where('keadaan_lokasi', 'ramai')->where('patroli_rutin', 'tidak')->count();

    $jml_sepi['ya'] = DB::table('data_korban_begal')->where('keadaan_lokasi', 'sedang')->where('patroli_rutin', 'ya')->count();
    $jml_sepi['tidak'] = DB::table('data_korban_begal')->where('keadaan_lokasi', 'sedang')->where('patroli_rutin', 'tidak')->count();

    $jml_sedang['ya'] = DB::table('data_korban_begal')->where('keadaan_lokasi', 'sepi')->where('patroli_rutin', 'ya')->count();
    $jml_sedang['tidak'] = DB::table('data_korban_begal')->where('keadaan_lokasi', 'sepi')->where('patroli_rutin', 'tidak')->count();

    $total['ya'] = DB::table('data_korban_begal')->where('patroli_rutin','ya')->count();
    $total['tidak'] = DB::table('data_korban_begal')->where('patroli_rutin','tidak')->count();

    //perhitungan probabilitas ramai
    $pro_ramai['ya'] = $jml_ramai['ya']/$total['ya'];
    $pro_ramai['tidak'] = $jml_ramai['tidak']/$total['tidak'];

    //perhitungan probabilitas sepi
    $pro_sepi['ya'] = $jml_sepi['ya']/$total['ya'];
    $pro_sepi['tidak'] = $jml_sepi['tidak']/$total['tidak'];

    //perhitungan probabilitas sedang
    $pro_sedang['ya'] = $jml_sedang['ya']/$total['ya'];
    $pro_sedang['tidak'] = $jml_sedang['tidak']/$total['tidak'];

    //perhitungan total probabilitas ya
    $total_pro['ya'] = $pro_sedang['ya'] + $pro_sepi['ya'] + $pro_ramai['ya'];

    //perhitungan total probabilitas tidak
    $total_pro['tidak'] = $pro_sedang['tidak'] + $pro_sepi['tidak'] + $pro_ramai['tidak'];

    $jml_ramai = (object) $jml_ramai;
    $jml_sepi = (object) $jml_sepi;
    $jml_sedang = (object) $jml_sedang;
    $total = (object) $total;
    $pro_ramai = (object) $pro_ramai;
    $pro_sepi = (object) $pro_sepi;
    $pro_sedang = (object) $pro_sedang;
    $total_pro = (object) $total_pro;
    return view('Probabilitas_Keadaan', compact('jml_ramai', 'jml_sepi', 'jml_sedang', 'total', 'pro_ramai', 'pro_sepi', 'pro_sedang', 'total_pro'));
  }
}
