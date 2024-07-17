@extends('layouts.user.main')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">About</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="width: 600px; height: auto;">
                    <img class="img-fluid rounded" src="/User/assets/img/mental.jpg" style="width: 100%; height: auto;">
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Tentang Kami</p>
                    <h1 class="display-5 mb-4">Kami dapat membantu anda dalam deteksi dini pada kesehatan mental anda</h1>
                    <p class="mb-4" style="text-align: justify">Layanan kami menggunakan teknologi sistem pakar yang
                        canggih untuk membantu Anda dalam
                        mendeteksi potensi masalah kesehatan mental sejak dini. Sistem pakar ini merupakan perangkat lunak
                        yang dirancang untuk meniru kemampuan pengambilan keputusan seorang ahli di bidang kesehatan mental.
                    </p>

                    <div class="border rounded p-4">
                        <nav>
                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                    aria-selected="true">Story</button>
                                <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
                                    aria-selected="false">Mission</button>
                                <button class="nav-link fw-semi-bold" id="nav-vision-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"
                                    aria-selected="false">Vision</button>
                            </div>
                        </nav>

                        <div class="tab-content" id="nav-tabContent" style="text-align: justify">
                            <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                                aria-labelledby="nav-story-tab">
                                <p>Sistem pakar kesehatan mental kami dirancang untuk memberikan solusi yang cepat dan
                                    akurat dalam mendeteksi masalah kesehatan mental. Dengan menggunakan basis data yang
                                    komprehensif dan algoritma cerdas, kami dapat menyediakan penilaian awal yang bermanfaat
                                    bagi pengguna.</p>
                            </div>
                            <div class="tab-pane fade" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                                <p>Misi kami adalah untuk meningkatkan kesejahteraan mental masyarakat dengan menyediakan
                                    alat deteksi dini yang mudah diakses dan dapat diandalkan. Kami berkomitmen untuk
                                    mendukung kesehatan mental Anda melalui teknologi inovatif.</p>
                            </div>
                            <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                <p>Visi kami adalah menjadi pemimpin dalam teknologi kesehatan mental, menyediakan solusi
                                    yang membantu individu dalam memahami dan mengelola kondisi kesehatan mental mereka
                                    dengan lebih baik.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-times text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>No Hidden Cost</h4>
                                    <span>Layanan kami transparan tanpa biaya tersembunyi, memastikan Anda mendapatkan nilai
                                        terbaik.</span>
                                </div>
                                <div class="border-end d-none d-lg-block"></div>
                            </div>
                            <div class="border-bottom mt-4 d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-users text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>Dedicated Team</h4>
                                    <span>Tim kami berdedikasi untuk memberikan layanan terbaik, dengan profesional yang
                                        berpengalaman di bidang kesehatan mental dan teknologi.</span>
                                </div>
                                <div class="border-end d-none d-lg-block"></div>
                            </div>
                            <div class="border-bottom mt-4 d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-phone text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>24/7 Available</h4>
                                    <span>Kami selalu tersedia 24/7 untuk mendukung Anda, kapan saja Anda membutuhkan
                                        bantuan atau informasi terkait kesehatan mental.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
