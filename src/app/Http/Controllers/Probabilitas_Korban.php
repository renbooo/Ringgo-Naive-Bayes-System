<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class Probabilitas_Korban extends Controller
{
  public function hitungKorban(){
    $jml_luka['ya'] = DB::table('data_korban_begal')->where('keadaan_korban', 'luka-luka')->where('patroli_rutin', 'ya')->count();
    $jml_luka['tidak'] = DB::table('data_korban_begal')->where('keadaan_korban', 'luka-luka')->where('patroli_rutin', 'tidak')->count();

    $jml_kritis['ya'] = DB::table('data_korban_begal')->where('keadaan_korban', 'kritis')->where('patroli_rutin', 'ya')->count();
    $jml_kritis['tidak'] = DB::table('data_korban_begal')->where('keadaan_korban', 'kritis')->where('patroli_rutin', 'tidak')->count();

    $jml_tewas['ya'] = DB::table('data_korban_begal')->where('keadaan_korban', 'tewas')->where('patroli_rutin', 'ya')->count();
    $jml_tewas['tidak'] = DB::table('data_korban_begal')->where('keadaan_korban', 'tewas')->where('patroli_rutin', 'tidak')->count();

    $total['ya'] = DB::table('data_korban_begal')->where('patroli_rutin','ya')->count();
    $total['tidak'] = DB::table('data_korban_begal')->where('patroli_rutin','tidak')->count();

    //perhitungan probabilitas luka-luka
    $pro_luka['ya'] = $jml_luka['ya']/$total['ya'];
    $pro_luka['tidak'] = $jml_luka['tidak']/$total['tidak'];

    //perhitungan probabilitas kritis
    $pro_kritis['ya'] = $jml_kritis['ya']/$total['ya'];
    $pro_kritis['tidak'] = $jml_kritis['tidak']/$total['tidak'];

    //perhitungan probabilitas tewas
    $pro_tewas['ya'] = $jml_tewas['ya']/$total['ya'];
    $pro_tewas['tidak'] = $jml_tewas['tidak']/$total['tidak'];

    //perhitungan total probabilitas ya
    $total_pro['ya'] = $pro_tewas['ya'] + $pro_kritis['ya'] + $pro_luka['ya'];

    //perhitungan total probabilitas tidak
    $total_pro['tidak'] = $pro_tewas['tidak'] + $pro_kritis['tidak'] + $pro_luka['tidak'];

    $jml_luka = (object) $jml_luka;
    $jml_kritis = (object) $jml_kritis;
    $jml_tewas = (object) $jml_tewas;
    $total = (object) $total;
    $pro_luka = (object) $pro_luka;
    $pro_kritis = (object) $pro_kritis;
    $pro_tewas = (object) $pro_tewas;
    $total_pro = (object) $total_pro;
    return view('Probabilitas_Korban', compact('jml_luka', 'jml_kritis', 'jml_tewas', 'total', 'pro_luka', 'pro_kritis', 'pro_tewas', 'total_pro'));
  }
}
