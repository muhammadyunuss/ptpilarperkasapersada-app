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
                        <h1 class="mb-0">Our Services</h1>
                        <ol class="breadcrumb mb-0 list-unstyled">
                            <li class="breadcrumb-item"><a href="index.html" title=""><i class="icon-home"></i>Home</a></li>
                            <li class="breadcrumb-item active">Our Services</li>
                        </ol>
                    </div>
                    <div class="page-title-img position-absolute">
                        <div class="page-title-img-inner d-block w-100" style="background-image: url({{ asset('front') }}/assets/images/page-title-bg2.jpg);"></div><span class="position-absolute sec-watermark center-watermark overlap-btm-shap88 font-200">Services</span>
                    </div>
                </div>
            </div>
        </div><!-- Page Top Wrap -->
    </div>
</section>
<section>
    <div class="w-100 pt-80 pb-90 position-relative">
        <img class="img-fluid overlap-btm-shap160 sec-btm-rgt-shp opc-2 position-absolute" src="{{ asset('front') }}/assets/images/sec-shap3.jpg" alt="Sec Shape 3">
        <div class="container">
            <div class="sec-title text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <span class="d-block thm-clr">Our Advantages</span>
                    <h2 class="mb-0">Why you will enjoy working with us<i></i></h2>
                </div>
            </div><!-- Sec Title -->
            <div class="serv-wrap res-row position-relative w-100">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="serv-box text-center w-100">
                            <span class="d-inline-block position-relative thm-clr"><i class="icon-medal"></i></span>
                            <div class="serv-info w-100">
                                <h3 class="mb-0">High Quality Work</h3>
                                <p class="mb-0">Nemo enim ipsam voluptatem voluptas sit aspernatur aut odit fugit, sed quia consequuntur</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="serv-box text-center w-100">
                            <span class="d-inline-block position-relative thm-clr"><i class="icon-sketch"></i></span>
                            <div class="serv-info w-100">
                                <h3 class="mb-0">New Technologies</h3>
                                <p class="mb-0">Duis aute irure dolor pariatur reprehenderit in voluptate velit esse cillum dolore eu fugiat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="serv-box text-center w-100">
                            <span class="d-inline-block position-relative thm-clr"><i class="icon-sofa"></i></span>
                            <div class="serv-info w-100">
                                <h3 class="mb-0">Individual Design</h3>
                                <p class="mb-0">Nemo enim ipsam voluptatem voluptas sit aspernatur aut odit fugit, sed quia consequuntur</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="serv-box text-center w-100">
                            <span class="d-inline-block position-relative thm-clr"><i class="icon-research"></i></span>
                            <div class="serv-info w-100">
                                <h3 class="mb-0">Exact Deadlines</h3>
                                <p class="mb-0">Duis aute irure dolor pariatur reprehenderit in voluptate velit esse cillum dolore eu fugiat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Services Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 position-relative">
        <svg class="sec-btm-rgt-shp overlap-btmshap70 opc-6 stroke-clr position-absolute" width="444" height="721" viewBox="0 0 444 721" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g>
                <path d="M0.769252 365.057L117.32 627.406H292.971L176.421 365.057H0.769252Z" stroke="#000000" />
                <path d="M605.475 68.2185L488.925 330.567L313.273 330.567L429.823 68.2185H605.475Z" stroke="#000000" />
                <path d="M157.597 458.151L274.147 720.5H449.799L333.249 458.151H157.597Z" stroke="#000000" />
                <path d="M449.8 161.312L333.249 423.661L157.598 423.661L274.148 161.312H449.8Z" stroke="#000000" />
                <path d="M233.605 297.339L350.155 559.688H525.807L409.256 297.339H233.605Z" stroke="#000000" />
                <path d="M372.64 0.499969L256.089 262.849L80.4375 262.849L196.988 0.499969H372.64Z" stroke="#000000" />
            </g>
        </svg>
        <span class="position-absolute sec-watermark right-watermark overlap-btm-shap20 sec-btm-rgt-shp font-200 pos-rgt-400">FAQ</span>
        <div class="container">
            <div class="sec-title text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <span class="d-block thm-clr">Faq</span>
                    <h2 class="mb-0">Pengalaman Perusahaan<i></i></h2>
                </div>
            </div><!-- Sec Title -->
            <div class="faq-que-wrap position-relative w-100">
                <div class="faq-que-caro">
                    @foreach ($projects as $key => $project)
                    <div class="faq-que-box-wrap text-center d-block w-100">
                        <div class="faq-que-box position-relative w-100">
                            <span class="position-absolute qu">{{ $key }}</span>
                            <i class="thm-clr icon-check-list"></i>
                            <h4 class="mb-0 position-relative">{{ $project['nama_project'] }}</h4>
                            <div class="faq-que-box-desc w-100">
                                <p class="mb-0">
                                    {{ $project['nama_sub_project'] }} <br>
                                    Pemilik Pekerjaan : <Strong>{{ $project['pemilik_pekerjaan'] }}</Strong> <br>
                                    @if ($project['status']=='1')
                                    Sudah selesai dikerjakan
                                    @else
                                    Sedang dikerjakan
                                    @endif
                                </p>
                            </div>
                            <span class="faq-btn position-absolute thm-bg text-center">
                                <svg class="qu-arw" viewBox="0 0 16 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 28.002L1.0718 20.502L14.9282 20.502L8 28.002Z" fill="#1e1e20" />
                                    <path d="M8 21.002L8 0.00195312" stroke="#1e1e20" />
                                </svg>
                                <svg class="qu-cls" viewBox="0 0 43 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.2471 11.0399L32.4603 32.2531" stroke="#1e1e20" stroke-linecap="round" />
                                    <path d="M32.4602 11.747L11.247 32.9602" stroke="#1e1e20" stroke-linecap="round" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    @endforeach
                    <div class="faq-que-box-wrap text-center d-block w-100">
                        <div class="faq-que-box position-relative w-100">
                            <span class="position-absolute qu">02</span>
                            <i class="thm-clr icon-competitor"></i>
                            <h4 class="mb-0 position-relative">What Determines The Cost Of The Project?</h4>
                            <div class="faq-que-box-desc w-100">
                                <p class="mb-0">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
                            </div>
                            <span class="faq-btn position-absolute thm-bg text-center">
                                <svg class="qu-arw" viewBox="0 0 16 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 28.002L1.0718 20.502L14.9282 20.502L8 28.002Z" fill="#1e1e20" />
                                    <path d="M8 21.002L8 0.00195312" stroke="#1e1e20" />
                                </svg>
                                <svg class="qu-cls" viewBox="0 0 43 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.2471 11.0399L32.4603 32.2531" stroke="#1e1e20" stroke-linecap="round" />
                                    <path d="M32.4602 11.747L11.247 32.9602" stroke="#1e1e20" stroke-linecap="round" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="faq-que-box-wrap text-center d-block w-100">
                        <div class="faq-que-box position-relative w-100">
                            <span class="position-absolute qu">03</span>
                            <i class="thm-clr icon-clock2"></i>
                            <h4 class="mb-0 position-relative">How Long Does It Take To Develope A Project?</h4>
                            <div class="faq-que-box-desc w-100">
                                <p class="mb-0">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
                            </div>
                            <span class="faq-btn position-absolute thm-bg text-center">
                                <svg class="qu-arw" viewBox="0 0 16 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 28.002L1.0718 20.502L14.9282 20.502L8 28.002Z" fill="#1e1e20" />
                                    <path d="M8 21.002L8 0.00195312" stroke="#1e1e20" />
                                </svg>
                                <svg class="qu-cls" viewBox="0 0 43 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.2471 11.0399L32.4603 32.2531" stroke="#1e1e20" stroke-linecap="round" />
                                    <path d="M32.4602 11.747L11.247 32.9602" stroke="#1e1e20" stroke-linecap="round" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="faq-que-box-wrap text-center d-block w-100">
                        <div class="faq-que-box position-relative w-100">
                            <span class="position-absolute qu">04</span>
                            <i class="thm-clr icon-winner"></i>
                            <h4 class="mb-0 position-relative">What Are The Stages Of Creating An Interior Design?</h4>
                            <div class="faq-que-box-desc w-100">
                                <p class="mb-0">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
                            </div>
                            <span class="faq-btn position-absolute thm-bg text-center">
                                <svg class="qu-arw" viewBox="0 0 16 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 28.002L1.0718 20.502L14.9282 20.502L8 28.002Z" fill="#1e1e20" />
                                    <path d="M8 21.002L8 0.00195312" stroke="#1e1e20" />
                                </svg>
                                <svg class="qu-cls" viewBox="0 0 43 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.2471 11.0399L32.4603 32.2531" stroke="#1e1e20" stroke-linecap="round" />
                                    <path d="M32.4602 11.747L11.247 32.9602" stroke="#1e1e20" stroke-linecap="round" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- Faq Question Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 position-relative">
        <div class="services-banner-wrap res-row pb-60 position-relative w-100">
            <div class="row mrg">
                <div class="col-md-6 col-sm-6 col-lg-4">
                    <div class="serv-banner-box mt-80 right-cont position-relative w-100">
                        <div class="serv-banner-img position-relative w-100" style="background-image: url({{ asset('front') }}/assets/images/resources/serv-banner-img1.jpg);"></div>
                        <div class="serv-banner-info position-absolute">
                            <h3 class="mb-0 position-relative">Home Decoration</h3>
                            <a class="thm-btn bg-color1 d-inline-block position-relative" href="about.html" title="">More<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4">
                    <div class="serv-banner-box v2 right-cont position-relative w-100">
                        <div class="serv-banner-img position-relative w-100" style="background-image: url({{ asset('front') }}/assets/images/resources/serv-banner-img2.jpg);"></div>
                        <div class="serv-banner-info position-absolute">
                            <h3 class="mb-0 position-relative"><span>Natural Materials</span> <br> <span>in Interior</span></h3>
                            <a class="d-inline-block thm-clr" href="about.html" title="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4">
                    <div class="serv-banner-box mt-160 left-cont position-relative w-100">
                        <div class="serv-banner-img position-relative w-100" style="background-image: url({{ asset('front') }}/assets/images/resources/serv-banner-img3.jpg);"></div>
                        <div class="serv-banner-info position-absolute">
                            <h3 class="mb-0 position-relative">Architecture of the Future</h3>
                            <a class="thm-btn bg-color1 d-inline-block position-relative" href="about.html" title="">More<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Banners Wrap -->
    </div>
