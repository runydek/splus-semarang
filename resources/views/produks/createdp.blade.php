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
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Kode Barang</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <input type="text" id="first-name" class="form-control" name="fname">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Nama Barang</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <input type="text" id="first-name" class="form-control" name="fname">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Stock Barang</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <input type="text" id="first-name" class="form-control" name="fname">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Jumlah Barang</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <input type="text" id="first-name" class="form-control" name="fname">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Jumlah Terjual</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <input type="text" id="first-name" class="form-control" name="fname">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Rata-Rata Penjualan</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <input type="text" id="first-name" class="form-control" name="fname">
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