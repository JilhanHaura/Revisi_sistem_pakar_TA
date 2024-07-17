@extends('layouts.admin.main')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Gejala</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin/home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Data Gejala</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @if (session()->has('pesan'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('pesan') }}
                                </div>
                            @endif
                            <div class="d-flex justify-content-end mb-3">
                                <a class="btn btn-success active" href="#" data-toggle="modal"
                                    data-target="#ModalGejala">Add Data</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Kode Gejala</th>
                                            <th>Nama Gejala</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_gejala as $data_gejala_admin)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $data_gejala_admin->kode_gejala }}</td>
                                                <td>{{ $data_gejala_admin->nama_gejala }}</td>
                                                <td>
                                                    <a class="btn btn-primary active"
                                                        data-kode_gejala="{{ $data_gejala_admin->kode_gejala }}"
                                                        data-nama_gejala="{{ $data_gejala_admin->nama_gejala }}"
                                                        data-toggle="modal" data-target="#modal-edit">edit</a>
                                                    {{-- <a class="btn btn-danger active"
                                                        href="admin/gejala/destroy/{{ $data_gejala_admin->kode_gejala }}">Delete</a> --}}
                                                    <form
                                                        action="{{ route('admin/gejala/destroy', $data_gejala_admin->kode_gejala) }}"
                                                        method="POST" class="d-inline">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-sm btn-danger btn-delete" type="submit"
                                                            onclick="return confirm('Yakin akan menghapus data?')">Delete</button>
                                                    </form>
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

    @include('admin.gejala.create')
    @include('admin.gejala.edit')

    <!-- Script to handle modal data -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
        $('#modal-edit').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var kode = button.data('kode_gejala');
            var nama = button.data('nama_gejala');

            var modal = $(this);
            modal.find('.modal-body #kode_gejala').val(kode);
            modal.find('.modal-body #nama_gejala').val(nama);
        });
    </script>
@endsection
