@extends('layouts.apps')
@section('content')
<div id="main-content">
    <div class="container-fluid">
        <!-- Page header section  -->
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h1>Dashboard</h1>
                    <span>Selamat Datang di Inventory Control</span>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 text-lg-right">

                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card planned_task">
                    <div class="header">
                        <h2 class="text-center">LAPORAN CHEMICAL</h2>
                        <ul class="header-dropdown dropdown">
                            <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                        </ul>
                        <button class="btn btn-primary theme-bg gradient" data-toggle="modal" data-target="#mainForm">
                            TAMBAH DATA LAPORAN
                        </button>
                        <a href="{{ route('laporan_export') }}" class="btn btn-primary theme-bg gradient pull-right" title="Download to Excel">
                            <i class="fa fa-lg fa-cloud-download"></i>
                        </a>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table js-basic-example dataTable table-custom spacing5 table-bordered" id="chemical">
                                <thead>
                                    <tr>
                                        <th>Unit</th>
                                        <th>kimap</th>
                                        <th>Desc.</th>
                                        <th>Satuan</th>
                                        <th>Konsumsi</th>
                                        <th>SOH</th>
                                        <th>OS PR</th>
                                        <th>OS PO</th>
                                        <th>Ketahanan Stock</th>
                                        <th>Lead Time(Bulan)</th>
                                        <th>Indikator</th>
                                        <th>Ket.</th>
                                        <th>Warning</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($laporan as $i)
                                    <tr>
                                        <td>{{ strtoupper($i->barang->nm_barang) }}</td>
                                        <td>{{ strtoupper($i->barang->kimap) }}</td>
                                        <td>{{ strtoupper($i->desc) }}</td>
                                        <td>{{ strtoupper($i->barang->satuan->name) }}</td>
                                        <td>{{ strtoupper($i->konsumsi) }}</td>
                                        <td>{{ strtoupper($i->soh) }}</td>
                                        <td>{{ strtoupper($i->ospr) }}</td>
                                        <td>{{ strtoupper($i->ospo) }}</td>
                                        <td>{{ strtoupper($i->ketahanan_stock) }}</td>
                                        <td>{{ strtoupper($i->lead_time )}}</td>
                                        <td>{{ strtoupper($i->indikator) }}</td>
                                        <td>{{ strtoupper($i->ket) }}</td>
                                        <td>
                                            @if ($i->ketahanan_stock < 30)
                                            <span class="badge badge-danger sub_n_category bg-red">Stock kurang 30</span>
                                            @elseif($i->ketahanan_stock < 50)
                                            <span class="badge badge-warning sub_n_category bg-orange">Stock mendekati 30</span>
                                            @else
                                            <span class="badge badge-success sub_n_category bg-green">Stock Aman</span>
                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-success gradient" id="edit" title="Edit Data" data-toggle="modal" data-target="#editLaporan{{ $i->id }}">
                                                <i class="fa fa-pencil"></i>
                                            </button>
                                            <button class="btn btn-warning gradient" id="hapus" data-toggle="modal" data-target="#hapusLaporan{{ $i->id }}" title="Hapus Data">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('main-form')
@endsection
