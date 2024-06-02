@extends('layouts.user.main')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Konsultasi</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Konsultasi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="row" style="padding-left: 30px; padding-right: 30px;">
        <div class="col-12" style="padding-bottom: 20px">
            <div class="card card-primary">
                <div class="card-header">
                    <h4 style="text-align: center">Silahkan Mengisi Data Diri Sebelum Konsultasi</h4>
                </div>
                <div class="alert alert-info">
                    <strong>Disclaimer:</strong> Data yang kami tampilkan dikumpulkan dengan kerja sama Dr. Reni Iskandar,
                    M.Psi., Psikolog, dari RS M. Djamil Padang. Kami dengan tegas menjamin kerahasiaan data Anda.
                </div>
                <div class="card-body" style="padding: 15px">
                    <form method="POST" action="{{ route('user/konsultasi/store') }}" class="needs-validation"
                        novalidate="">
                        @csrf
                        <div class="form-group" style="padding: 15px">
                            <label>User Id</label>
                            <input type="text" class="form-control" name="user_id" value="{{ Auth::user()->nik }}"
                                readonly>
                        </div>
                        <div class="form-group" style="padding: 15px">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama"
                                value="{{ Auth::user()->nama_lengkap }}" readonly>
                        </div>

                        <div class="form-group" style="padding: 15px">
                            <div class="d-block">
                                <label for="tanggal_konsultasi" class="control-label">Tanggal Konsultasi</label>
                            </div>
                            <input id="tanggal_konsultasi" type="date" class="form-control" name="tanggal_konsultasi"
                                tabindex="3" readonly>
                            <div class="invalid-feedback">
                                please fill in your date
                            </div>
                            @error('tanggal_konsultasi')
                                <p class="text text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="card-header">
                            <h4 style="text-align: center">Silahkan Pilih Pernyataan yang sesuai</h4>
                        </div>
                        <div class="row" style="padding: 15px">
                            <label for=""><b><i class="fas fa-th mr-1"></i> Pernyataan-Pernyataan</b></label>
                            <div class="col-md-6">
                                @foreach ($pernyataan->take(21) as $value)
                                    <div class="d-flex align-items-center justify-content-between border mb-2 p-2">
                                        <div>
                                            <span class="ml-2">{{ $value->pernyataan }}</span>
                                        </div>
                                        <div>
                                            {{-- @dd($value) --}}
                                            <select name="skrinning[]" id=""
                                                class="form-control form-control-sm red-border">
                                                <option value="{{ $value->id }}_0">tidak pernah</option>
                                                <option value="{{ $value->id }}_1">kadang-kadang</option>
                                                <option value="" selected>Tidak tahu</option>
                                                <option value="{{ $value->id }}_2">Jarang</option>
                                                <option value="{{ $value->id }}_3">Sering</option>
                                            </select>
                                            {{-- @dd($value) --}}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-md-6">
                                @foreach ($pernyataan->skip(21) as $value)
                                    <div class="d-flex align-items-center justify-content-between border mb-2 p-2">
                                        <div>
                                            <span class="ml-2">{{ $value->pernyataan }}</span>
                                        </div>
                                        <div>
                                            {{-- @dd($value) --}}
                                            <select name="skrinning[]" id=""
                                                class="form-control form-control-sm red-border">
                                                <option value="{{ $value->id }}_0">tidak pernah</option>
                                                <option value="{{ $value->id }}_1">kadang-kadang</option>
                                                <option value="" selected>Tidak tahu</option>
                                                <option value="{{ $value->id }}_2">Jarang</option>
                                                <option value="{{ $value->id }}_3">Sering</option>
                                            </select>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group" style="text-align: center; padding-top: 20px;">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4" name="submit"
                                onclick="return validateForm()">
                                Konsultasi
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-6 mt-3" style="padding: 10px">
                <div class="row">
                    <div class="alert alert-info">
                        <h5 class="font-weight-bold"><strong>Keterangan:</strong> </h5>
                        <p>0: Tidak Pernah</p>
                        <p>1: Kadang-Kadang</p>
                        <p>2: Jarang</p>
                        <p>3: Sering</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function validateForm() {
            var selectedOptions = document.querySelectorAll('select[name="skrinning[]"]');
            var count = 0;

            selectedOptions.forEach(function(option) {
                if (option.value !== "") {
                    count++;
                }
            });

            if (count !== selectedOptions.length) {
                alert("Harap isi semua pernyataan sebelum mengirimkan formulir.");
                return false;
            }

            return true;
        }
        document.addEventListener("DOMContentLoaded", function() {
            var currentDate = new Date();
            var year = currentDate.getFullYear();
            var month = (currentDate.getMonth() + 1).toString().padStart(2, '0');
            var day = currentDate.getDate().toString().padStart(2, '0');
            var today = year + '-' + month + '-' + day;
            document.getElementById('tanggal_konsultasi').value = today;
        });
    </script>
@endsection
