<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class Probabilitas_Kendaraan extends Controller
{
  public function hitungKendaraan(){
    $jml_motor['ya'] = DB::table('data_korban_begal')->where('kendaraan', 'motor')->where('patroli_rutin', 'ya')->count();
    $jml_motor['tidak'] = DB::table('data_korban_begal')->where('kendaraan', 'motor')->where('patroli_rutin', 'tidak')->count();

    $jml_mobilP['ya'] = DB::table('data_korban_begal')->where('kendaraan', 'mobil penumpang')->where('patroli_rutin', 'ya')->count();
    $jml_mobilP['tidak'] = DB::table('data_korban_begal')->where('kendaraan', 'mobil penumpang')->where('patroli_rutin', 'tidak')->count();

    $jml_mobilB['ya'] = DB::table('data_korban_begal')->where('kendaraan', 'mobil barang')->where('patroli_rutin', 'ya')->count();
    $jml_mobilB['tidak'] = DB::table('data_korban_begal')->where('kendaraan', 'mobil barang')->where('patroli_rutin', 'tidak')->count();

    $total['ya'] = DB::table('data_korban_begal')->where('patroli_rutin','ya')->count();
    $total['tidak'] = DB::table('data_korban_begal')->where('patroli_rutin','tidak')->count();

    //perhitungan probabilitas motor
    $pro_motor['ya'] = $jml_motor['ya']/$total['ya'];
    $pro_motor['tidak'] = $jml_motor['tidak']/$total['tidak'];

    //perhitungan probabilitas mobil penumpang
    $pro_mobilP['ya'] = $jml_mobilP['ya']/$total['ya'];
    $pro_mobilP['tidak'] = $jml_mobilP['tidak']/$total['tidak'];

    //perhitungan probabilitas mobil barang
    $pro_mobilB['ya'] = $jml_mobilB['ya']/$total['ya'];
    $pro_mobilB['tidak'] = $jml_mobilB['tidak']/$total['tidak'];

    //perhitungan total probabilitas ya
    $total_pro['ya'] = $pro_mobilB['ya'] + $pro_mobilP['ya'] + $pro_motor['ya'];

    //perhitungan total probabilitas tidak
    $total_pro['tidak'] = $pro_mobilB['tidak'] + $pro_mobilP['tidak'] + $pro_motor['tidak'];

    $jml_motor = (object) $jml_motor;
    $jml_mobilP = (object) $jml_mobilP;
    $jml_mobilB = (object) $jml_mobilB;
    $total = (object) $total;
    $pro_motor = (object) $pro_motor;
    $pro_mobilP = (object) $pro_mobilP;
    $pro_mobilB = (object) $pro_mobilB;
    $total_pro = (object) $total_pro;
    return view('Probabilitas_Kendaraan', compact('jml_motor', 'jml_mobilP', 'jml_mobilB', 'total', 'pro_motor', 'pro_mobilP', 'pro_mobilB', 'total_pro'));
  }
}
