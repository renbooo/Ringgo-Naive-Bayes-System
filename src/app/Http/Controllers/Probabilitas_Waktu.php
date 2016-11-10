<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class Probabilitas_Waktu extends Controller
{
  public function hitungWaktu(){
    $jml_pagi['ya'] = DB::table('data_korban_begal')->where('waktu_kejadian', 'pagi')->where('patroli_rutin', 'ya')->count();
    $jml_pagi['tidak'] = DB::table('data_korban_begal')->where('waktu_kejadian', 'pagi')->where('patroli_rutin', 'tidak')->count();

    $jml_siang['ya'] = DB::table('data_korban_begal')->where('waktu_kejadian', 'siang')->where('patroli_rutin', 'ya')->count();
    $jml_siang['tidak'] = DB::table('data_korban_begal')->where('waktu_kejadian', 'siang')->where('patroli_rutin', 'tidak')->count();

    $jml_sore['ya'] = DB::table('data_korban_begal')->where('waktu_kejadian', 'sore')->where('patroli_rutin', 'ya')->count();
    $jml_sore['tidak'] = DB::table('data_korban_begal')->where('waktu_kejadian', 'sore')->where('patroli_rutin', 'tidak')->count();

    $jml_malam['ya'] = DB::table('data_korban_begal')->where('waktu_kejadian', 'malam')->where('patroli_rutin', 'ya')->count();
    $jml_malam['tidak'] = DB::table('data_korban_begal')->where('waktu_kejadian', 'malam')->where('patroli_rutin', 'tidak')->count();

    $total['ya'] = DB::table('data_korban_begal')->where('patroli_rutin','ya')->count();
    $total['tidak'] = DB::table('data_korban_begal')->where('patroli_rutin','tidak')->count();

    //perhitungan probabilitas pagi
    $pro_pagi['ya'] = $jml_pagi['ya']/$total['ya'];
    $pro_pagi['tidak'] = $jml_pagi['tidak']/$total['tidak'];

    //perhitungan probabilitas siang
    $pro_siang['ya'] = $jml_siang['ya']/$total['ya'];
    $pro_siang['tidak'] = $jml_siang['tidak']/$total['tidak'];

    //perhitungan probabilitas sore
    $pro_sore['ya'] = $jml_sore['ya']/$total['ya'];
    $pro_sore['tidak'] = $jml_sore['tidak']/$total['tidak'];

    //perhitungan probabilitas malam
    $pro_malam['ya'] = $jml_malam['ya']/$total['ya'];
    $pro_malam['tidak'] = $jml_malam['tidak']/$total['tidak'];

    //perhitungan total probabilitas ya
    $total_pro['ya'] = $pro_sore['ya'] + $pro_siang['ya'] + $pro_pagi['ya'] + $pro_malam['ya'];

    //perhitungan total probabilitas tidak
    $total_pro['tidak'] = $pro_sore['tidak'] + $pro_siang['tidak'] + $pro_pagi['tidak'] + $pro_malam['tidak'];

    $jml_pagi = (object) $jml_pagi;
    $jml_siang = (object) $jml_siang;
    $jml_sore = (object) $jml_sore;
    $jml_malam = (object) $jml_malam;
    $total = (object) $total;
    $pro_pagi = (object) $pro_pagi;
    $pro_siang = (object) $pro_siang;
    $pro_sore = (object) $pro_sore;
    $pro_malam = (object) $pro_malam;
    $total_pro = (object) $total_pro;
    return view('Probabilitas_Waktu', compact('jml_pagi', 'jml_siang', 'jml_sore', 'jml_malam', 'total', 'pro_pagi', 'pro_siang', 'pro_sore', 'pro_malam', 'total_pro'));
  }
}
