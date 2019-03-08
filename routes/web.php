<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/forms', function()
{
    return View::make('Forms');
});
Route::get('/home', function()
{
    return View::make('Home');
});
Route::get('/category', function()
{
    return View::make('Category');
});
Route::get('/help', function()
{
    return View::make('Help');
});
Route::get('proses', 'Proses@terimaForm');
Route::get('home', 'Crud@index');
Route::get('category', 'Category@showCategory');
Route::get('patroli', 'Patroli@dataPatroli');

// Route::get('keadaan_lokasi', 'Keadaan_Lokasi@dataKeadaan');
// Route::get('probabilitas_keadaan', 'Probabilitas_Keadaan@hitungKeadaan');
// Route::get('probabilitas_waktu', 'Probabilitas_Waktu@hitungWaktu');
// Route::get('probabilitas_kendaraan', 'Probabilitas_Kendaraan@hitungKendaraan');
// Route::get('probabilitas_korban', 'Probabilitas_Korban@hitungKorban');
// Route::get('probabilitas_tersangka', 'Probabilitas_Tersangka@hitungTersangka');
// Route::get('jarak_kantor', 'Jarak_Kantor@hitungJarak');
// Route::get('probabilitas_kasus', 'Probabilitas_Kasus@hitungKasus');
// Route::get('probabilitas_kerugian', 'Probabilitas_Kerugian@hitungKerugian');
