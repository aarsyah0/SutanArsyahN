@extends('layouts.app')

@section('title', 'Form Riwayat')

@section('content')
    <form action="{{ isset($riwayat) ? route('riwayat.tambah.update', $riwayat->id) : route('riwayat.tambah.simpan') }}"
        method="post">
        @csrf
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        {{ isset($riwayat) ? 'Form Edit Barang' : 'Form Tambah Barang' }}</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" class="form-control" id="Nama" name="Nama"
                            value="{{ isset($riwayat) ? $riwayat->Nama : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="posisi_kerja">Posisi Kerja</label>
                        <input type="text" class="form-control" id="posisi_kerja" name="posisi_kerja"
                            value="{{ isset($riwayat) ? $riwayat->posisi_kerja : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="tempat_kerja">Tempat Kerja</label>
                        <input type="text" class="form-control" id="tempat_kerja" name="tempat_kerja"
                            value="{{ isset($riwayat) ? $riwayat->tempat_kerja : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="tahun_masuk">Tahun Masuk</label>
                        <input type="date" class="form-control" id="tahun_masuk" name="tahun_masuk"
                            value="{{ isset($riwayat) ? $riwayat->tahun_masuk : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="tahun_keluar">Tahun Keluar</label>
                        <input type="date" class="form-control" id="tahun_keluar" name="tahun_keluar"
                            value="{{ isset($riwayat) ? $riwayat->tahun_keluar : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="alasan_keluar">Alasan Keluar</label>
                        <input type="number" class="form-control" id="alasan_keluar" name="alasan_keluar"
                            value="{{ isset($riwayat) ? $riwayat->alasan_keluar : '' }}">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
        </div>
    </form>
@endsection
