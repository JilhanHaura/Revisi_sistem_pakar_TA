@extends('layouts.admin.main')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Rule</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                    <div class="breadcrumb-item">Data Rule</div>
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
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="d-flex justify-content-end mb-3">
                                        <a class="btn btn-success active" href="#" data-toggle="modal"
                                            data-target="#ModalRule">Add Data</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="table-1">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">
                                                        #
                                                    </th>
                                                    <th>Pernyataan</th>
                                                    <th>Nilai MB(H,E)</th>
                                                    <th>Nilai MD(H,E)</th>
                                                    {{-- <th>Nilai CF</th> --}}
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @foreach ($pernyataan as $data)
                                                    <td>{{ $data->pernyataan }}</td>
                                                @endforeach --}}


                                                @foreach ($admin as $basis_rule)
                                                    {{-- @dd($basis_rule) --}}
                                                    <tr>
                                                        <th scope="row">{{ $loop->iteration }}</th>
                                                        <td>{{ $basis_rule->data_pernyataan->pernyataan }}</td>
                                                        <td>{{ $basis_rule->nilai_mb }}</td>
                                                        <td>{{ $basis_rule->nilai_md }}</td>
                                                        {{-- <td>{{ $basis_rule->nilai_cf }}</td> --}}
                                                        {{-- <td>
                                                            <div class="btn-group">
                                                                <button type="button"
                                                                    class="btn btn-primary dropdown-toggle"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    Action
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="btn btn-primary active"
                                                                        data-rule="{{ $basis_rule->rule }}"
                                                                        data-gejala_id="{{ $basis_rule->gejala_id }}"
                                                                        data-pernyataan_id="{{ $basis_rule->pernyataan_id }}"
                                                                        data-nilai_mb="{{ $basis_rule->nilai_mb }}"
                                                                        data-nilai_md="{{ $basis_rule->nilai_md }}"
                                                                        data-niali_cf="{{ $basis_rule->nilai_cf }}"
                                                                        data-toggle="modal"
                                                                        data-target="#modal-edit">edit</a>
                                                                    <form action="#" method="POST" class="d-inline">
                                                                        @csrf
                                                                        <button class="dropdown-item" onclick="#">
                                                                            <i class="fas fa-trash-alt"></i> Delete
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </td> --}}
                                                        <td>
                                                            {{-- <a class="btn btn-primary active"
                                                                data-rule="{{ $basis_rule->rule }}"
                                                                data-gejala_id="{{ $basis_rule->gejala_id }}"
                                                                data-pernyataan_id="{{ $basis_rule->pernyataan_id }}"
                                                                data-nilai_mb="{{ $basis_rule->nilai_mb }}"
                                                                data-nilai_md="{{ $basis_rule->nilai_md }}"
                                                                data-niali_cf="{{ $basis_rule->nilai_cf }}"
                                                                data-toggle="modal" data-target="#modal-edit">edit</a> --}}
                                                            <form
                                                                action="{{ route('admin.rule.destroy', $basis_rule->rule) }}"
                                                                method="POST" class="d-inline">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button class="btn btn-sm btn-danger btn-delete"
                                                                    type="submit"
                                                                    onclick="return confirm('Yakin akan menghapus data?')">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-4" style="padding-top: 7%">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="list-group">
                                                @foreach ($data_gejala as $gejala)
                                                    {{-- @dd($gejala) --}}
                                                    <a href="{{ url(request()->fullUrlWithQuery(['gejala_id' => $gejala->kode_gejala])) }}"
                                                        class="list-group-item list-group-item-action gejala-item @if ($gejala->kode_gejala == request()->input('gejala_id')) active @endif">
                                                        {{ $gejala->nama_gejala }}
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <script>
        // Ambil semua elemen dengan kelas 'gejala-item'
        var gejalaItems = document.querySelectorAll('.gejala-item');

        // Loop melalui setiap elemen dan tambahkan event listener untuk menangani klik
        gejalaItems.forEach(function(item) {
            item.addEventListener('click', function() {
                // Hapus kelas 'active' dari semua elemen
                gejalaItems.forEach(function(item) {
                    item.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
    </script>
    @include('Admin.Rule.create')
    @include('Admin.Rule.edit')
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script> --}}
    {{-- <script>
        $('#modal-edit').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var rule = button.data('rule');
            var gejala = button.data('gejala_id');
            var pernyataan = button.data('pernyataan_id');
            var nilai_mb = button.data('nilai_mb');
            var nilai_md = button.data('nilai_md');
            var nilai_cf = button.data('nilai_cf');

            var modal = $(this);
            modal.find('.modal-body #rule').val(rule);
            modal.find('.modal-body #gejala_id').val(gejala_id);
            modal.find('.modal-body #pernyataan_id').val(pernyataan_id);
            modal.find('.modal-body #nilai_mb').val(nilai_mb);
            modal.find('.modal-body #nilai_md').val(nilai_md);
            modal.find('.modal-body #nilai_cf').val(nilai_cf);
        });
    </script> --}}
@endsection
