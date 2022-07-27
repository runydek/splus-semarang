@extends('layouts.app')

@section('content')
@include('layouts.navbar')
    <div id="main-content">
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Daftar Produk S-Plus Semarang</h4>
                </div>
                @csrf
                <div class="card-body">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-12">
                                <button onclick='window.location.reload();' class="btn btn-primary">Proses Data</button>
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

                    @foreach ($clusterName as $key => $cluster)
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <h4 class="mt-4">Cluster {{ $key + 1}}</h4>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="width: 25%">Nama Barang</th>
                                    {{-- <th>Stok Barang</th> --}}
                                    <th>Jumlah Transaksi</th>
                                    <th>Jumlah Terjual</th>
                                    <th>Rata-Rata Penjualan</th>
                                    {{-- <th>Opsi</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cluster as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->namabarang }}</td>
                                    {{-- <td>{{ $item->stokbarang }}</td> --}}
                                    <td>{{ $item->jumtransaksi }}</td>
                                    <td>{{ $item->jumterjual }}</td>
                                    <td>{{ $item->rtpenjual }}</td>
                                    {{-- <td>
                                        <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                    </td> --}}
                                </tr>
                                @endforeach
                                {{-- <tr>
                                    <td colspan="1"></td>
                                    <td>Mean</td>
                                    <td>{{ round($cluster->where('cluster', 'C'.$key+1)->avg('jml_transaksi'), 2) }}</td>
                                    <td></td>
                                    <td></td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                    @endforeach
                    <a href="/reports" class="btn btn-primary mt-3">Simpan Data</a>
                </div>
            </div>

@endsection