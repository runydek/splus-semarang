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
                            <a href="#" class="btn btn-primary">Tambah Data</a>
                            <div class="col-sm-4 float-start float-lg-end">
                                <div class="form-group position-relative has-icon-right">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="form-control-icon">
                                        <i class="bi bi-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Stok Barang</th>
                                    <th>Jumlah Transaksi</th>
                                    <th>Jumlah Terjual</th>
                                    <th>Rata-Rata Penjualan</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Baju</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>
                                        <a href="#" class="btn btn-secondary"><i class="bi bi-pencil"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection