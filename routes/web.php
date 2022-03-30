<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.homepage');
});

Route::get('about', function() {
    return view('pages.about');
});

Route::get('siswa', function() {
    $siswa = ["Aura Kasih", "Anya Geraldine", "Ariel Tatum", "Anindita Hidayat"];
    //Cara 1
    //return view('siswa.index', compact('siswa'));
    //Cara 2
    //return view('siswa.index')->with('siswa',$siswa);
    //Cara 3
    return view('siswa.index',['siswa'=>$siswa]);
});
