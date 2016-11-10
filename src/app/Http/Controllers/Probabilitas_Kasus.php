<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class Probabilitas_Kasus extends Controller
{
  public function hitungKasus(){
    $kasus_mean['ya'] = DB::table('data_korban_begal')->where('patroli_rutin', 'ya')->AVG('kasus_serupa');
    $kasus_mean['tidak'] = DB::table('data_korban_begal')->where('patroli_rutin', 'tidak')->AVG('kasus_serupa');

    $kasus_varian['ya'] = DB::table('view_kasus_ya')->select('varian_ya')->get();
    $kasus_varian['tidak'] = DB::table('view_kasus_no')->select('varian_no')->get();

    $kasus_stddev['ya'] = DB::table('view_kasus_ya')->select('standevia_ya')->get();
    $kasus_stddev['tidak'] = DB::table('view_kasus_no')->select('standevia_no')->get();

    $kasus_mean = (object) $kasus_mean;
    $kasus_varian = (object) $kasus_varian;
    $kasus_stddev = (object) $kasus_stddev;
    return view('Probabilitas_Kasus', compact('kasus_mean', 'kasus_varian', 'kasus_stddev'));
  }
}
