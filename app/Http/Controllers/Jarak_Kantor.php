<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class Jarak_Kantor extends Controller
{
  public function hitungJarak(){
    $jarak_mean['ya'] = DB::table('data_korban_begal')->where('patroli_rutin', 'ya')->AVG('jarak_kantor_polisi_ke_tkp');
    $jarak_mean['tidak'] = DB::table('data_korban_begal')->where('patroli_rutin', 'tidak')->AVG('jarak_kantor_polisi_ke_tkp');

    $jarak_varian['ya'] = DB::table('view_jarak_ya')->select('variance_ya')->get();
    $jarak_varian['tidak'] = DB::table('view_jarak_no')->select('variance_no')->get();

    $jarak_stddev['ya'] = DB::table('view_jarak_ya')->select('standevia_ya')->get();
    $jarak_stddev['tidak'] = DB::table('view_jarak_no')->select('standevia_no')->get();

    $jarak_mean = (object) $jarak_mean;
    $jarak_varian = (object) $jarak_varian;
    $jarak_stddev = (object) $jarak_stddev;
    return view('Jarak_Kantor', compact('jarak_mean', 'jarak_varian', 'jarak_stddev'));
  }
}
