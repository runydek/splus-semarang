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
                    @foreach ($result as $key => $cluster)
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            {{-- {{ dd($cluster) }} --}}
                            <h4 class="mt-4">Cluster {{ $key + 1}}</h4>
                            <thead>
                                <tr>
                                    <th style="width: 25%">Nama Barang</th>
                                    <th>Stok Barang</th>
                                    <th>Jumlah Transaksi</th>
                                    <th>Jumlah Terjual</th>
                                    <th>Rata-Rata Penjualan</th>
                                    {{-- <th>Opsi</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cluster as $index => $item)
                                <tr>
                                    <td>{{ $item->nama_barang }}</td>
                                    <td>{{ $item->stok_barang }}</td>
                                    <td>{{ $item->jml_transaksi }}</td>
                                    <td>{{ $item->jml_terjual }}</td>
                                    <td>{{ $item->rtpenjual }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="1"></td>
                                    <td>Mean</td>
                                    <td>{{ round($cluster->where('cluster', 'C'.$key+1)->avg('jml_transaksi'), 2) }}</td>
                                    <td>{{ round($cluster->where('cluster', 'C'.$key+1)->avg('jml_terjual'), 2) }}</td>
                                    <td>{{ round($cluster->where('cluster', 'C'.$key+1)->avg('rtpenjual'), 2) }}</td>
                                </tr>
                                {{-- <tr>
                                    <td>Centroid {{ $key + 1 }}</td>
                                    <td></td>
                                    <td>{{ round($cluster->where('cluster', 'C'.$key+1)->avg('jml_transaksi'), 2) }}</td>
                                    <td>{{ round($cluster->where('cluster', 'C'.$key+1)->avg('jml_terjual'), 2) }}</td>
                                    <td>{{ round($cluster->where('cluster', 'C'.$key+1)->avg('rtpenjual'), 2) }}</td>
                                </tr> --}}
                            </tbody>

                        </table>
                    </div>
                    @endforeach
                </div>
            </div>

@endsection