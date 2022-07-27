@extends('layouts.app')

@section('content')
@include('layouts.navbar')
    <div id="main-content">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Input Data Produk</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="/dataproduk/store" method="post">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Kode Barang</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <input type="text" id="first-name" class="form-control" name="kode_barang" value="{{ $kode_barang }}" disabled>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Nama Barang</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <input type="text" id="first-name" class="form-control" name="nama_barang">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Stok Barang</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <input type="text" id="first-name" class="form-control" name="stok_barang">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Jumlah Transaksi</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <input type="text" id="first-name" class="form-control" name="jml_transaksi">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Jumlah Terjual</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <input type="text" id="first-name" class="form-control" name="jml_terjual">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Rata-Rata Penjualan</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <input type="text" id="first-name" class="form-control" name="rt_penjualan">
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-end mt-3">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Insert</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection