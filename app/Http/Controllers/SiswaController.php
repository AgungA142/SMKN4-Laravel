<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function daftarSiswa(){
        $siswa = Siswa::all();

        return view('Siswa.home', [
            'data' => $siswa,
        ]);
    }

    function tambahSiswa(){
        return view('Siswa.tambah');
    }

    function tambahData(Request $request){
        $siswa = new siswa();
        $siswa->nisn = $request->nisn;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->save();

        return redirect('/beranda');
    }

    function hapusData($id) {
        $siswa = Siswa::find($id);
        $siswa -> delete();

        return back();
    }
}
