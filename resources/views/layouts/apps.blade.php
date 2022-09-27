<!doctype html>
<html lang="en">

    <head>
    <title>Chemical - Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Mooli Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
    <meta name="author" content="GetBootstrap, design by: puffintheme.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/animate-css/vivify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/multi-select/css/multi-select.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('css/mooli.min.css') }}">

    </head>
    <body>

        <div id="body" class="theme-cyan">

            <!-- Page Loader -->
            <div class="page-loader-wrapper">
                <div class="loader">
                    <div class="m-t-30"><img src="assets/images/icon.svg" width="40" height="40" alt="Mooli"></div>
                    <p>Please wait...</p>
                </div>
            </div>

            <!-- Theme Setting -->
            <div class="themesetting">
                <a href="javascript:void(0);" class="theme_btn"><i class="fa fa-gear fa-spin"></i></a>
                <ul class="list-group">
                    <li class="list-group-item">
                        <ul class="choose-skin list-unstyled mb-0">
                            <li data-theme="green"><div class="green"></div></li>
                            <li data-theme="orange"><div class="orange"></div></li>
                            <li data-theme="blush"><div class="blush"></div></li>
                            <li data-theme="cyan" class="active"><div class="cyan"></div></li>
                            <li data-theme="timber"><div class="timber"></div></li>
                            <li data-theme="blue"><div class="blue"></div></li>
                            <li data-theme="amethyst"><div class="amethyst"></div></li>
                        </ul>
                    </li>
                </ul>
                <hr>
            </div>

            <!-- Overlay For Sidebars -->
            <div class="overlay"></div>

            <div id="wrapper">

                <!-- Page top navbar -->
                <nav class="navbar navbar-fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-left">
                            <div class="navbar-btn">
                                <a href="index.html"><img src="assets/images/icon.svg" alt="Mooli Logo" class="img-fluid logo"></a>
                                <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-align-left"></i></button>
                            </div>
                        </div>
                        <div class="navbar-right">
                            <div id="navbar-menu">
                                <ul class="nav navbar-nav">
                                    <li class="hidden-xs"><a href="javascript:void(0);" id="btnFullscreen" class="icon-menu"><i class="fa fa-arrows-alt"></i></a></li>
                                    {{-- <li><a href="page-login.html" class="icon-menu"><i class="fa fa-power-off"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>

                <!-- Main left sidebar menu -->
                <div id="left-sidebar" class="sidebar">
                    <a href="#" class="menu_toggle"><i class="fa fa-angle-left"></i></a>
                    <div class="navbar-brand">
                        <a href="index.html"><img src="{{ asset('images/icon.svg') }}" alt="Mooli Logo" class="img-fluid logo"><span>Chemical</span></a>
                        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
                    </div>
                    <div class="sidebar-scroll">
                        <div class="user-account">
                            <div class="user_div">
                                <img src="{{ asset('images/user.png') }}" class="user-photo" alt="User Profile Picture">
                            </div>
                            <div class="dropdown">
                                <span>Web Developer,</span>
                                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>{{ Auth::user()->name }}</strong></a>
                                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                                    <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i>Messages</a></li>
                                    <li><a href="#"><i class="fa fa-gear"></i>Settings</a></li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fa fa-power-off"></i>Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <nav id="left-sidebar-nav" class="sidebar-nav">
                            <ul id="main-menu" class="metismenu animation-li-delay">
                                <li class="header">Main</li>
                                <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                                <li class="header">Data Master</li>
                                <li><a href="{{ route('barang') }}"><i class="fa fa-tasks"></i> <span>Data Unit</span></a></li>
                                <li><a href="{{ route('satuan') }}"><i class="fa fa-th-list"></i> <span>Satuan</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Main body part  -->
                @yield('content')

            </div>

        </div>
        <!-- Javascript -->
        <script src="{{ asset('bundles/libscripts.bundle.js') }}"></script>
        <script src="{{ asset('bundles/vendorscripts.bundle.js') }}"></script>
        <script src="{{ asset('vendor/multi-select/js/jquery.multi-select.js') }}"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <!-- Vedor js file and create bundle with grunt  -->


        <!-- Project core js file minify with grunt -->
        <script src="{{ asset('bundles/mainscripts.bundle.js') }}"></script>

        <script>
            $(document).ready( function () {
                $('#chemical').DataTable();
            } );
            $('#barang_id').change(function(){
                var id = $(this).val();
                var url = '{{ route("getDetailBarang", ":id") }}';
                url = url.replace(':id', id);

                $.ajax({
                    url: url,
                    type: 'get',
                    dataType: 'json',
                    success: function(response) {
                        if(response !== null) {
                            $('#kimap').val(response.kimap);
                            $('#satuan').val(response.satuan.name);
                        }
                    }
                });
            });
            $(document).on('change', '#soh',function(){
                var ketahanan = ((parseInt($('#soh').val())+parseInt($('#ospr').val())+parseInt($('#ospo').val()))/parseInt($('#konsumsi').val())) * 30
                $('#ketahanan_stock').val(ketahanan);
                var danger = "Stock Kurang dari 30";
                var warning = "Stock Mendekati 30";
                var aman = "Stock Aman";
                if(parseInt($('#ketahanan_stock').val()) < 30){
                    $('#ket').val(danger)
                } else if(parseInt($('#ketahanan_stock').val()) < 50){
                    $('#ket').val(warning)
                } else {
                    $('#ket').val(aman)
                }
            });
            $(document).on('change', '#ospr',function(){
                var ketahanan = ((parseInt($('#soh').val())+parseInt($('#ospr').val())+parseInt($('#ospo').val()))/parseInt($('#konsumsi').val())) * 30
                $('#ketahanan_stock').val(ketahanan);
                var danger = "Stock Kurang dari 30";
                var warning = "Stock Mendekati 30";
                var aman = "Stock Aman";
                if(parseInt($('#ketahanan_stock').val()) < 30){
                    $('#ket').val(danger)
                } else if(parseInt($('#ketahanan_stock').val()) < 50){
                    $('#ket').val(warning)
                } else {
                    $('#ket').val(aman)
                }
            });
            $(document).on('change', '#ospo',function(){
                var ketahanan = ((parseInt($('#soh').val())+parseInt($('#ospr').val())+parseInt($('#ospo').val()))/parseInt($('#konsumsi').val())) * 30
                $('#ketahanan_stock').val(ketahanan);
                var danger = "Stock Kurang dari 30";
                var warning = "Stock Mendekati 30";
                var aman = "Stock Aman";
                if(parseInt($('#ketahanan_stock').val()) < 30){
                    $('#ket').val(danger)
                } else if(parseInt($('#ketahanan_stock').val()) < 50){
                    $('#ket').val(warning)
                } else {
                    $('#ket').val(aman)
                }
            });
            $(document).on('change', '#lead_time', function(){
                var indikator = (parseInt($('#ketahanan_stock').val())/parseInt($('#lead_time').val()))
                $('#indikator').val(indikator);
            })
        </script>

        <script>
            $(document).ready( function () {
                $('#chemical').DataTable();
            } );
            $('#barang_id_edit').change(function(){
                var id = $(this).val();
                var url = '{{ route("getDetailBarang", ":id") }}';
                url = url.replace(':id', id);

                $.ajax({
                    url: url,
                    type: 'get',
                    dataType: 'json',
                    success: function(response) {
                        if(response !== null) {
                            $('#kimap_edit').val(response.kimap);
                            $('#satuan_edit').val(response.satuan.name);
                        }
                    }
                });
            });
            $(document).on('change', '#soh_edit',function(){
                var ketahanan_edit = ((parseInt($('#soh_edit').val())+parseInt($('#ospr_edit').val())+parseInt($('#ospo_edit').val()))/parseInt($('#konsumsi_edit').val())) * 30
                $('#ketahanan_stock_edit').val(ketahanan_edit);
                var danger = "Stock Kurang dari 30";
                var warning = "Stock Mendekati 30";
                var aman = "Stock Aman";
                if(parseInt($('#ketahanan_stock_edit').val()) < 30){
                    $('#ket_edit').val(danger)
                } else if(parseInt($('#ketahanan_stock_edit').val()) < 50){
                    $('#ket_edit').val(warning)
                } else {
                    $('#ket_edit').val(aman)
                }
            });
            $(document).on('change', '#ospr_edit',function(){
                var ketahanan = ((parseInt($('#soh_edit').val())+parseInt($('#ospr_edit').val())+parseInt($('#ospo_edit').val()))/parseInt($('#konsumsi_edit').val())) * 30
                $('#ketahanan_stock_edit').val(ketahanan);
                var danger = "Stock Kurang dari 30";
                var warning = "Stock Mendekati 30";
                var aman = "Stock Aman";
                if(parseInt($('#ketahanan_stock_edit').val()) < 30){
                    $('#ket_edit').val(danger)
                } else if(parseInt($('#ketahanan_stock_edit').val()) < 50){
                    $('#ket_edit').val(warning)
                } else {
                    $('#ket_edit').val(aman)
                }
            });
            $(document).on('change', '#ospo_edit',function(){
                var ketahanan = ((parseInt($('#soh_edit').val())+parseInt($('#ospr_edit').val())+parseInt($('#ospo_edit').val()))/parseInt($('#konsumsi_edit').val())) * 30
                $('#ketahanan_stock_edit').val(ketahanan);
                var danger = "Stock Kurang dari 30";
                var warning = "Stock Mendekati 30";
                var aman = "Stock Aman";
                if(parseInt($('#ketahanan_stock_edit').val()) < 30){
                    $('#ket_edit').val(danger)
                } else if(parseInt($('#ketahanan_stock_edit').val()) < 50){
                    $('#ket_edit').val(warning)
                } else {
                    $('#ket_edit').val(aman)
                }
            });

            $(document).on('change', '#lead_time_edit', function(){
                var indikator = (parseInt($('#ketahanan_stock_edit').val())/parseInt($('#lead_time_edit').val()))
                $('#indikator_edit').val(indikator);
            })
        </script>
    </body>
</html>




{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
