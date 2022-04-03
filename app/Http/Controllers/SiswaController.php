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
        $siswa = new Siswa();
        $siswa->nisn            = $request->nisn;
        $siswa->nama_siswa      = $request->nama_siswa;
        $siswa->tanggal_lahir   = $request->tanggal_lahir;
        $siswa->jenis_kelamin   = $request->jenis_kelamin;
        $siswa->save();
        return redirect('siswa');
    }

    public function simpan(Request $request) {
        $input = $request->all();
        Siswa::create($input);
        return redirect('siswa');
    }

    public function show($id) {
        $halaman='siswa';
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show', compact('halaman','siswa'));
    }
}
