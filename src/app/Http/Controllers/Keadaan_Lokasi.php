<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class Keadaan_Lokasi extends Controller
{
  public function dataKeadaan(){
    $ramai['ya'] = DB::table('data_korban_begal')->where('keadaan_lokasi', 'ramai')->where('patroli_rutin', 'ya')->get();
    $ramai['tidak'] = DB::table('data_korban_begal')->where('keadaan_lokasi', 'ramai')->where('patroli_rutin', 'tidak')->get();

    $sepi['ya'] = DB::table('data_korban_begal')->where('keadaan_lokasi', 'sedang')->where('patroli_rutin', 'ya')->get();
    $sepi['tidak'] = DB::table('data_korban_begal')->where('keadaan_lokasi', 'sedang')->where('patroli_rutin', 'tidak')->get();

    $sedang['ya'] = DB::table('data_korban_begal')->where('keadaan_lokasi', 'sepi')->where('patroli_rutin', 'ya')->get();
    $sedang['tidak'] = DB::table('data_korban_begal')->where('keadaan_lokasi', 'sepi')->where('patroli_rutin', 'tidak')->get();

    $ramai = (object) $ramai;
    $sepi = (object) $sepi;
    $sedang = (object) $sedang;
    return view('Keadaan_Lokasi', compact('ramai', 'sepi', 'sedang'));
  }
}
