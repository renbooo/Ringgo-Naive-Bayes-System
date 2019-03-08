<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class Proses extends Controller {
  public function terimaForm(Request $request){
    $Lokasi = $request->input('Keadaan_Lokasi');
    $Waktu = $request->input('Waktu_Kejadian');
    $Kendaraan = $request->input('Kendaraan');
    $Keadaan = $request->input('Keadaan_Korban');
    $Status = $request->input('Status_Tersangka');

    $total['ya'] = DB::table('data_korban_begal')->where('patroli_rutin','ya')->count();
    $total['tidak'] = DB::table('data_korban_begal')->where('patroli_rutin','tidak')->count();

    $Keadaan_Lokasi['ya'] = DB::table('data_korban_begal')->where('keadaan_lokasi', $Lokasi)->where('patroli_rutin', 'ya')->count();
    $Keadaan_Lokasi['tidak'] = DB::table('data_korban_begal')->where('keadaan_lokasi', $Lokasi)->where('patroli_rutin', 'tidak')->count();

    $pro_Lokasi['ya'] = $Keadaan_Lokasi['ya']/$total['ya'];
    $pro_Lokasi['tidak'] = $Keadaan_Lokasi['tidak']/$total['tidak'];

    $Waktu_Kejadian['ya'] = DB::table('data_korban_begal')->where('waktu_kejadian', $Waktu)->where('patroli_rutin', 'ya')->count();
    $Waktu_Kejadian['tidak'] = DB::table('data_korban_begal')->where('waktu_kejadian', $Waktu)->where('patroli_rutin', 'tidak')->count();

    $pro_Waktu['ya'] = $Waktu_Kejadian['ya']/$total['ya'];
    $pro_Waktu['tidak'] = $Waktu_Kejadian['tidak']/$total['tidak'];

    $Kendaraan_Korban['ya'] = DB::table('data_korban_begal')->where('kendaraan', $Kendaraan)->where('patroli_rutin', 'ya')->count();
    $Kendaraan_Korban['tidak'] = DB::table('data_korban_begal')->where('kendaraan', $Kendaraan)->where('patroli_rutin', 'tidak')->count();

    $pro_Kendaraan['ya'] = $Kendaraan_Korban['ya']/$total['ya'];
    $pro_Kendaraan['tidak'] = $Kendaraan_Korban['tidak']/$total['tidak'];

    $Keadaan_Korban['ya'] = DB::table('data_korban_begal')->where('keadaan_korban', $Keadaan)->where('patroli_rutin', 'ya')->count();
    $Keadaan_Korban['tidak'] = DB::table('data_korban_begal')->where('keadaan_korban', $Keadaan)->where('patroli_rutin', 'tidak')->count();

    $pro_Keadaan['ya'] = $Keadaan_Korban['ya']/$total['ya'];
    $pro_Keadaan['tidak'] = $Keadaan_Korban['tidak']/$total['tidak'];

    $Status_Tersangka['ya'] = DB::table('data_korban_begal')->where('status_tersangka', $Status)->where('patroli_rutin', 'ya')->count();
    $Status_Tersangka['tidak'] = DB::table('data_korban_begal')->where('status_tersangka', $Status)->where('patroli_rutin', 'tidak')->count();

    $pro_Status['ya'] = $Status_Tersangka['ya']/$total['ya'];
    $pro_Status['tidak'] = $Status_Tersangka['tidak']/$total['tidak'];

    // -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    // PERHITUNGAN NILAI CONTINUE
    // -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    $Jarak = $request->input('Jarak_Kantor_Polisi_Ke_TKP');
    $Kerugian = $request->input('Kerugian_Material');
    $Kasus = $request->input('Kasus_Serupa');

    $mean_Jarak['ya'] = DB::table('data_korban_begal')->where('patroli_rutin', 'ya')->AVG('Jarak_Kantor_Polisi_Ke_TKP');
    $mean_Jarak['tidak'] = DB::table('data_korban_begal')->where('patroli_rutin', 'tidak')->AVG('Jarak_Kantor_Polisi_Ke_TKP');
    $varian_jarak['ya'] = DB::table('view_jarak_ya')->select('variance_ya')->get();
    $varian_jarak['tidak'] = DB::table('view_jarak_no')->select('variance_no')->get();
    $stddev_jarak['ya'] = DB::table('view_jarak_ya')->select('standevia_ya')->get();
    $stddev_jarak['tidak'] = DB::table('view_jarak_no')->select('standevia_no')->get();
    // $sqrt_jarak['ya']= sqrt($varian_jarak['ya']);
    // $pro_jarak['ya'] = (1/(sqrt(2*3.14)*$sqrt_jarak['ya']))*(exp(-(pow(($Jarak-$mean_Jarak['ya']),2))/(2*$varian_jarak['ya'])));
    // $sqrt_jarak['tidak']= sqrt($varian_jarak['tidak']);
    // $pro_jarak['tidak'] = (1/(sqrt(2*3.14)*$sqrt_jarak['tidak']))*(exp(-(pow(($Jarak-$mean_Jarak['tidak']),2))/(2*$varian_jarak['tidak'])));

    $mean_Rugi['ya'] = DB::table('data_korban_begal')->where('patroli_rutin', 'ya')->AVG('Kerugian_Material');
    $mean_Rugi['tidak'] = DB::table('data_korban_begal')->where('patroli_rutin', 'tidak')->AVG('Kerugian_Material');
    $varian_rugi['ya'] = DB::table('view_kerugian_ya')->select('varian_ya')->get();
    $varian_rugi['tidak'] = DB::table('view_kerugian_no')->select('varian_no')->get();
    $stddev_rugi['ya'] = DB::table('view_kerugian_ya')->select('standevia_ya')->get();
    $stddev_rugi['tidak'] = DB::table('view_kerugian_no')->select('standevia_no')->get();
    // $sqrt_rugi['ya']= sqrt($varian_rugi['ya']);
    // $pro_rugi['ya'] = (1/(sqrt(2*3.14)*$sqrt_rugi['ya']))*(exp(-(pow(($Kerugian-$mean_Rugi['ya']),2))/(2*$varian_rugi['ya'])));
    // $sqrt_rugi['tidak']= sqrt($varian_rugi['tidak']);
    // $pro_rugi['tidak'] = (1/(sqrt(2*3.14)*$sqrt_rugi['tidak']))*(exp(-(pow(($Kerugian-$mean_Rugi['tidak']),2))/(2*$varian_rugi['tidak'])));

    $mean_Kasus['ya'] = DB::table('data_korban_begal')->where('patroli_rutin', 'ya')->AVG('Kasus_Serupa');
    $mean_Kasus['tidak'] = DB::table('data_korban_begal')->where('patroli_rutin', 'tidak')->AVG('Kasus_Serupa');
    $varian_kasus['ya'] = DB::table('view_kasus_ya')->select('varian_ya')->get();
    $varian_kasus['tidak'] = DB::table('view_kasus_no')->select('varian_no')->get();
    $stddev_kasus['ya'] = DB::table('view_kasus_ya')->select('standevia_ya')->get();
    $stddev_kasus['tidak'] = DB::table('view_kasus_no')->select('standevia_no')->get();
    // $sqrt_kasus['ya']= sqrt($varian_kasus['ya']);
    // $pro_kasus['ya'] = (1/(sqrt(2*3.14)*$sqrt_kasus['ya']))*(exp(-(pow(($Kasus-$mean_Kasus['ya']),2))/(2*$varian_kasus['ya'])));
    // $sqrt_kasus['tidak']= sqrt($varian_kasus['tidak']);
    // $pro_kasus['tidak'] = (1/(sqrt(2*3.14)*$sqrt_kasus['tidak']))*(exp(-(pow(($Kasus-$mean_Kasus['tidak']),2))/(2*$varian_kasus['tidak'])));

    // $std['jarak_kantor_polisi_ke_tkp'] = DB::table('data_korban_begal')->select(DB::raw('SELECT STD(JARAK_KANTOR_POLISI_KE_TKP)'));
    // $varian = 0;


    // $varian['ya'] = 0;


    $mean_Jarak = (object) $mean_Jarak;
    $mean_Kasus = (object) $mean_Kasus;
    $mean_Rugi = (object) $mean_Rugi;
    $varian_jarak = (object) $varian_jarak;
    $varian_rugi = (object) $varian_rugi;
    $varian_kasus = (object) $varian_kasus;
    $stddev_jarak = (object) $stddev_jarak;
    $stddev_rugi = (object) $stddev_rugi;
    $stddev_kasus = (object) $stddev_kasus;
    // $sqrt_jarak = (object) $sqrt_jarak;
    // $sqrt_rugi = (object) $sqrt_rugi;
    // $sqrt_kasus = (object) $sqrt_kasus;
    // $pro_jarak = (object) $pro_jarak;
    // $pro_kasus = (object) $pro_kasus;
    // $pro_rugi = (object) $pro_rugi;
    $Keadaan_Lokasi = (object) $Keadaan_Lokasi;
    $Waktu_Kejadian = (object) $Waktu_Kejadian;
    $Kendaraan_Korban = (object) $Kendaraan_Korban;
    $Keadaan_Korban = (object) $Keadaan_Korban;
    $Status_Tersangka = (object) $Status_Tersangka;
    $pro_Lokasi = (object) $pro_Lokasi;
    $pro_Waktu = (object) $pro_Waktu;
    $pro_Kendaraan = (object) $pro_Kendaraan;
    $pro_Keadaan = (object) $pro_Keadaan;
    $pro_Status = (object) $pro_Status;
    // $std = (object) $std;
    // $Jarak_Kantor_Polisi_Ke_TKP = (object) $Jarak_Kantor_Polisi_Ke_TKP;
    // $Kerugian_Material = (object) $Kerugian_Material;
    // $Kasus_Serupa = (object) $Kasus_Serupa;
    // 'pro_kasus', 'pro_rugi', 'pro_jarak', 'sqrt_kasus', 'sqrt_rugi', 'sqrt_jarak',

    return view('Test_Records', compact('stddev_jarak', 'stddev_rugi', 'stddev_kasus', 'varian_jarak', 'varian_kasus', 'varian_rugi', 'mean_Rugi', 'mean_Kasus', 'mean_Jarak', 'Keadaan_Lokasi', 'Waktu_Kejadian', 'Kendaraan_Korban', 'Keadaan_Korban', 'Status_Tersangka', 'pro_Lokasi', 'pro_Waktu', 'pro_Kendaraan', 'pro_Keadaan', 'pro_Status', 'Lokasi', 'Waktu', 'Kendaraan', 'Keadaan', 'Status', 'Jarak', 'Kasus', 'Kerugian'));
  }
}
