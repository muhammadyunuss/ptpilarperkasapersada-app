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
                        <h1 class="mb-0 thm-clr">Portfolio</h1>
                        <ol class="breadcrumb mb-0 list-unstyled">
                            <li class="breadcrumb-item"><a href="index.html" title=""><i class="icon-home"></i>Home</a></li>
                            <li class="breadcrumb-item active">Portfolio</li>
                        </ol>
                    </div>
                    <div class="page-title-img position-absolute">
                        <div class="page-title-img-inner d-block w-100" style="background-image: url({{ asset('front') }}/assets/images/page-title-bg1-2.jpg);"></div><span class="position-absolute sec-watermark center-watermark overlap-btm-shap88 font-200">Portofolio</span>
                    </div>
                </div>
            </div>
        </div><!-- Page Top Wrap -->
    </div>
</section>
<section>
    <div class="w-100 pb-110 pt-50 position-relative">
        <div class="container">
            <div class="why-choose-tabs-wrap position-relative w-100">
                <div class="row align-items-end">
                    <div class="col-md-5 col-sm-12 col-lg-6">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#why-choose-tab1"><span class="position-absolute">01</span><i class="thm-clr icon-build"></i>Pengadaan Material KBSB (Kodam 0813 Kabupaten Bojonegoro) 2019<svg class="position-absolute" viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M28 8L20.5 14.9282L20.5 1.0718L28 8Z" fill="#1E1E20" />
                                        <path d="M21 8L0 8" stroke="#1E1E20" />
                            </svg></a></li>
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#why-choose-tab2"><span class="position-absolute">02</span><i class="thm-clr icon-build"></i>Pengadaan Material Rutilahu (Kodam V Brawijaya) 2019<svg class="position-absolute" viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M28 8L20.5 14.9282L20.5 1.0718L28 8Z" fill="#1E1E20" />
                                        <path d="M21 8L0 8" stroke="#1E1E20" />
                            </svg></a></li>
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#why-choose-tab3"><span class="position-absolute">03</span><i class="thm-clr icon-build"></i>Pengadaan Material Rutilahu (Kodam V Brawijaya) 2019<svg class="position-absolute" viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M28 8L20.5 14.9282L20.5 1.0718L28 8Z" fill="#1E1E20" />
                                        <path d="M21 8L0 8" stroke="#1E1E20" />
                            </svg></a></li>
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#why-choose-tab4"><span class="position-absolute">04</span><i class="thm-clr icon-build"></i>Pengadaan Material KBSB (Kodam 0813 Kabupaten Bojonegoro) 2020<svg class="position-absolute" viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M28 8L20.5 14.9282L20.5 1.0718L28 8Z" fill="#1E1E20" />
                                        <path d="M21 8L0 8" stroke="#1E1E20" />
                            </svg></a></li>
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#why-choose-tab5"><span class="position-absolute">05</span><i class="thm-clr icon-build"></i>Pengadaan Material KBSB (Kodam 0813 Kabupaten Bojonegoro) 2020<svg class="position-absolute" viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M28 8L20.5 14.9282L20.5 1.0718L28 8Z" fill="#1E1E20" />
                                <path d="M21 8L0 8" stroke="#1E1E20" />
                            </svg></a></li>
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#why-choose-tab6"><span class="position-absolute">06</span><i class="thm-clr icon-build"></i>Pengadaan Material KBSB (Kodam 0813 Kabupaten Bojonegoro) 2021<svg class="position-absolute" viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M28 8L20.5 14.9282L20.5 1.0718L28 8Z" fill="#1E1E20" />
                                <path d="M21 8L0 8" stroke="#1E1E20" />
                            </svg></a></li>
                        </ul>
                    </div>
                    <div class="col-md-5 col-sm-12 col-lg-6">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link">Nilai Total Kontrak Rp. 16.000.000.000,-</a></li>
                            <li class="nav-item"><a class="nav-link">Nilai Total Kontrak Rp. 18.008.000.000,-</a></li>
                            <li class="nav-item"><a class="nav-link">Nilai Total Kontrak Rp. 13.156.000.000,-</a></li>
                            <li class="nav-item"><a class="nav-link">Nilai Total Kontrak Rp. 14.277.685.000,-</a></li>
                            <li class="nav-item"><a class="nav-link">Nilai Total Kontrak Rp. 19.012.536.000,-</a></li>
                            <li class="nav-item"><a class="nav-link">Nilai Total Kontrak Rp. 26.660.000.000,-</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- Why Choose Tabs Wrap -->
        </div>
    </div>
</section>

@endsection
