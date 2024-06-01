@extends('layouts.admin.main')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Pernyataan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin/home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Data Pernyataan</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @if (session()->has('pesan'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('pesan') }} </div>
                            @endif
                            <div class="d-flex justify-content-end mb-3">
                                <a class="btn btn-success active" href="#" data-toggle="modal"
                                    data-target="#ModalPernyataan">Add Data</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Kode Pernyataan</th>
                                            <th>Nama Pernyataan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pernyataan as $data_pernyataan_admin)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $data_pernyataan_admin->kode_pernyataan }}</td>
                                                <td>{{ $data_pernyataan_admin->pernyataan }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#/edit">
                                                                <i class="fas fa-edit"></i> Edit
                                                            </a>
                                                            <form action="#" method="POST" class="d-inline">
                                                                @csrf
                                                                <button class="dropdown-item" onclick="#">
                                                                    <i class="fas fa-trash-alt"></i> Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <script>
        function confirmDelete(id) {
            if (confirm('Yakin akan menghapus data?')) {
                document.getElementById('deleteForm' + id).submit();
            }
        }
    </script>
    @include('Admin.pernyataan.create')
@endsection
