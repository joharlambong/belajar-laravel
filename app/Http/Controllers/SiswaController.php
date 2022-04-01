<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index() {
        // $siswiRanum = ["Aura Kasih", "Anya Geraldine", "Ariel Tatum", "Anindita Hidayat"];
        // return view('siswa.index',["siswa"=>$siswiRanum]);
        $halaman="siswa";
        $siswa_list=Siswa::all()->sortBy('tanggal_lahir',0);
        $jumlah_siswa = $siswa_list->count();
        return view('siswa.index',compact('halaman','siswa_list','jumlah_siswa'));
    }

    public function create() {
        return view('siswa.create');
    }

    public function store(Request $request) {
        $siswa = $request->all();
        return $siswa;
    }
}
