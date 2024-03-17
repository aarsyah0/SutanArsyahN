@extends('layouts.app')

@section('title', 'Data Barang')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('riwayat.tambah') }}" class="btn btn-primary mb-3">Tambah Barang</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Posisi Kerja</th>
                            <th>Tempat Kerja</th>
                            <th>Tahun Masuk</th>
                            <th>Tahun Keluar</th>
                            <th>Alasan Keluar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($data as $row)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $row->Nama }}</td>
                                <td>{{ $row->posisi_kerja }}</td>
                                <td>{{ $row->tempat_kerja }}</td>
                                <td>{{ $row->tahun_masuk }}</td>
                                <td>{{ $row->tahun_keluar }}</td>
                                <td>{{ $row->alasan_keluar }}</td>
                                <td>
                                    <a href="{{ route('barang.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('barang.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
