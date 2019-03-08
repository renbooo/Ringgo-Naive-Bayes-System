<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class Probabilitas_Tersangka extends Controller
{
  public function hitungTersangka(){
    $jml_tertangkap['ya'] = DB::table('data_korban_begal')->where('status_tersangka', 'tertangkap')->where('patroli_rutin', 'ya')->count();
    $jml_tertangkap['tidak'] = DB::table('data_korban_begal')->where('status_tersangka', 'tertangkap')->where('patroli_rutin', 'tidak')->count();

    $jml_kabur['ya'] = DB::table('data_korban_begal')->where('status_tersangka', 'kabur')->where('patroli_rutin', 'ya')->count();
    $jml_kabur['tidak'] = DB::table('data_korban_begal')->where('status_tersangka', 'kabur')->where('patroli_rutin', 'tidak')->count();

    $total['ya'] = DB::table('data_korban_begal')->where('patroli_rutin','ya')->count();
    $total['tidak'] = DB::table('data_korban_begal')->where('patroli_rutin','tidak')->count();

    //perhitungan probabilitas tertangkap
    $pro_tertangkap['ya'] = $jml_tertangkap['ya']/$total['ya'];
    $pro_tertangkap['tidak'] = $jml_tertangkap['tidak']/$total['tidak'];

    //perhitungan probabilitas kabur
    $pro_kabur['ya'] = $jml_kabur['ya']/$total['ya'];
    $pro_kabur['tidak'] = $jml_kabur['tidak']/$total['tidak'];

    //perhitungan total probabilitas ya
    $total_pro['ya'] = $pro_kabur['ya'] + $pro_tertangkap['ya'];

    //perhitungan total probabilitas tidak
    $total_pro['tidak'] = $pro_kabur['tidak'] + $pro_tertangkap['tidak'];

    $jml_tertangkap = (object) $jml_tertangkap;
    $jml_kabur = (object) $jml_kabur;
    $total = (object) $total;
    $pro_tertangkap = (object) $pro_tertangkap;
    $pro_kabur = (object) $pro_kabur;
    $total_pro = (object) $total_pro;
    return view('Probabilitas_Tersangka', compact('jml_tertangkap', 'jml_kabur', 'total', 'pro_tertangkap', 'pro_kabur', 'total_pro'));
  }
}
