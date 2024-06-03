@extends('layouts.user.main')
@section('content')
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Profile</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container h-100 d-flex justify-content-center align-items-center">
        <div class="row w-100">
            <div class="card w-100">
                <form method="post" class="needs-validation" novalidate="">
                    <div class="card-header">
                        <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <label>NIK</label>
                                <input type="text" class="form-control" value="{{ auth()->user()->nik }}" readonly
                                    required="">
                            </div>
                            <div class="col-12">
                                <label>Nama lengkap</label>
                                <input type="text" class="form-control" value="{{ auth()->user()->nama_lengkap }}"
                                    required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-7 col-12">
                                <label>Alamat</label>
                                <input type="text" class="form-control" value="{{ auth()->user()->alamat }}"
                                    required="">
                            </div>
                            <div class="form-group col-md-5 col-12">
                                <label>Status</label>
                                <input type="text" class="form-control" value="{{ auth()->user()->type }}" readonly
                                    required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-7 col-12">
                                <label>Email</label>
                                <input type="email" class="form-control" value="{{ auth()->user()->email }}"
                                    required="">
                            </div>
                            <div class="form-group col-md-5 col-12">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" value="{{ auth()->user()->tanggal_lahir }}"
                                    readonly required="">
                            </div>
                        </div>

                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary" type="submit">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