</section>
<section>
    <div class="w-100 pt-70 pb-130 position-relative">
        <img class="img-fluid overlap-btm-shap250 sec-btm-lft-shp opc-1 position-absolute" src="{{ asset('front') }}/assets/images/sec-shap4.jpg" alt="Sec Shape 4">
        <div class="container">
            <div class="about-serv-wrap position-relative w-100">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-lg-6 order-lg-1">
                        <div class="about-serv-img position-relative w-100">
                            <img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/about-serv-img.jpg" alt="About Service Image">
                            <div class="about-serv-info position-absolute text-center w-100">
                                <span class="position-relative d-inline-block"><i class="icon-winner"></i></span>
                                <h3 class="mb-0">We Have Received Many Architectural Awards</h3>
                                <a class="d-inline-block float-right" href="about.html" title="">More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="sec-title w-100">
                            <div class="sec-title-inner d-inline-block">
                                <span class="d-block thm-clr">About Services</span>
                                <h2 class="mb-0">Company providing <br> the best design services<i></i></h2>
                            </div>
                        </div><!-- Sec Title -->
                        <div class="about-serv-desc w-100">
                            <p class="mb-0">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness which of us ever undertakes.</p>
                            <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                            <a class="thm-btn thm-bg d-inline-block position-relative" href="portfolio.html" title="">Our Projects<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a>
                        </div>
                    </div>
                </div>
            </div><!-- About Services Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 position-relative">
        <div class="faq-wrap position-relative w-100">
            <div class="faq-inner dark-layer opc8 position-relative w-100">
                <div class="fixed-bg faq-img" style="background-image: url({{ asset('front') }}/assets/images/parallax-bg4.png);"></div>
                <div class="container">
                    <div class="toggle w-100" id="toggle">
                        <div class="toggle-item w-100">
                            <h4 class="mb-0 position-relative"><span class="position-absolute">01</span>• Pelaksana Pekerjaan Penambangan<i class="thm-bg position-absolute"><svg class="arrow-svg" viewBox="0 0 16 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 28L1.0718 20.5L14.9282 20.5L8 28Z" fill="#1E1E20" />
                                        <path d="M8 21L8 0" stroke="#1E1E20" />
                                    </svg><svg class="close-svg" viewBox="0 0 43 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.2471 11.0399L32.4603 32.2531" stroke="white" stroke-linecap="round" />
                                        <path d="M32.4602 11.747L11.247 32.9602" stroke="white" stroke-linecap="round" />
                                    </svg></i></h4>
                            <div class="toggle-content w-100">
                                <p class="mb-0">• Jasa Pelaksana Pekerjaan Landclearing</p>
                                <p class="mb-0">• Jasa Pelaksana pekerjaan OB Removal</p>
                                <p class="mb-0">• Jasa Pelaksana Pekerjaan Coal Houling</p>
                                <p class="mb-0">• Jasa Pelaksana Penambangan Batu Andesit dan Stone Crushing Plant</p>
                            </div>
                        </div>
                        <div class="toggle-item w-100">
                            <h4 class="mb-0 position-relative"><span class="position-absolute">02</span>• Pelaksana Konstruksi Bangunan Gedung<i class="thm-bg position-absolute"><svg class="arrow-svg" viewBox="0 0 16 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 28L1.0718 20.5L14.9282 20.5L8 28Z" fill="#1E1E20" />
                                        <path d="M8 21L8 0" stroke="#1E1E20" />
                                    </svg><svg class="close-svg" viewBox="0 0 43 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.2471 11.0399L32.4603 32.2531" stroke="white" stroke-linecap="round" />
                                        <path d="M32.4602 11.747L11.247 32.9602" stroke="white" stroke-linecap="round" />
                                    </svg></i></h4>
                            <div class="toggle-content w-100">
                                <p class="mb-0">• Jasa Pelaksana Konstruksi Bangunan Hunian Tunggal Dan Kopel</p>
                                <p class="mb-0">• Jasa Pelaksana Konstruksi Bangunan Komersial</p>
                                <p class="mb-0">• Jasa Pelaksana Konstruksi Bangunan Pendidikan</p>
                                <p class="mb-0">• Jasa Pelaksana Konstruksi Bangunan Kesehatan</p>
                                <p class="mb-0">• Jasa Pelaksana Konstruksi Bangunan Gedung Lainnya</p>
                            </div>
                        </div>
                        <div class="toggle-item w-100">
                            <h4 class="mb-0 position-relative"><span class="position-absolute">03</span>• Pelaksana Konstruksi Bangunan Sipil<i class="thm-bg position-absolute"><svg class="arrow-svg" viewBox="0 0 16 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 28L1.0718 20.5L14.9282 20.5L8 28Z" fill="#1E1E20" />
                                        <path d="M8 21L8 0" stroke="#1E1E20" />
                                    </svg><svg class="close-svg" viewBox="0 0 43 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.2471 11.0399L32.4603 32.2531" stroke="white" stroke-linecap="round" />
                                        <path d="M32.4602 11.747L11.247 32.9602" stroke="white" stroke-linecap="round" />
                                    </svg></i></h4>
                            <div class="toggle-content w-100">
                                <p class="mb-0">• Jasa Pelaksana Untuk Konstruksi Saluran Air,Pelabuhan,Dam, dan Prasarana Sumber Daya Air lainnya</p>
                                <p class="mb-0">• Jasa Pelaksana Untuk Konstruksi Jalan Raya ( Kecuali Jalan Layang ) ,Jalan,Rel Kereta Api, dan Landas Pacu Bandara</p>
                                <p class="mb-0">• Jasa Pelaksanaan Untuk Konstruksi Jembatan,Jalan Layang,Terowongan dan Subways</p>
                            </div>
                        </div>
                        <div class="toggle-item w-100">
                            <h4 class="mb-0 position-relative"><span class="position-absolute">04</span>• Instalasi Mekanikal dan Elektrikal<i class="thm-bg position-absolute"><svg class="arrow-svg" viewBox="0 0 16 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 28L1.0718 20.5L14.9282 20.5L8 28Z" fill="#1E1E20" />
                                        <path d="M8 21L8 0" stroke="#1E1E20" />
                                    </svg><svg class="close-svg" viewBox="0 0 43 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.2471 11.0399L32.4603 32.2531" stroke="white" stroke-linecap="round" />
                                        <path d="M32.4602 11.747L11.247 32.9602" stroke="white" stroke-linecap="round" />
                                    </svg></i></h4>
                            <div class="toggle-content w-100">
                                <p class="mb-0">• Jasa Pelaksana Instalasi Tenaga Listrik Gedung dan Pabrik</p>
                                <p class="mb-0">• Jasa Pelaksana Konstruksi Bangunan Pendidikan</p>
                                <p class="mb-0">• Jasa Pelaksana Konstruksi Bangunan Kesehatan</p>
                                <p class="mb-0">• Jasa Pelaksana Konstruksi Pemasangan Pipa Air ( Plumbing )</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Faq Wrap -->
    </div>
