@extends('layouts.user.main')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Profile</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Profile</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">HI!! {{ auth()->user()->nama_lengkap }}</h2>
                <p class="section-lead">
                    Change information about yourself on this page.
                </p>

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
                                            <input type="text" class="form-control" value="{{ auth()->user()->nik }}"
                                                readonly required="">
                                        </div>
                                        <div class="col-12">
                                            <label>Nama lengkap</label>
                                            <input type="text" class="form-control"
                                                value="{{ auth()->user()->nama_lengkap }}" required="">
                                        </div>

                                        <div class="col-12">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" value="{{ auth()->user()->alamat }}"
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
                                            <input type="date" class="form-control"
                                                value="{{ auth()->user()->tanggal_lahir }}" readonly required="">
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
            </div>
        </section>
    </div>
@endsection
