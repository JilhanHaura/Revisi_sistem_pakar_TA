@extends('layouts.user.main')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Konsultasi</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    {{-- <li class="breadcrumb-item"><a href="#">Data Diri</a></li> --}}
                    <li class="breadcrumb-item"><a href="#">Form </a></li>
                    <li class="breadcrumb-item active" aria-current="page">Result</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
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

            <table class="table table-hover border">
                <thead class="thead-light">
                    <tr>
                        <th>Pernyataan yang kamu alami saat ini</th>
                        <th>Tingkat keyakinan</th>
                        <th>Jawaban Anda</th> {{-- CF USER --}}
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
            </table>

            @foreach ($result['output'] as $item)
                <div class="card card-body p-0 mt-5 border" style="box-shadow: none !important;">
                    <div class="card-header bg-primary text-white p-2">
                        <h6 class="font-weight-bold text-white p-2">Tabel perhitungan penyakit:
                            {{ $item['combine'][0]['gejala']['nama_gejala'] }}
                        </h6>
                    </div>

                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th>Pernyataan</th>
                                <th>Jawaban Anda</th> {{-- CF USER --}}
                                <th>Nilai Dari Ahli</th>
                                {{-- CF PAKAR --}}
                                <th>Hasil</th> {{-- CF[H,E] --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($item['combine'] as $c)
                                <tr>
                                    <td>{{ $c['pernyataan']['pernyataan'] }}</td>
                                    <td>{{ $c['input'] }}</td>
                                    <td>{{ $c['expert'] }}</td>
                                    <td>{{ $c['hasil'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot class="font-weight-bold">
                            <tr>
                                <td scope="row"><b> Hasil Akhir</b></td> {{-- Hasil CF --}}
                                <td><span class="text-danger">{{ number_format($item['hasil'], 3) }}</span></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endforeach
            <div class="mt-5">
                @if (!empty($result['output']))
                    <div class="mt-5">
                        <div class="alert alert-success" style="text-align: center">
                            <h5 class="font-weight-bold">Kesimpulan</h5>
                            <p>Berdasarkan dari Pernyataan yang kamu pilih atau alami dan juga berdasarkan Role/Basis aturan
                                yang sudah ditentukan oleh seorang pakar maka perhitungan Algoritma Certainty Factor
                                mengambil nilai CF yang paling tinggi yakni
                                <b>{{ number_format($result['output'][0]['hasil'], 1) }}
                                    ({{ number_format($result['output'][0]['hasil'], 1) * 10 }}%)</b>
                                yaitu <b>{{ $result['output'][0]['combine'][0]['gejala']['nama_gejala'] }}</b>
                            </p>
                            <hr>
                            <p style="text-align: center;">Catatan :</p>
                            @php
                                $nilaiHasil = number_format($result['output'][0]['hasil'], 1) * 10;
                            @endphp
                            @if ($nilaiHasil > 20)
                                <p>Silahkan Konsultasikan Secara Langsung Ke Psikologi Terdekat Anda Untuk Lebih
                                    Lanjutnya</p>
                            @else
                                <p style="text-align: justify">1. Menarik napas dalam <br>
                                    Saat menarik napas dalam-dalam, tubuh menjadi lebih rileks dan aktivitas saraf penyebab
                                    kecemasan di otak dapat berkurang. Ada pula teknik pernapasan yang bisa Anda lakukan
                                    sebagai
                                    cara mengatasi gangguan kecemasan.
                                    <br><br>
                                    Caranya, tarik napas selama 4 detik, kemudian tahan selama 7 detik, lalu lepaskan
                                    kembali
                                    perlahan-lahan dalam 8 detik. Lakukan beberapa kali hingga pikiran lebih tenang.
                                    <br><br>
                                    2. Memusatkan pikiran pada aktivitas yang dijalani <br>
                                    Ketika merasa cemas, fokus Anda akan terganggu. Jika ini terjadi, cobalah untuk kembali
                                    fokus
                                    pada hal yang akan dilakukan, misalnya jika ada jadwal membersihkan rumah, lakukanlah.
                                    Jika ada
                                    jadwal berkumpul dengan teman-teman, pergilah.
                                    <br><br>
                                    Duduk diam tanpa melakukan apa pun dan hanya fokus pada kekhawatiran tentang hal-hal
                                    yang
                                    mungkin terjadi justru akan memperburuk rasa cemas.
                                    <br><br>
                                    3. Menerapkan metode 5-4-3-2-1 <br>
                                    Saat gangguan kecemasan menyerang, lihatlah lingkungan sekitar dan sebutkan 5 benda yang
                                    ada di
                                    sekeliling Anda. Selanjutnya, sebutkan 4 benda yang bisa Anda sentuh. Setelah itu, diam
                                    sejenak dan sebutkan 3 suara yang Anda dengar.
                                    <br><br>
                                    Lanjutkan dengan menyebutkan 2 bau yang bisa Anda hirup. Terakhir, kenali 1 rasa yang
                                    ada di
                                    lidah Anda. Cara mengatasi gangguan kecemasan yang satu ini diyakini dapat menghentikan
                                    pikiran
                                    negatif yang membuat Anda gelisah.
                                    <br><br>
                                    4. Menghindari minuman berkafein dan beralkohol <br>
                                    Cara mengatasi gangguan kecemasan berikutnya adalah dengan menghindari konsumsi minuman
                                    beralkohol
                                    dan berkafein. Alkohol memang dapat memberikan efek rileks dalam jangka pendek. Namun,
                                    jika
                                    dikonsumsi terlalu sering atau berlebihan, alkohol justru dapat memperparah gangguan
                                    kecemasan.
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <p style="text-align: center;">Indikator Penilaian:</p>
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
                @else
                    <div class="alert alert-warning">
                        <p>No data available</p>
                    </div>
                @endif
                <div class="mt-3 text-center">
                    <button onclick="printContent()" class="btn btn-primary mr-1"><i class="fas fa-print mr-1"></i>
                        Print</button>
                </div>
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
@endsection
