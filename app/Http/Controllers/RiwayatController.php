<?php

namespace App\Http\Controllers;

use App\Models\Riwayat;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index()
    {
        $riwayat =  Riwayat::get();

        return view('riwayat.index', ['data' => $riwayat]);
    }

    public function tambah()
    {
        return view('riwayat.form');
    }

    public function simpan(Request $request)
    {
        $data = [
            'Nama'=>$request->Nama,
            'posisi_kerja'=>$request->posisi_kerja,
            'tempat_kerja'=>$request->tempat_kerja,
            'tahun_masuk'=>$request->tahun_masuk,
            'tahun_keluar'=>$request->tahun_keluar,
            'alasan_keluar'=>$request->alasan_keluar,
        ];

        Riwayat::create($data);

        return redirect()->route('riwayat');
    }

    public function edit($id)
    {
        $riwayat = Riwayat::find($id)->first();

        return view('riwayat.form', ['riwayat'=>$riwayat]);
    }

    public function update($id, Request $request)
    {
        $data = [
            'Nama'=>$request->Nama,
            'posisi_kerja'=>$request->posisi_kerja,
            'tempat_kerja'=>$request->tempat_kerja,
            'tahun_masuk'=>$request->tahun_masuk,
            'tahun_keluar'=>$request->tahun_keluar,
            'alasan_keluar'=>$request->alasan_keluar,
        ];

        Riwayat::find($id)->update($data);

        return redirect()->route('riwayat');
    }

    public function hapus($id)
    {
        Riwayat::find($id)->delete();

        return redirect()->route('riwayat');
    }
}
