<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SiswaController;

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
//     return view('pages.homepage');
// });

Route::get('/',[PagesController::class,'homepage']);

// Route::get('about', function() {
//     return view('pages.about');
// });

Route::get('about',[AboutController::class,'index']);

// Route::get('siswa', function() {
//     $siswa = ["Aura Kasih", "Anya Geraldine", "Ariel Tatum", "Anindita Hidayat"];
//     //Cara 1
//     //return view('siswa.index', compact('siswa'));
//     //Cara 2
//     //return view('siswa.index')->with('siswa',$siswa);
//     //Cara 3
//     return view('siswa.index',['siswa'=>$siswa]);
// });

Route::get('siswa',[SiswaController::class,'index']);
