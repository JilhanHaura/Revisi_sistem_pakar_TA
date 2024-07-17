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
                                                    <a class="btn btn-primary active"
                                                        data-kode_pernyataan="{{ $data_pernyataan_admin->kode_pernyataan }}"
                                                        data-pernyataan="{{ $data_pernyataan_admin->pernyataan }}"
                                                        data-toggle="modal" data-target="#modal-edit">edit</a>
                                                    <form
                                                        action="{{ route('admin.pernyataan.destroy', $data_pernyataan_admin->kode_pernyataan) }}"
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
    <script>
        function confirmDelete(id) {
            if (confirm('Yakin akan menghapus data?')) {
                document.getElementById('deleteForm' + id).submit();
            }
        }
    </script>
    @include('Admin.pernyataan.create')
    @include('Admin.pernyataan.edit')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
        $('#modal-edit').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var kode = button.data('kode_pernyataan');
            var pernyataan = button.data('pernyataan');

            var modal = $(this);
            modal.find('.modal-body #kode_pernyataan').val(kode);
            modal.find('.modal-body #pernyataan').val(pernyataan);
        });
    </script>
@endsection