</section>
<section>
    <div class="w-100 pt-130 pb-100 position-relative">
        <div class="container">
            <div class="port-tabs-wrap position-relative w-100">
                <span class="position-absolute sec-watermark v-center font-200">Gallery</span>
                <div class="row align-items-center">
                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#serv-tab1">Interior</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#serv-tab2">Architecture</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#serv-tab3">Exterior</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#serv-tab4">Building</a></li>
                        </ul>
                    </div>
                    <div class="col-md-8 col-sm-12 col-lg-8">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="serv-tab1">
                                <div class="serv-tab-carousel owl-carousel w-100" id="serv-tab-caro1">
                                    <div class="serv-tab-img w-100"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/serv-tab-img1-1.jpg" alt="Service Tab Image 1"></div>
                                    <div class="serv-tab-img w-100"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/serv-tab-img1-2.jpg" alt="Service Tab Image 2"></div>
                                </div>
                                <div class="customBtns position-absolute">
                                    <div class="customNextBtn"><svg viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.04907e-06 8L7.5 1.0718L7.5 14.9282L1.04907e-06 8Z" fill="#ffffff" />
                                            <path d="M7 8L28 8" stroke="#ffffff" />
                                        </svg></div>
                                    <div class="customPreviousBtn"><svg viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M28 8L20.5 14.9282L20.5 1.0718L28 8Z" fill="#ffffff" />
                                            <path d="M21 8L0 8" stroke="#ffffff" />
                                        </svg></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="serv-tab2">
                                <div class="serv-tab-carousel owl-carousel w-100" id="serv-tab-caro2">
                                    <div class="serv-tab-img w-100"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/serv-tab-img2-1.jpg" alt="Service Tab Image 1"></div>
                                    <div class="serv-tab-img w-100"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/serv-tab-img2-2.jpg" alt="Service Tab Image 2"></div>
                                </div>
                                <div class="customBtns position-absolute">
                                    <div class="customNextBtn"><svg viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.04907e-06 8L7.5 1.0718L7.5 14.9282L1.04907e-06 8Z" fill="#ffffff" />
                                            <path d="M7 8L28 8" stroke="#ffffff" />
                                        </svg></div>
                                    <div class="customPreviousBtn"><svg viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M28 8L20.5 14.9282L20.5 1.0718L28 8Z" fill="#ffffff" />
                                            <path d="M21 8L0 8" stroke="#ffffff" />
                                        </svg></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="serv-tab3">
                                <div class="serv-tab-carousel owl-carousel w-100" id="serv-tab-caro3">
                                    <div class="serv-tab-img w-100"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/serv-tab-img3-1.jpg" alt="Service Tab Image 1"></div>
                                    <div class="serv-tab-img w-100"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/serv-tab-img3-2.jpg" alt="Service Tab Image 2"></div>
                                </div>
                                <div class="customBtns position-absolute">
                                    <div class="customNextBtn"><svg viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.04907e-06 8L7.5 1.0718L7.5 14.9282L1.04907e-06 8Z" fill="#ffffff" />
                                            <path d="M7 8L28 8" stroke="#ffffff" />
                                        </svg></div>
                                    <div class="customPreviousBtn"><svg viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M28 8L20.5 14.9282L20.5 1.0718L28 8Z" fill="#ffffff" />
                                            <path d="M21 8L0 8" stroke="#ffffff" />
                                        </svg></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="serv-tab4">
                                <div class="serv-tab-carousel owl-carousel w-100" id="serv-tab-caro4">
                                    <div class="serv-tab-img w-100"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/serv-tab-img4-1.jpg" alt="Service Tab Image 1"></div>
                                    <div class="serv-tab-img w-100"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/serv-tab-img4-2.jpg" alt="Service Tab Image 2"></div>
                                </div>
                                <div class="customBtns position-absolute">
                                    <div class="customNextBtn"><svg viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.04907e-06 8L7.5 1.0718L7.5 14.9282L1.04907e-06 8Z" fill="#ffffff" />
                                            <path d="M7 8L28 8" stroke="#ffffff" />
                                        </svg></div>
                                    <div class="customPreviousBtn"><svg viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M28 8L20.5 14.9282L20.5 1.0718L28 8Z" fill="#ffffff" />
                                            <path d="M21 8L0 8" stroke="#ffffff" />
                                        </svg></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Portfolio Tabs Wrap -->
        </div>
    </div>
</section>

@endsection