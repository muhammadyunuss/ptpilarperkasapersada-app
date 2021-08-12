@extends('layouts.layout')

@section('content')

<section>
    <div class="w-100 pb-80 position-relative">
        <div class="page-top-wrap position-relative w-100">
            <div class="container">
                <div class="page-top-inner d-flex flex-wrap align-items-center position-relative w-100">
                    <div class="page-title-info position-relative">
                        <i class="position-absolute"><svg viewBox="0 0 359 354" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M358.5 351H323V300.316L250.863 264.339V331.541H278.904V170.438L201.566 91.0182L200.661 327.921L223.727 351L224.179 71.1066L166.063 3V142.381L126.489 156.862L149.781 267.507L171.49 289.455V212.75H115.635L80.3576 331.541H171.49V306.651H34V351H0" stroke="#f1f1f1" stroke-width="2"/></svg></i>
                        <h1 class="mb-0 thm-clr">Portfolio</h1>
                        <ol class="breadcrumb mb-0 list-unstyled">
                            <li class="breadcrumb-item"><a href="index.html" title=""><i class="icon-home"></i>Home</a></li>
                            <li class="breadcrumb-item active">Portfolio</li>
                        </ol>
                    </div>
                    <div class="page-title-img position-absolute"><div class="page-title-img-inner d-block w-100" style="background-image: url({{ asset('front') }}/assets/images/page-title-bg1-1.jpg);"></div><span class="position-absolute sec-watermark center-watermark overlap-btm-shap88 font-200">Portofolio</span></div>
                </div>
            </div>
        </div><!-- Page Top Wrap -->
    </div>
</section>
<section>
    <div class="w-100 pt-80 pb-100 position-relative">
        <img class="img-fluid overlap-tpshap160 sec-tp-lft-shp opc-03 position-absolute" src="{{ asset('front') }}/assets/images/sec-shap8.jpg" alt="Sec Shape 8">
        <div class="container">
            <div class="sec-title text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <span class="d-block thm-clr">Tambang</span>
                    <h2 class="mb-0">Tambang gallery<i></i></h2>
                </div>
            </div>
            <div class="port-wrap2 position-relative w-100">
                <!-- Sec Title -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-5">
                        <div class="port-box2 text-center position-relative overflow-hidden w-100">
                            <img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/portofolio/image5.jpg" alt="Portfolio Image 1">
                            <div class="port-info2 position-absolute">
                                <h3 class="mb-0"><a href="portfolio-single.html" title="">Gedung Dodiklatpur Situbondo</a></h3>
                                <span class="d-block position-relative">Interior</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-7">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="port-box2 text-center position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/portofolio/image4.jpg" alt="Portfolio Image 2">
                                    <div class="port-info2 position-absolute">
                                        <h3 class="mb-0"><a href="portfolio-single.html" title="">Gedung Dodiklatpur Situbondo</a></h3>
                                        <span class="d-block position-relative">Interior</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="port-cover-box text-center position-relative d-flex flex-wrap align-items-center justify-content-center w-100">
                                    <div class="port-cover-info position-relative d-inline-block">
                                        <i class="thm-clr icon-pictures-folder"></i>
                                        <h3 class="mb-0"><a href="portfolio-single.html" title="">Gedung Gallery</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="port-box2 text-center position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/portofolio/image6.jpg" alt="Portfolio Image 3">
                                    <div class="port-info2 position-absolute">
                                        <h3 class="mb-0"><a href="portfolio-single.html" title="">Gedung Dodiklatpur Situbondo</a></h3>
                                        <span class="d-block position-relative">Architecture</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-8">
                        <div class="port-box2 text-center position-relative overflow-hidden w-100">
                            <img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/portofolio/image7.jpeg" alt="Portfolio Image 4">
                            <div class="port-info2 position-absolute">
                                <h3 class="mb-0"><a href="portfolio-single.html" title="">Gedung Laboratorium Darah RS DKT Jember</a></h3>
                                <span class="d-block position-relative">Architecture</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-4">
                        <div class="port-box2 text-center position-relative overflow-hidden w-100">
                            <img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/portofolio/image8.jpg" alt="Portfolio Image 5">
                            <div class="port-info2 position-absolute">
                                <h3 class="mb-0"><a href="portfolio-single.html" title="">Gedung Laboratorium Darah RS DKT Jember</a></h3>
                                <span class="d-block position-relative">Interior</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Portfolio Wrap 2 -->
        </div>
    </div>
</section>

@endsection
