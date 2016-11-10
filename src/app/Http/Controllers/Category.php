<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class Category extends Controller
{
  public function showCategory(){
    $patroli_rutin['ya'] = DB::table('data_korban_begal')->where('patroli_rutin', 'ya')->get();
    $patroli_rutin['tidak'] = DB::table('data_korban_begal')->where('patroli_rutin', 'tidak')->get();

    $patroli_rutin = (object) $patroli_rutin;

    return view('Category', compact('patroli_rutin'));
 }
}
