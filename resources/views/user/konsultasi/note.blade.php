@extends('layouts.user.main')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Result</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Form </a></li>
                    <li class="breadcrumb-item active" aria-current="page">Result</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="card" style="padding-left: 15px; padding-right:15px; padding-top:10px">
        <div class="card-header">
            <h5 class="card-title">Berikut hasil Konsultasi</h5>
        </div>
        <div class="card-body">
            <div class="alert alert-info">
                <strong>Disclaimer:</strong> Hasil hanya berupa skrining.
            </div>
            <div class="row">
                <div class="col-12" style="padding-bottom: 15px">
                    <p><strong><i class="fas fa-address-card"></i> NIK:</strong> {{ Auth::user()->nik }}</p>
                    <p><strong><i class="fas fa-user"></i> Nama:</strong> {{ Auth::user()->nama_lengkap }}</p>
                    <p><strong><i class="fas fa-calendar"></i> Tanggal Konsultasi:</strong>
                        {{ $result['data']['tanggal_konsultasi'] }}</p>
                </div>
            </div>
            <div class="col-12" style="padding: 5px">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="alert alert-success" style="margin-left:30px">
                            <h5 class="font-weight-bold" style="text-align: center">Kesimpulan</h5>
                            <p style="text-align: justify">Berdasarkan dari Pernyataan yang kamu pilih atau alami dan juga
                                berdasarkan Role/Basis aturan
                                yang sudah ditentukan oleh seorang pakar maka perhitungan Algoritma Certainty Factor
                                mengambil nilai CF yang paling tinggi yakni
                                <b>{{ number_format($result['output'][0]['hasil'], 1) }}
                                    ({{ number_format($result['output'][0]['hasil'], 1) * 10 }}%)</b>
                                yaitu <b>{{ $result['output'][0]['combine'][0]['gejala']['nama_gejala'] }}</b>
                            </p>
                        </div>
                    </div>
                    <div class="col-6" style="width: 500px; height: 500px; overflow: hidden; margin-left:100px">
                        @php
                            $image = $result['output'][0]['combine'][0]['gejala']['nama_gejala'];
                        @endphp
                        @if ($image == 'Stress')
                            <img src="/User/assets/img/illustrasi-stress.png" alt="stress"
                                style="max-width:100%; height:auto;">
                        @elseif ($image == 'Anxiety')
                            <img src="/User/assets/img/illusrasi-anxiety.png" alt="anxiety"
                                style="max-width:100%; height:auto;">
                        @else
                            <img src="/User/assets/img/ilustrasi-depresi.jpg" alt="depresi"
                                style="max-width:100%; height:auto;">
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-12">
                @if (!empty($result['output']))
                    <div class="card card-body p-0 border" style="box-shadow: none !important;">
                        <div class="card-header bg-primary text-white p-2">
                            <h6 class="font-weight-bold text-white p-2">Pananganan Awal atau Solusi </h6>
                        </div>
                        @php
                            $nilaiHasil = number_format($result['output'][0]['hasil'], 1) * 10;
                        @endphp
                        @if ($nilaiHasil > 20)
                            <p style="text-align: justify; padding:20px;">Silahkan Konsultasikan Secara Langsung Ke
                                Psikolog Terdekat Anda Untuk Lebih
                                Lanjutnya</p>
                        @else
                            <p style="text-align: justify; padding:20px;"><strong>1. Menarik napas dalam </strong><br>
                                Saat menarik napas dalam-dalam, tubuh menjadi lebih rileks dan aktivitas saraf penyebab
                                kecemasan di otak dapat berkurang. Ada pula teknik pernapasan yang bisa Anda lakukan
                                sebagai
                                cara mengatasi gangguan kecemasan.
                                <br>
                                Caranya, tarik napas selama 4 detik, kemudian tahan selama 7 detik, lalu lepaskan
                                kembali
                                perlahan-lahan dalam 8 detik. Lakukan beberapa kali hingga pikiran lebih tenang.
                                <br>
                                <strong> 2. Memusatkan pikiran pada aktivitas yang dijalani </strong><br>
                                Ketika merasa cemas, fokus Anda akan terganggu. Jika ini terjadi, cobalah untuk kembali
                                fokus
                                pada hal yang akan dilakukan, misalnya jika ada jadwal membersihkan rumah, lakukanlah.
                                Jika ada
                                jadwal berkumpul dengan teman-teman, pergilah.
                                <br>
                                Duduk diam tanpa melakukan apa pun dan hanya fokus pada kekhawatiran tentang hal-hal
                                yang
                                mungkin terjadi justru akan memperburuk rasa cemas.
                                <br>
                                <strong> 3. Menerapkan metode 5-4-3-2-1 </strong> <br>
                                Saat gangguan kecemasan menyerang, lihatlah lingkungan sekitar dan sebutkan 5 benda yang
                                ada di
                                sekeliling Anda. Selanjutnya, sebutkan 4 benda yang bisa Anda sentuh. Setelah itu, diam
                                sejenak dan sebutkan 3 suara yang Anda dengar.
                                <br>
                                Lanjutkan dengan menyebutkan 2 bau yang bisa Anda hirup. Terakhir, kenali 1 rasa yang
                                ada di
                                lidah Anda. Cara mengatasi gangguan kecemasan yang satu ini diyakini dapat menghentikan
                                pikiran
                                negatif yang membuat Anda gelisah.
                                <br>
                                <strong> 4. Menghindari minuman berkafein dan beralkohol </strong> <br>
                                Cara mengatasi gangguan kecemasan berikutnya adalah dengan menghindari konsumsi
                                minuman
                                beralkohol
                                dan berkafein. Alkohol memang dapat memberikan efek rileks dalam jangka pendek.
                                Namun,
                                jika
                                dikonsumsi terlalu sering atau berlebihan, alkohol justru dapat memperparah gangguan
                                kecemasan.
                            </p>
                        @endif
                    </div>
                @else
                    <div class="alert alert-warning">
                        <p>No data available</p>
                    </div>
                @endif
            </div>
            <div class="col-12">
                <div class="card card-body p-0 border" style="box-shadow: none !important;">
                    <div class="card-header bg-primary text-white p-2">
                        <h6 class="font-weight-bold text-white p-2">Indikator Penilaian </h6>
                    </div>
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th>Tingkat</th>
                                <th>Depresi</th>
                                <th>Anxiety</th>
                                <th>Stress</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Normal</td>
                                <td>&lt;0-9</td>
                                <td>&lt;0-7</td>
                                <td>&lt;0-14</td>
                            </tr>
                            <tr>
                                <td>Ringan</td>
                                <td>10-13</td>
                                <td>8-9</td>
                                <td>15-18</td>
                            </tr>
                            <tr>
                                <td>Sedang</td>
                                <td>14-20</td>
                                <td>10-14</td>
                                <td>19-25</td>
                            </tr>
                            <tr>
                                <td>Parah</td>
                                <td>21-27</td>
                                <td>15-19</td>
                                <td>26-33</td>
                            </tr>
                            <tr>
                                <td>Sangat Parah</td>
                                <td>28+</td>
                                <td>20+</td>
                                <td>34+</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="mt-3 text-center">
            <button onclick="printContent()" class="btn btn-primary mr-1"><i class="fas fa-print mr-1"></i>
                Print</button>
            @if (isset($result['id']))
                <a href="{{ route('user/konsultasi/result', ['id' => $result['id']]) }}" class="btn btn-secondary"><i
                        class="fas fa-arrow-right mr-1"></i> Rincian</a>
            @endif
        </div>
    </div>
    </div>
    <script>
        function printContent() {
            var printContents = document.querySelector('.card').innerHTML;
            var originalContents = document.body.innerHTML;

            // Buat elemen baru untuk menyimpan konten yang akan dicetak
            var printElement = document.createElement('div');
            printElement.innerHTML = printContents;

            // Hapus elemen tombol cetak sebelum mencetak
            var printButton = printElement.querySelector('.btn-primary');
            if (printButton) {
                printButton.style.display = 'none';
            }
            document.body.innerHTML = '';
            document.body.appendChild(printElement);
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
    <!-- Page Header End -->
@endsection


{{-- <table class="table table-hover border">
                <thead class="thead-light">
                    <tr>
                        <th>Pernyataan yang kamu alami saat ini</th>
                        <th>Tingkat keyakinan</th>
                        <th>Jawaban Anda</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($result['input']))
                        <table class="table table-hover border">
                            <tbody>
                                @foreach ($result['input'] as $hasil)
                                    <tr>
                                        <td>{{ $hasil['pernyataan'] }}</td>
                                        <td>{{ $hasil['label'] }}</td>
                                        <td>{{ $hasil['hasil'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No input data available.</p>
                    @endif
                </tbody>
            </table> --}}
