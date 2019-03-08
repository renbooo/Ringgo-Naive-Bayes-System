<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class Patroli extends Controller
{
 public function dataPatroli()
 {
   $patroli['tidak'] = DB::table('data_korban_begal')->where('patroli_rutin', 'ya')->get();
   $patroli['ya'] = DB::table('data_korban_begal')->where('patroli_rutin', 'tidak')->get();

   $patroli = (object) $patroli;
   return view('Patroli', compact('patroli'));

   /**
   foreach($patroli->ya as $row)

   */
 }
}
