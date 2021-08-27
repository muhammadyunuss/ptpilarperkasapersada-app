@extends('layouts.layout')

@section('content')
<section>
    <div class="w-100 pb-80 position-relative">
        <div class="page-top-wrap position-relative w-100">
            <div class="container">
                <div class="page-top-inner d-flex flex-wrap align-items-center position-relative w-100">
                    <div class="page-title-info position-relative">
                        <i class="position-absolute"><svg viewBox="0 0 359 354" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M358.5 351H323V300.316L250.863 264.339V331.541H278.904V170.438L201.566 91.0182L200.661 327.921L223.727 351L224.179 71.1066L166.063 3V142.381L126.489 156.862L149.781 267.507L171.49 289.455V212.75H115.635L80.3576 331.541H171.49V306.651H34V351H0" stroke="#f1f1f1" stroke-width="2" />
                            </svg></i>
                        <h1 class="mb-0 thm-clr">Profile Perusahaan</h1>
                        <ol class="breadcrumb mb-0 list-unstyled">
                            <li class="breadcrumb-item"><a href="index.html" title=""><i class="icon-home"></i>Home</a></li>
                            <li class="breadcrumb-item active">Profile Perusahaan</li>
                        </ol>
                    </div>
                    <div class="page-title-img position-absolute">
                        <div class="page-title-img-inner d-block w-100" style="background-image: url({{ asset('front') }}/assets/images/page-title-bg1-2.jpg);"></div><span class="position-absolute sec-watermark center-watermark overlap-btm-shap88 font-200">Perusahaan</span>
                    </div>
                </div>
            </div>
        </div><!-- Page Top Wrap -->
    </div>
