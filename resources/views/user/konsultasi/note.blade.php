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
                <div class="row d-flex justify-content-around">
                    <div class="col">
                        <div class="alert alert-success" style="margin-left:30px">
                            <h5 class="font-weight-bold" style="text-align: center">Kesimpulan</h5>
                            @if (number_format($result['output'][0]['hasil'], 1) * 10 == 0)
                                <p style="text-align: justify"> Berdasarkan dari Pernyataan yang kamu pilih atau alami dan
                                    juga berdasarkan Role/Basis
                                    aturan
                                    yang sudah ditentukan oleh seorang pakar maka perhitungan Algoritma Certainty Factor
                                    mengambil nilai CF yang paling tinggi yakni
                                    <b>{{ number_format($result['output'][0]['hasil'], 1) }}
                                        ({{ number_format($result['output'][0]['hasil'], 1) * 10 }}%)</b>
                                    yaitu <b>Normal<b>
                                </p>
                            @else
                                <p>{{ $result['output'][0]['combine'][0]['gejala']['nama_gejala'] }}</p>
                                <p style="text-align: justify">
                                    Berdasarkan dari Pernyataan yang kamu pilih atau alami dan juga berdasarkan Role/Basis
                                    aturan
                                    yang sudah ditentukan oleh seorang pakar maka perhitungan Algoritma Certainty Factor
                                    mengambil nilai CF yang paling tinggi yakni
                                    <b>{{ number_format($result['output'][0]['hasil'], 1) }}
                                        ({{ number_format($result['output'][0]['hasil'], 1) * 10 }}%)</b>
                                    yaitu <b>{{ $result['output'][0]['combine'][0]['gejala']['nama_gejala'] }}</b>
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div style="width: 500px; height: 500px; overflow: hidden;">
                            @php
                                $image = $result['output'][0]['combine'][0]['gejala']['nama_gejala'];
                            @endphp
                            @if (number_format($result['output'][0]['hasil'], 1) * 10 == 0)
                                <img src="/User/assets/img/sehat.png" alt="normal" style="max-width:100%; height:auto;">
                            @elseif ($image == 'Stress')
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
            </div>
            @if (number_format($result['output'][0]['hasil'], 1) * 10 == 0)
                <div class="col-12">
                    @if (!empty($result['output']))
                        <div class="card card-body p-0 border" style="box-shadow: none !important;">
                            <div class="card-header bg-primary text-white p-2">
                                <h6 class="font-weight-bold text-white p-2">Pananganan Awal atau Solusi </h6>
                            </div>
                            <p style="text-align: justify; padding:20px;">Tidak Ada Solusi</p>
                        </div>
                    @else
                        <div class="alert alert-warning">
                            <p>No data available</p>
                        </div>
                    @endif
                </div>
            @else
                <div class="col-12">
                    @if (!empty($result['output']))
                        <div class="card card-body p-0 border" style="box-shadow: none !important;">
                            <div class="card-header bg-primary text-white p-2">
                                <h6 class="font-weight-bold text-white p-2">Pananganan Awal atau Solusi </h6>
                            </div>
                            @php
                                $nilaiHasil = number_format($result['output'][0]['hasil'], 1) * 10;
                                $gejala = $result['output'][0]['combine'][0]['gejala']['nama_gejala'];
                            @endphp
                            @if ($nilaiHasil > 20 && $gejala == 'Depresi')
                                <p style="text-align: justify; padding:20px;">Silahkan Konsultasikan Secara Langsung Ke
                                    Psikolog Terdekat Anda Untuk Lebih
                                    Lanjutnya</p>
                            @elseif ($gejala == 'Depresi')
                                <p style="text-align: justify; padding:20px;">
                                    Dikutip dari jurnal <em>Depresi: Ciri, Penyebab dan Penangannya </em>Oleh: Aries
                                    Dirgayunita<br>
                                    Depresi dapat ditangani dengan perubahan pola
                                    hidup, terapi psikologi, dan pengobatan (obat antiretroviral/ARV). Jangan mengobati diri
                                    sendiri dengan alkohol, merokok berlebihan, atau narkoba karena dapat memperparah
                                    depresi
                                    dan menimbulkan masalah lain. Berikut beberapa cara penanganan depresi:
                                    <br><br>
                                    <strong>1. Perubahan Pola Hidup</strong>
                                    <br>
                                    a. Berolahraga: Menghasilkan pikiran dan perasaan positif yang menghalangi mood negatif.
                                    <br>
                                    b. Mengatur Pola Makan: Hindari kafein, sukrosa (gula), dan pastikan keseimbangan
                                    nutrisi.
                                    <br>
                                    c. Berdoa: Mencari kekuatan dan hiburan dengan berdoa dan bersyukur kepada Tuhan YME.
                                    <br>
                                    d. Memiliki Keberanian untuk Berubah: Melewati kegelapan menuju terang dan berubah.
                                    <br>
                                    e. Rekreasi: Berjalan-jalan di tempat asri, melakukan aktivitas yang disukai untuk
                                    rileks
                                    dan nyaman.
                                </p>
                            @endif
                            @if ($nilaiHasil > 14 && $gejala == 'Anxiety')
                                <p style="text-align: justify; padding:20px;">Silahkan Konsultasikan Secara Langsung Ke
                                    Psikolog Terdekat Anda Untuk Lebih
                                    Lanjutnya</p>
                            @elseif ($gejala == 'Anxiety')
                                <p style="text-align: justify; padding:20px;">Dikutip dari jurnal yang berjudul <em>Upaya
                                        Mengatasi Anxiety Disorder pada Mahasiswa Kedokteran Universitas Sebelas Maret</em>
                                    oleh
                                    Annisa Salsabila Shofiyah Syarif:
                                    <strong>1. Menyelesaikan Tugas dengan
                                        Sebaik-baiknya</strong><br>
                                    Mengatasi kecemasan dengan fokus pada menyelesaikan tugas akademik dengan sebaik-baiknya
                                    dapat membantu mengurangi kecemasan yang berlebihan.
                                    <br><br>
                                    <strong>2. Memperbanyak Ibadah</strong><br>
                                    Meningkatkan frekuensi ibadah dapat memberikan ketenangan batin dan mengurangi rasa
                                    cemas.
                                    <br><br>
                                    <strong>3. Berdoa dan Meminta Doa pada Orangtua</strong><br>
                                    Berdoa dan meminta doa dari orangtua dapat memberikan kekuatan dan ketenangan dalam
                                    menghadapi kecemasan.
                                    <br><br>
                                    <strong>4. Tidur untuk Melupakan Masalah</strong><br>
                                    Tidur yang cukup dapat membantu meredakan kecemasan dengan memberikan waktu bagi tubuh
                                    dan
                                    pikiran untuk beristirahat.
                                </p>
                            @endif
                            @if ($nilaiHasil > 25 && $gejala == 'Stress')
                                <p style="text-align: justify; padding:20px;">Silahkan Konsultasikan Secara Langsung Ke
                                    Psikolog Terdekat Anda Untuk Lebih
                                    Lanjutnya</p>
                            @elseif ($gejala == 'Stress')
                                Oleh: P2PTM Kemenkes RI<br>
                                <strong>1. Bicarakan Keluhan dengan Seseorang yang Dapat Dipercaya</strong><br>
                                Mengungkapkan kecemasan kepada seseorang yang dapat dipercaya dapat membantu meringankan
                                beban
                                dan menemukan solusi.
                                <br><br>
                                <strong>2. Melakukan Kegiatan Sesuai Minat dan Kemampuan</strong><br>
                                Melakukan kegiatan yang sesuai dengan minat dan kemampuan dapat mengalihkan pikiran dari
                                kecemasan dan memberikan perasaan pencapaian.
                                <br><br>
                                <strong>3. Kembangkan Hobi yang Bermanfaat</strong><br>
                                Mengembangkan hobi yang bermanfaat dapat menjadi cara efektif untuk mengurangi kecemasan dan
                                meningkatkan kesejahteraan.
                                <br><br>
                                <strong>4. Meningkatkan Ibadah dan Mendekatkan Diri pada Tuhan</strong><br>
                                Meningkatkan frekuensi ibadah dan mendekatkan diri pada Tuhan dapat memberikan ketenangan
                                batin
                                dan mengurangi rasa cemas.
                                <br><br>
                                <strong>5. Berpikir Positif</strong><br>
                                Berpikir positif dapat membantu mengatasi pikiran negatif yang memicu kecemasan.
                                <br><br>
                                <strong>6. Tenangkan Pikiran dengan Relaksasi</strong><br>
                                Teknik relaksasi seperti meditasi atau pernapasan dalam dapat menenangkan pikiran dan
                                mengurangi
                                kecemasan.
                                <br><br>
                                <strong>7. Jagalah Kesehatan dengan Olahraga</strong><br>
                                Olahraga teratur, tidur cukup, makan makanan bergizi seimbang, dan menjaga kebersihan dapat
                                membantu mengelola kecemasan dan meningkatkan kesehatan secara keseluruhan.
                                </p>
                            @endif
                        </div>
                    @else
                        <div class="alert alert-warning">
                            <p>No data available</p>
                        </div>
                    @endif
                </div>
            @endif
            <br>
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
