@extends('adminlayouts.app')
@section('content')
    <h1>Halaman Produk</h1>
    <table class="table table-striped">
        <thead>
       </tr>
        </thead>
        <tbody>
            <?php $nomor=1; ?>
            @foreach($arunitkerja as $no => $unitkerja)
            <tr>
                <td>{{ $nomor }}</td>
                <td>{{ $unitkerja->kode }}</td>
                <td>{{ $unitkerja->nama }}</td>
                <td>{{ $unitkerja->harga_jual }}</td>
                <td>{{ $unitkerja->stok }}</td>
                <td>{{ $unitkerja->jenis_produk->nama }}</td>
            </tr>
            <?php $nomor++ ?>
            @endforeach
        </tbody>
    </table>
    @endforeach