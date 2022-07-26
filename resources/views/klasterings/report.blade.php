@extends('layouts.app')

@section('content')
@include('layouts.navbar')
<div id="main-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">List Report Data Klastering</h4>
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
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th style="width: 5%">#</th>
                                    <th>Report</th>
                                    <th style="width: 10%">Aksi</th>
                                </tr>
                            </thead>
                            <h4 class="mt-4 mb-4">List Report Klaster</h4>
                            <tbody>
                                @foreach ($data as $key => $report)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <a href="report-cluster/{{ $report->id  }}">Report {{ $key +1 }}</a>
                                    </td>
                                    <td>
                                        <form action="reports/{{ $report->id }}" method="post" style="display: inline">
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
                </div>
            </div>
        </div>

@endsection