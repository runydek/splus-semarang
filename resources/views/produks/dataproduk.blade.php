@extends('layouts.app')

@section('content')
@include('layouts.navbar')
<div id="main-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Daftar Produk S-Plus Semarang</h4>
            </div>
            <div class="card-body">
                <div class="card-content">
                    <div class="row">
                        <div class="col-12">
                            <a href="/createdp" class="btn btn-primary">Tambah Data</a>
                            <div class="col-sm-4 float-start float-lg-end">
                                <div class="form-group position-relative has-icon-right">
                                    <form action="/dataproduk" method="get">
                                    @csrf
                                        <input type="text" name="search" class="form-control" placeholder="Search" value="">
                                        <div class="form-control-icon">
                                            <i class="bi bi-search"></i>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Stok Barang</th>
                                    <th>Jumlah Transaksi</th>
                                    <th>Jumlah Terjual</th>
                                    <th>Rata-Rata Penjualan</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produks as $produk)
                                <tr>
                                    {{-- <td>{{ $indek + 1 }}</td> --}}
                                    <td>{{ $produk->kodar }}</td>
                                    <td>{{ $produk->namabarang }}</td>
                                    <td>{{ $produk->stokbarang }}</td>
                                    <td>{{ $produk->jumtransaksi }}</td>
                                    <td>{{ $produk->jumterjual }}</td>
                                    <td>{{ $produk->rtpenjual }}</td>
                                    <td>
                                        <a href="dataproduk/{{ $produk->id }}/edit" class="btn btn-secondary"><i class="bi bi-pencil"></i></a>
                                        <form action="dataproduk/{{ $produk->id }}" method="post" style="display: inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- {{ $produks->links() }} --}}
                </div>
            </div>
        </div>
@endsection