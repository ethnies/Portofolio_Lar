<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index2');
// });
// Route::get('/about', function () {
//     $nama = 'Fadhli Ranuahrja';
//     $first_name = 'Fadhli';
//     $middle_name = '';
//     $last_name = 'Ranuharja';
//     $affiliation = 'Universitas Negeri Padang';

//     return view('about', ['depan'=> $first_name, 'tengah'=> $middle_name, 'akhir'=> $last_name, 'affiliasi'=> $affiliation ] );
// });
// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', 'PagesController@mahasiswa');