</section>
<section>
    <div class="w-100 pt-20 pb-130 position-relative">
        <svg class="sec-btm-rgt-shp overlap-btmshap150 opc-6 stroke-clr position-absolute" width="444" height="721" viewBox="0 0 444 721" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g>
                <path d="M0.769252 365.057L117.32 627.406H292.971L176.421 365.057H0.769252Z" stroke="#000000" />
                <path d="M605.475 68.2185L488.925 330.567L313.273 330.567L429.823 68.2185H605.475Z" stroke="#000000" />
                <path d="M157.597 458.151L274.147 720.5H449.799L333.249 458.151H157.597Z" stroke="#000000" />
                <path d="M449.8 161.312L333.249 423.661L157.598 423.661L274.148 161.312H449.8Z" stroke="#000000" />
                <path d="M233.605 297.339L350.155 559.688H525.807L409.256 297.339H233.605Z" stroke="#000000" />
                <path d="M372.64 0.499969L256.089 262.849L80.4375 262.849L196.988 0.499969H372.64Z" stroke="#000000" />
            </g>
        </svg>
        <div class="container">
            <div class="about-me-wrap w-100">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <div class="about-me-img position-relative w-100">
                            <div class="about-me-bg position-absolute" style="background-image: url({{ asset('front') }}/assets/images/about-me-img-bg-1.png);"></div>
                            <img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/about-me-img-1.jpg" alt="About Me Image">
                            <div class="scl-links v2 w-100">
                                <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <div class="sec-title w-100">
                            <div class="sec-title-inner d-inline-block">
                                <span class="d-block">Tentang Perusahaan</span>
                                <h2 class="mb-0 thm-clr">PT. PILARPERKASA PERSADA <i></i></h2>
                            </div>
                        </div><!-- Sec Title -->

                        <div class="about-me-desc w-100">
                            <p class="mb-0">Perseroan yang didirikan oleh pemilik untuk berkonsentrasi dalam bidang Jasa Pelaksana Pekerjaan Bangunan Gedung , Jasa Pelaksana Pekerjaan Sipil dan Supplier.
                                Pendiri/Pemilik memiliki pengalaman dibisnis Pertambangan Batubara dan Pertambangan Batu Adesit yang telah dilakukan oleh pendiri/pemilik sejak tahun 1999. Dengan berkembangnya kegiatan bisnis yang dilakukan dibidang Pertambangan yang juga banyak aktivitas pekerjaan Konstruksi dan infrastruktur maka pendiri/pemilik mengembangkan usaha dengan menitik beratkan bidang usaha Pekerjaan Pelaksana Jasa Konstruksi Bangunan Gedung, Pelaksana Konstruksi Bangunan Sipil ,Instalasi Mekanikal dan Elektrikal serta Supplier Barang dan Alat Berat dengan mendirikan
                                <strong>PT.PILARPERKASA PERSADA yang disingkat dengan PTPILAR </strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div><!-- About Me Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-60 dark-layer opc3 paralx-70 position-relative">
        <div class="fixed-bg" style="background-image: url({{ asset('front') }}/assets/images/parallax-bg5-1.jpg);"></div>
        <div class="container">
            <div class="sec-title text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <h2 class="mb-0">Bisnis PT Pilarperkasa Persada :</h2>
                </div>
            </div><!-- Sec Title -->
            <div class="serv-create-wrap res-row position-relative w-100">
                <div class="row">
                <div class="col-md-5 col-sm-5 col-lg-3">
                        <div class="serv-create-box text-center position-relative w-100">
                            <span class="position-absolute">01</span>
                            <i class="icon-interior-design thm-clr"></i>
                            <h3 class="mb-0">Tambang</h3>
                            <p class="mb-0">Tambang batu andesit</p>
                            <a class="thm-btn bg-color1 d-inline-block position-relative" href="services.html" title="">More<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-lg-3">
                        <div class="serv-create-box text-center position-relative w-100">
                            <span class="position-absolute">02</span>
                            <i class="icon-interior-design thm-clr"></i>
                            <h3 class="mb-0">Konstruksi</h3>
                            <p class="mb-0">Gedung, Sipil, Mekanikal dan Elektrikal</p>
                            <a class="thm-btn bg-color1 d-inline-block position-relative" href="services.html" title="">More<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-lg-3">
                        <div class="serv-create-box text-center position-relative w-100">
                            <span class="position-absolute">03</span>
                            <i class="icon-build thm-clr"></i>
                            <h3 class="mb-0">Jalan Tol</h3>
                            <p class="mb-0">Pembangunan</p>
                            <a class="thm-btn bg-color1 d-inline-block position-relative" href="services.html" title="">More<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-lg-3">
                        <div class="serv-create-box text-center position-relative w-100">
                            <span class="position-absolute">04</span>
                            <i class="icon-brick thm-clr"></i>
                            <h3 class="mb-0">Supplier</h3>
                            <p class="mb-0">Alat berat dan material</p>
                            <a class="thm-btn bg-color1 d-inline-block position-relative" href="services.html" title="">More<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a>
                        </div>
                    </div>
                </div>
            </div><!-- Services Create Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-140 pb-130 position-relative">
        <svg class="sec-tp-lft-shp opc-6 stroke-clr position-absolute overlap-tp-shap10" width="358" height="721" viewBox="0 0 358 721" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g>
                <path d="M356.475 355.943L239.925 93.594L64.2729 93.594L180.823 355.943L356.475 355.943Z" stroke="#000000" />
                <path d="M-248.231 652.782L-131.68 390.433L43.9714 390.433L-72.579 652.782L-248.231 652.782Z" stroke="#000000" />
                <path d="M199.647 262.849L83.0971 0.49999L-92.5547 0.499974L23.9957 262.849L199.647 262.849Z" stroke="#000000" />
                <path d="M-92.5555 559.688L23.9949 297.339L199.647 297.339L83.0963 559.688L-92.5555 559.688Z" stroke="#000000" />
                <path d="M123.64 423.661L7.08952 161.312L-168.562 161.312L-52.0119 423.661L123.64 423.661Z" stroke="#000000" />
                <path d="M-15.3953 720.5L101.155 458.151L276.807 458.151L160.256 720.5L-15.3953 720.5Z" stroke="#000000" />
            </g>
        </svg>
        <div class="container">
            <div class="sec-title text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <span class="d-block thm-clr">Timeline</span>
                    <h2 class="mb-0">Proyek yang pernah kami kerjakan<i></i></h2>
                </div>
            </div><!-- Sec Title -->
            <div class="timeline-wrap position-relative w-100">
                <ul class="timeline-list position-relative d-flex flex-wrap list-unstyled mb-0">
                    <li>
                        <div class="timeline-box-wrap active position-relative w-100">
                            <div class="timeline-box-head">
                                <h4 class="">2015<i>tahun</i></h4>
                                <span class="d-inline-block position-relative"><i><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round" />
                                            <path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round" />
                                        </svg></i></span>
                            </div>
                            <div class="timeline-box position-relative">
                                <span class="d-block"><i class="icon-calendar-alt thm-clr"></i>June</span>
                                <h4 class="mb-0"><a href="javascript:void(0);" title="">Union Trust Building Repositioning</a></h4>
                                <div class="loc d-block"><span>Jakarta</span>, <span>Indonesia</span></div>
                                <span class="d-block prize-desg">PT Name Commercials</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-box-wrap position-relative w-100">
                            <div class="timeline-box-head">
                                <h4 class="">2016<i>tahun</i></h4>
                                <span class="d-inline-block position-relative"><i><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round" />
                                            <path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round" />
                                        </svg></i></span>
                            </div>
                            <div class="timeline-box position-relative">
                                <span class="d-block"><i class="icon-calendar-alt thm-clr"></i>July</span>
                                <h4 class="mb-0"><a href="javascript:void(0);" title="">Union Trust Building Repositioning</a></h4>
                                <div class="loc d-block"><span>Johor</span>, <span>Malaysia</span></div>
                                <span class="d-block prize-desg">PT Name Commercials</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-box-wrap position-relative w-100">
                            <div class="timeline-box-head">
                                <h4 class="">2017<i>tahun</i></h4>
                                <span class="d-inline-block position-relative"><i><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round" />
                                            <path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round" />
                                        </svg></i></span>
                            </div>
                            <div class="timeline-box position-relative">
                                <span class="d-block"><i class="icon-calendar-alt thm-clr"></i>March</span>
                                <h4 class="mb-0"><a href="javascript:void(0);" title="">Union Trust Building Repositioning</a></h4>
                                <div class="loc d-block"><span>Surabaya</span>, <span>Indonesia</span></div>
                                <span class="d-block prize-desg">PT Name Commercials</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-box-wrap position-relative w-100">
                            <div class="timeline-box-head">
                                <h4 class="">2018<i>tahun</i></h4>
                                <span class="d-inline-block position-relative"><i><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round" />
                                            <path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round" />
                                        </svg></i></span>
                            </div>
                            <div class="timeline-box position-relative">
                                <span class="d-block"><i class="icon-calendar-alt thm-clr"></i>June</span>
                                <h4 class="mb-0"><a href="javascript:void(0);" title="">Union Trust Building Repositioning</a></h4>
                                <div class="loc d-block"><span>Frankurt</span>, <span>German</span></div>
                                <span class="d-block prize-desg">PT Name Commercials</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-box-wrap position-relative w-100">
                            <div class="timeline-box-head">
                                <h4 class="">2019<i>tahun</i></h4>
                                <span class="d-inline-block position-relative"><i><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round" />
                                            <path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round" />
                                        </svg></i></span>
                            </div>
                            <div class="timeline-box position-relative">
                                <span class="d-block"><i class="icon-calendar-alt thm-clr"></i>July</span>
                                <h4 class="mb-0"><a href="javascript:void(0);" title="">Union Trust Building Repositioning</a></h4>
                                <div class="loc d-block"><span>Rome</span>, <span>Italy</span></div>
                                <span class="d-block prize-desg">PT Name Commercials</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div><!-- Timeline Wrap -->
        </div>
    </div>
</section>
@endsection