<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class Probabilitas_Kerugian extends Controller
{
  public function hitungKerugian(){
    $kerugian_mean['ya'] = DB::table('data_korban_begal')->where('patroli_rutin', 'ya')->AVG('kerugian_material');
    $kerugian_mean['tidak'] = DB::table('data_korban_begal')->where('patroli_rutin', 'tidak')->AVG('kerugian_material');

    $kerugian_varian['ya'] = DB::table('view_kerugian_ya')->select('varian_ya')->get();
    $kerugian_varian['tidak'] = DB::table('view_kerugian_no')->select('varian_no')->get();

    $kerugian_stddev['ya'] = DB::table('view_kerugian_ya')->select('standevia_ya')->get();
    $kerugian_stddev['tidak'] = DB::table('view_kerugian_no')->select('standevia_no')->get();

    $kerugian_mean = (object) $kerugian_mean;
    $kerugian_varian = (object) $kerugian_varian;
    $kerugian_stddev = (object) $kerugian_stddev;
    return view('Probabilitas_Kerugian', compact('kerugian_mean', 'kerugian_varian', 'kerugian_stddev'));
  }
}
