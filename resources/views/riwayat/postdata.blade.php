<!-- resources/views/barang/postdata.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Data Barang</title>
</head>

<body>

    <h1>Data Barang</h1>

    @if (count($data) > 0)
        <ul>
            @foreach ($data as $barang)
                <li>Kode Barang: {{ $barang->kode_barang }}, Nama Barang: {{ $barang->nama_barang }}, Kategori Barang:
                    {{ $barang->kategori_barang }}, Harga: {{ $barang->harga }}, Jumlah: {{ $barang->jumlah }}</li>
            @endforeach
        </ul>
    @else
        <p>Tidak ada data barang.</p>
    @endif

    <a href="{{ route('barang.tambah') }}">Tambah Barang</a>

</body>

</html>
