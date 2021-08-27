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
                        <h1 class="mb-0 thm-clr">Bisnis kami</h1>
                        <ol class="breadcrumb mb-0 list-unstyled">
                            <li class="breadcrumb-item"><a href="index.html" title=""><i class="icon-home"></i>Home</a></li>
                            <li class="breadcrumb-item active">Bisnis Kami</li>
                        </ol>
                    </div>
                    <div class="page-title-img position-absolute">
                        <div class="page-title-img-inner d-block w-100" style="background-image: url({{ asset('front') }}/assets/images/page-title-bg1-2.jpg);"></div><span class="position-absolute sec-watermark center-watermark overlap-btm-shap88 font-200">Bisnis</span>
                    </div>
                </div>
            </div>
        </div><!-- Page Top Wrap -->
    </div>
</section>
<section>
    <div class="w-100 position-relative">
        <div class="services-banner-wrap res-row pb-60 position-relative w-100">
            <div class="row mrg">
                <div class="col-md-6 col-sm-6 col-lg-3">
                    <div class="serv-banner-box mt-80 right-cont position-relative w-100">
                        <div class="serv-banner-img position-relative w-100" style="background-image: url({{ asset('front') }}/assets/images/bisnis/image1.jpeg);"></div>
                        <div class="serv-banner-info position-absolute">
                            <h3 class="thm-clr mb-0 position-relative"><span>Tambang</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-3">
                    <div class="serv-banner-box v2 right-cont position-relative w-100">
                        <div class="serv-banner-img position-relative w-100" style="background-image: url({{ asset('front') }}/assets/images/bisnis/image2.jpg);"></div>
                        <div class="serv-banner-info position-absolute">
                            <h3 class="thm-clr mb-0 position-relative"><span>Konstruksi</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-3">
                    <div class="serv-banner-box mt-160 left-cont position-relative w-100">
                        <div class="serv-banner-img position-relative w-100" style="background-image: url({{ asset('front') }}/assets/images/bisnis/image4.jpg);"></div>
                        <div class="serv-banner-info position-absolute">
                            <h3 class="thm-clr mb-0 position-relative"><span>Jalan Tol</span></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-lg-3">
                    <div class="serv-banner-box v2 right-cont position-relative w-100">
                        <div class="serv-banner-img position-relative w-100" style="background-image: url({{ asset('front') }}/assets/images/bisnis/image3.jpg);"></div>
                        <div class="serv-banner-info position-absolute">
                            <h3 class="thm-clr mb-0 position-relative"><span>Suplier</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Banners Wrap -->
    </div>
</section>
<section>
    <div class="w-100 position-relative">
        <div class="faq-wrap position-relative w-100">
            <div class="faq-inner dark-layer opc8 position-relative w-100">
                <div class="fixed-bg faq-img" style="background-image: url({{ asset('front') }}/assets/images/parallax-bg4A.jpg);"></div>
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
                <span class="position-absolute sec-watermark v-center font-200">Galeri</span>
                <div class="row align-items-center">
                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#serv-tab1">Tambang</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#serv-tab2">Konstruksi</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#serv-tab3">Jalan Tol</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#serv-tab4">Suplier</a></li>
                        </ul>
                    </div>
                    <div class="col-md-8 col-sm-12 col-lg-8">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="serv-tab1">
                                <div class="serv-tab-carousel owl-carousel w-100" id="serv-tab-caro1">
                                    <div class="serv-tab-img w-100"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/gallery-img3-5-1.jpeg" alt="Service Tab Image 1"></div>
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
                                    <div class="serv-tab-img w-100"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/gallery-img3-5-2.jpg" alt="Service Tab Image 1"></div>
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
                                    <div class="serv-tab-img w-100"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/gallery-img3-5-3.jpg" alt="Service Tab Image 1"></div>
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
                                    <div class="serv-tab-img w-100"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/gallery-img3-5-1.jpeg" alt="Service Tab Image 1"></div>
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
