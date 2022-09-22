@extends('layouts/apps')
@section('content')
<div id="main-content">
    <div class="container-fluid">
        <!-- Page header section  -->
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h1>Data Satuan</h1>
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
                        <h2 class="text-center">Master Data Satuan</h2>
                        <ul class="header-dropdown dropdown">
                            <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </div>
                    <div class="body">
                        <button class="btn btn-primary theme-bg gradient" data-toggle="modal" data-target="#addSatuan">
                            Tambah Data
                        </button>
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-custom spacing5">
                                <thead>
                                    <tr>
                                        <th>Satuan</th>
                                        <th>Desc</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($satuan as $i)
                                    <tr>
                                        <td>{{ $i->name }}</td>
                                        <td>{{ $i->desc }}</td>
                                        <td>
                                            <button class="btn btn-success gradient" title="Edit Data">
                                                <i class="fa fa-pencil"></i>
                                            </button>
                                            <button class="btn btn-warning gradient" title="Hapus Data">
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
@include('satuan.modal')
@endsection
