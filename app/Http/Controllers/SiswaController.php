<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function tampil()  {
        $siswa = Siswa::get();
        return view('siswa.tampil', compact('siswa'));
    }

    function tambah()  {
        return view('siswa.tambah');
    }

    function submit(Request $request) {
        $siswa = new Siswa();
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->kelas = $request->kelas;
        $siswa->alamat = $request->almat;
        $siswa->hobi = $request->hobi;
        $siswa->save();
        return redirect()->route('siswa.tampil');
    }
}
