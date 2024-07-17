@extends('layouts.user.main')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">History</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">History</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="card" style="padding-left: 15px; padding-right:15px; padding-top:10px">
        <div class="card-header">
            <h5 class="card-title">History Anda</h5>
        </div>
        <div class="card-body">
            <div class="card card-body p-0 mt-5 border" style="box-shadow: none !important;">
                <table class="table table-hover">
                    <thead class="thead-light">
                        <tr>
                            {{-- <th>ID</th> --}}
                            <th>NIK</th>
                            <th>Nama Lengkap</th>
                            <th>Tanggal Konsultasi</th>
                            <th>Hasil Skrinning</th>
                            <th>Persentase</th>
                            {{-- <th>Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($history as $h)
                            <tr>
                                {{-- <td>{{ $h->id }}</td> --}}
                                <td>{{ $h->user->nik }}</td>
                                <td>{{ $h->user->nama_lengkap }}</td>
                                <td>{{ $h->tanggal_konsultasi }}</td>
                                <td>{{ $h->hasil_skrinning }}</td>
                                <td> {{ number_format($h->cf_max, 1) * 10 }}%</td>
                                {{-- <td>
                                    <a href="{{ route('user/history/show', $h->id) }}" class="btn btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
