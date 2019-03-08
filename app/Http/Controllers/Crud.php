<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class Crud extends Controller
{
  public function index(){
    $data = DB::select('SELECT * FROM data_korban_begal');
    return view('Home',['data'=>$data]);
 }
}
