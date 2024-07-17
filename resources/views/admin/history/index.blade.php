@extends('layouts.admin.main')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>History</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                    <div class="breadcrumb-item">History</div>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>NIK</th>
                                            <th>Nama Lengkap</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>Email</th>
                                            {{-- <th>Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($historyAdmin as $data)
                                            @if ($data->type != 'admin')
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $data->nik }}</td>
                                                    <td>{{ $data->nama_lengkap }}</td>
                                                    <td>{{ $data->tanggal_lahir }}</td>
                                                    <td>{{ $data->alamat }}</td>
                                                    <td>{{ $data->email }}</td>
                                                    {{-- <td>
                                                        <a href="{{ route('admin.history.detail-history', ['nik' => $data->nik]) }}"
                                                            class="btn btn-primary">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </td> --}}
                                                </tr>
                                            @endif
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
