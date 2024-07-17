@extends('layouts.user.main')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Jenis-jenis Penyakit
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Jenis-jenis Penyakit</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            {{-- <div class="row g-4 align-items-end mb-4"> --}}
            <div class="col-12">
                <div class="row align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="/User/assets/img/mental-health.webp" alt="Depresi">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <nav>
                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                    aria-selected="true">Depresi</button>
                                <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
                                    aria-selected="false">Anxiety</button>
                                <button class="nav-link fw-semi-bold" id="nav-vision-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"
                                    aria-selected="false">Stress</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                                aria-labelledby="nav-story-tab">
                                <p>Depresi adalah kondisi kesehatan mental yang ditandai dengan perasaan sedih yang
                                    mendalam,
                                    kehilangan minat atau kesenangan dalam aktivitas sehari-hari, dan berbagai gejala fisik
                                    dan
                                    emosional lainnya.</p>
                                <p>Gejala umum termasuk kelelahan, perubahan nafsu makan, gangguan tidur, dan perasaan putus
                                    asa atau tidak berharga.</p>
                                <p>Untuk mengelola depresi dengan lebih baik, penting untuk mendapatkan dukungan dan bantuan
                                    profesional sesegera mungkin.</p>
                            </div>
                            <div class="tab-pane fade" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                                <p>Kecemasan adalah respons alami tubuh terhadap stres yang dianggap mengancam atau
                                    menantang.</p>
                                <p>Gejala kecemasan dapat mencakup detak jantung yang cepat, pernapasan cepat, keringat
                                    berlebihan, dan merasa lelah atau lemah.</p>
                                <p>Kecemasan yang berlebihan dapat mengganggu aktivitas sehari-hari dan mempengaruhi
                                    kualitas
                                    hidup seseorang secara signifikan.</p>
                            </div>
                            <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                <p>Stres adalah respons tubuh terhadap tekanan atau tuntutan dari situasi yang dianggap
                                    menantang.</p>
                                <p>Gejala stres dapat mencakup ketegangan otot, sakit kepala, gangguan tidur, dan perubahan
                                    suasana hati.</p>
                                <p>Stres yang berkepanjangan dapat berdampak negatif pada kesehatan fisik dan mental, oleh
                                    karena itu penting untuk mengelola stres dengan strategi yang tepat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About End -->
@endsection
