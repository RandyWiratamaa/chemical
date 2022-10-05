@extends('layouts.apps')

@section('content')
<div id="main-content">
    <div class="container-fluid">
        <!-- Page header section  -->
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h1>Hi, Welcomeback {{ ucwords(Auth::user()->name) }}!</h1>
                </div>
            </div>
            @if (session('error'))
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <i class="fa fa-info-warning"></i> <strong>{{ session('error') }}</strong>
                </div>
            @endif
        </div>
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card social theme-bg gradient">
                    <div class="profile-header d-sm-flex justify-content-between justify-content-center">
                        <div class="d-flex">
                            <div class="details">
                                <h5 class="mb-0">{{ ucwords(Auth::user()->name) }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-5">
                <div class="card">
                    <div class="header">
                        <h2>Info</h2>
                    </div>
                    <div class="body">
                        <div class="mr-3">
                            <img src="{{ asset('images/profile/'. $data->photo) }}" style="width: 120px;" class="rounded" alt="">
                        </div>
                        <small class="text-muted">Alamat: </small>
                        <p>{{ $data->alamat }}</p>
                        <hr>
                        <small class="text-muted">Email: </small>
                        <p>{{ Auth::user()->email }}</p>
                        <hr>
                        <small class="text-muted">Jenis Kelamin </small>
                        <p class="m-b-0">{{ $data->jenkel }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-7">
                <div class="card">
                    <div class="header">
                        <h2>Informasi Dasar</h2>
                    </div>
                    <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group c_form_group">
                                        <label>Photo Profile</label>
                                        <input type="file" name="photo" id="photo" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12">
                                    <div class="form-group c_form_group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control" name="name" placeholder="First Name" value="{{ Auth::user()->name }}" readonly>
                                        <input type="hidden" name="id" class="form-control" value="{{ Auth::user()->id }}">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group c_form_group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jenkel">
                                            @foreach ($jenkel as $jenkel)
                                            <option value="{{ $jenkel }}">{{ $jenkel }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group c_form_group">
                                        <label>Alamat</label>
                                        <textarea rows="4" type="text" class="form-control" placeholder="Alamat Lengkap" name="alamat"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary theme-bg gradient">Update</button>
                            <button type="button" class="btn btn-default">Cancel</button>
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="header">
                        <h2>Data Akun</h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="{{ Auth::user()->name }}" disabled placeholder="Username">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" value="{{ Auth::user()->email }}" disabled placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <hr>
                                <h6>Ganti Password</h6>
                                <div class="form-group c_form_group">
                                    <label>Password Sekarang</label>
                                    <input type="password" class="form-control" placeholder="Enter Password">
                                </div>
                                <div class="form-group c_form_group">
                                    <label>Password Baru</label>
                                    <input type="password" class="form-control" placeholder="Enter Password">
                                </div>
                                <div class="form-group c_form_group">
                                    <label>Ulangi Password baru</label>
                                    <input type="password" class="form-control" placeholder="Enter Password">
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary theme-bg gradient">Update</button>
                        <button type="button" class="btn btn-default">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
