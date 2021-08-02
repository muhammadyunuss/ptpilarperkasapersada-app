@extends('layouts.layout')

@section('content')
<section>
    <div class="w-100 pb-80 position-relative">
        <div class="page-top-wrap position-relative w-100">
            <div class="container">
                <div class="page-top-inner d-flex flex-wrap align-items-center position-relative w-100">
                    <div class="page-title-info position-relative">
                        <i class="position-absolute"><svg viewBox="0 0 359 354" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M358.5 351H323V300.316L250.863 264.339V331.541H278.904V170.438L201.566 91.0182L200.661 327.921L223.727 351L224.179 71.1066L166.063 3V142.381L126.489 156.862L149.781 267.507L171.49 289.455V212.75H115.635L80.3576 331.541H171.49V306.651H34V351H0" stroke="#f1f1f1" stroke-width="2"/></svg></i>
                        <h1 class="mb-0  thm-clr">Dewan Komisaris</h1>
                        <ol class="breadcrumb mb-0 list-unstyled">
                            <li class="breadcrumb-item"><a href="index.html" title=""><i class="icon-home"></i>Beranda</a></li>
                            <li class="breadcrumb-item active">Struktur Organisasi</li>
                        </ol>
                    </div>
                    <div class="page-title-img position-absolute"><div class="page-title-img-inner d-block w-100" style="background-image: url({{ asset('front') }}/assets/images/page-title-bg3.jpg);"></div><span class="position-absolute sec-watermark center-watermark overlap-btm-shap88 font-200">DewanKomisaris</span></div>
                </div>
            </div>
        </div><!-- Page Top Wrap -->
    </div>
</section>
<section>
    <div class="w-100 pt-90 pb-120 position-relative">
        <img class="img-fluid overlap-btm-shap100 sec-btm-lft-shp opc-3 position-absolute" src="{{ asset('front') }}/assets/images/sec-shap6.jpg" alt="Sec Shape 6">
        <div class="container">
            <div class="founder-wrap position-relative w-100">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-lg-5">
                        <div class="founder-img w-100"><img class="img-fluid w-100 pt-20" src="{{ asset('front') }}/assets/images/logofix-footer.png" alt="Founder Image"></div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-lg-7">
                        <div class="founder-desc-wrap w-100">
                            <div class="sec-title w-100">
                                <div class="sec-title-inner d-inline-block">
                                    <span class="d-block thm-clr">Dewan Komisaris</span>
                                    <h2 class="mb-0">PT PILARPERKASA PERSADA<i></i></h2>
                                </div>
                            </div><!-- Sec Title -->
                            <div class="founder-desc w-100">
                                <p class="mb-0">Perseroan yang didirikan oleh  pemilik untuk berkonsentrasi dalam bidang Jasa Pelaksana Pekerjaan Bangunan Gedung , Jasa Pelaksana Pekerjaan Sipil dan Supplier</p>
                                <blockquote class="blockquote position-relative"><div class="blockquote-footer position-relative">Dewan</div><i class="lft-qut icon-quote-left thm-clr position-absolute"></i><p class="mb-0">Dalam proses untuk berkembang dan Ingin  menjadi salah satu perusahaan penyediaan barang dan jasa yang dipercaya oleh para pengguna barang dan jasa diseluruh Indonesia  Mempunyai struktur organisasi sebagai berikut  :</p><i class="rgt-qut icon-quote-right thm-clr position-absolute"></i></blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Founder Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pb-50 position-relative">
        <img class="img-fluid overlap-tpshap60 sec-tp-lft-shp opc-03 position-absolute" src="{{ asset('front') }}/assets/images/sec-shap8.jpg" alt="Sec Shape 8">
        <div class="container">
            <div class="sec-title text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <h2><span class="d-block thm-clr">Dewan Komisaris</span></h2>
                </div>
            </div><!-- Sec Title -->
            <div class="roadmap-wrap position-relative w-100">
                <div class="roadmap-box position-relative d-flex flex-wrap align-items-center w-100">
                    <div class="roadmap-img position-relative"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/roadmap-img1-1.jpg" alt="Roadmap Image 1"></div>
                    <div class="roadmap-info-wrap position-relative">
                        <div class="roadmap-info w-100">
                            <span class="d-inline-block position-relative thm-clr"><i class="thm-clr icon-calendar position-absolute"></i>Komisaris Utama</span>
                            <h1 class="d-inline-block position-relative">Anton Yulianto,ST.</h1>
                            <p class="mb-0">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system</p>
                        </div>
                    </div>
                </div>
                <div class="roadmap-box position-relative rev d-flex flex-wrap align-items-center w-100">
                    <div class="roadmap-img position-relative"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/roadmap-img1-2.jpg" alt="Roadmap Image 2"></div>
                    <div class="roadmap-info-wrap position-relative">
                        <div class="roadmap-info w-100">
                            <span class="d-inline-block position-relative thm-clr"><i class="thm-clr icon-calendar position-absolute"></i>Komisaris</span>
                            <h1 class="d-inline-block position-relative">I Nyoman Timur Jaya Ambara,SH.</h1>
                            <p class="mb-0">Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which</p>
                        </div>
                    </div>
                </div>
            </div><!-- Roadmap Wrap -->
        </div>
    </div>
</section>
@endsection
