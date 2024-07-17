@extends('layouts.admin.main')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail History</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                    <div class="breadcrumb-item">History</div>
                    <div class="breadcrumb-item">Detail History</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
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
                                        @foreach ($historyadmin as $h)
                                            <tr>
                                                {{-- <td>{{ $h->id }}</td> --}}
                                                <td>{{ $h->user->nik }}</td>
                                                <td>{{ $h->user->nama_lengkap }}</td>
                                                <td>{{ $h->tanggal_konsultasi }}</td>
                                                <td>{{ $h->hasil_skrinning }}</td>
                                                <td> {{ number_format($h->cf_max, 1) * 10 }}%</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
