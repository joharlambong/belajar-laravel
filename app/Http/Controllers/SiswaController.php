<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index() {
        $siswiRanum = ["Aura Kasih", "Anya Geraldine", "Ariel Tatum", "Anindita Hidayat"];
        return view('siswa.index',["siswa"=>$siswiRanum]);
    }
}