<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\DB;

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

Route::get('siswa/create',[SiswaController::class,'create']);

Route::post('siswa',[SiswaController::class,'simpan']);

Route::get('sampledata', function() {
    DB::table('siswa')->insert([
        [
            'nisn'          => '1001',
            'nama_siswa'    => 'Vanessa Priscillia',
            'tanggal_lahir' => '1998-02-12',
            'jenis_kelamin' => 'P',
            'created_at'    => '2022-04-01 13:02:00',
            'updated_at'    => '2022-04-01 13:02:00'
        ],
        [
            'nisn'          => '1002',
            'nama_siswa'    => 'Ayu Ting Ting',
            'tanggal_lahir' => '1992-10-10',
            'jenis_kelamin' => 'P',
            'created_at'    => '2022-04-01 13:02:00',
            'updated_at'    => '2022-04-01 13:02:00'
        ],
        [
            'nisn'          => '1003',
            'nama_siswa'    => 'Bianca Hello',
            'tanggal_lahir' => '2001-8-1',
            'jenis_kelamin' => 'P',
            'created_at'    =>  '2022-04-01 13:02:00',
            'updated_at'    => '2022-04-01 13:02:00'
        ],
        [
            'nisn'          => '1004',
            'nama_siswa'    => 'Celine Evangelista',
            'tanggal_lahir' => '1992-7-29',
            'jenis_kelamin' => 'P',
            'created_at'    =>  '2022-04-01 13:02:00',
            'updated_at'    => '2022-04-01 13:02:00'
        ],
        [
            'nisn'          => '1005',
            'nama_siswa'    => 'Dinar Candy',
            'tanggal_lahir' => '1993-12-22',
            'jenis_kelamin' => 'P',
            'created_at'    =>  '2022-04-01 13:02:00',
            'updated_at'    => '2022-04-01 13:02:00'
        ],
        [
            'nisn'          => '1006',
            'nama_siswa'    => 'Elina Joerg',
            'tanggal_lahir' => '1999-9-28',
            'jenis_kelamin' => 'P',
            'created_at'    =>  '2022-04-01 13:02:00',
            'updated_at'    => '2022-04-01 13:02:00'
        ],
        [
            'nisn'          => '1007',
            'nama_siswa'    => 'Fanny Ghassani',
            'tanggal_lahir' => '1991-7-18',
            'jenis_kelamin' => 'P',
            'created_at'    =>  '2022-04-01 13:02:00',
            'updated_at'    => '2022-04-01 13:02:00'
        ],
        [
            'nisn'          => '1008',
            'nama_siswa'    => 'Gisella Anastasia',
            'tanggal_lahir' => '1990-6-16',
            'jenis_kelamin' => 'P',
            'created_at'    =>  '2022-04-01 13:02:00',
            'updated_at'    => '2022-04-01 13:02:00'
        ],
        [
            'nisn'          => '1009',
            'nama_siswa'    => 'Haviza Devi Anjani',
            'tanggal_lahir' => '1995-9-27',
            'jenis_kelamin' => 'P',
            'created_at'    =>  '2022-04-01 13:02:00',
            'updated_at'    => '2022-04-01 13:02:00'
        ],[
            'nisn'          => '1010',
            'nama_siswa'    => 'Irish Bella',
            'tanggal_lahir' => '1996-11-23',
            'jenis_kelamin' => 'P',
            'created_at'    =>  '2022-04-01 13:02:00',
            'updated_at'    => '2022-04-01 13:02:00'
        ]
    ]);
});

Route::get('siswa/{siswa}',[SiswaController::class,'show']);

Route::get('siswa/{siswa}/edit',[SiswaController::class,'edit']);

Route::patch('siswa/{siswa}',[SiswaController::class,'update'])->name('updateSiswa');

Route::delete('siswa/{siswa}',[SiswaController::class,'destroy'])->name('hapusSiswa');
