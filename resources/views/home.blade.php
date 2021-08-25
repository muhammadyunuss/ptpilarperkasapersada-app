@extends('layouts.layout')

@section('content')
<section>
    <div class="w-100 pb-80 position-relative">
        <div class="feat-wrap3 position-relative w-100">
            <div class="feat-caro3">
                <div class="feat-item3 text-center overflow-hidden position-relative d-block w-100">
                    <div class="feat-img3 position-relative w-100" style="background-image: url({{ asset('front') }}/assets/images/resources/feat-img3-A.jpg);"> </div>

                </div>
                <div class="feat-item3 text-center overflow-hidden position-relative d-block w-100">
                    <div class="feat-img3 position-relative w-100" style="background-image: url({{ asset('front') }}/assets/images/resources/feat-img3-B.jpg);"> </div>

                </div>
                <div class="feat-item3 text-center overflow-hidden position-relative d-block w-100">
                    <div class="feat-img3 position-relative w-100" style="background-image: url({{ asset('front') }}/assets/images/resources/feat-img3-C.jpg);"></div>

                </div>
                <div class="feat-item3 text-center overflow-hidden position-relative d-block w-100">
                    <div class="feat-img3 position-relative w-100" style="background-image: url({{ asset('front') }}/assets/images/resources/feat-img3-D.jpg);"></div>

                </div>
                <div class="feat-item3 text-center overflow-hidden position-relative d-block w-100">
                    <div class="feat-img3 position-relative w-100" style="background-image: url({{ asset('front') }}/assets/images/resources/feat-img3-E.jpg);"></div>

                </div>
                <div class="feat-item3 text-center overflow-hidden position-relative d-block w-100">
                    <div class="feat-img3 position-relative w-100" style="background-image: url({{ asset('front') }}/assets/images/resources/feat-img3-F.jpg);"></div>

                </div>
                <div class="feat-item3 text-center overflow-hidden position-relative d-block w-100">
                    <div class="feat-img3 position-relative w-100" style="background-image: url({{ asset('front') }}/assets/images/resources/feat-img3-G.jpg);"></div>

                </div>
                <div class="feat-item3 text-center overflow-hidden position-relative d-block w-100">
                    <div class="feat-img3 position-relative w-100" style="background-image: url({{ asset('front') }}/assets/images/resources/feat-img3-H.jpg);"></div>

                </div>
                <div class="feat-item3 text-center overflow-hidden position-relative d-block w-100">
                    <div class="feat-img3 position-relative w-100" style="background-image: url({{ asset('front') }}/assets/images/resources/feat-img3-I.jpg);"></div>

                </div>
                <div class="feat-item3 text-center overflow-hidden position-relative d-block w-100">
                    <div class="feat-img3 position-relative w-100" style="background-image: url({{ asset('front') }}/assets/images/resources/feat-img3-J.jpg);"></div>

                </div>
                <div class="feat-item3 text-center overflow-hidden position-relative d-block w-100">
                    <div class="feat-img3 position-relative w-100" style="background-image: url({{ asset('front') }}/assets/images/resources/feat-img3-K.jpg);"></div>

                </div>
                <div class="feat-item3 text-center overflow-hidden position-relative d-block w-100">
                    <div class="feat-img3 position-relative w-100" style="background-image: url({{ asset('front') }}/assets/images/resources/feat-img3-L.jpg);"></div>

                </div>
            </div>

        </div><!-- Featured Area Wrap 3 -->
        <div class="view-all text-center w-100">
            <a class="thm-btn thm-bg d-inline-block position-relative" href="javascript:void(0);" title="">Lebih Lanjut<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a>
        </div><!-- View All -->

    </div>
</section>
<section>
    <div class="w-100 pt-70 pb-50 position-relative">
        <img class="img-fluid overlap-btm-shap200 sec-btm-rgt-shp opc-2 position-absolute" src="{{ asset('front') }}/assets/images/sec-shap1.jpg" alt="Sec Shape 1">
        <div class="container">
            <div class="sec-title text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <span class="d-block thm-clr">Bisnis</span>
                    <h2 class="mb-0">Bisnis PT Pilarperkasa Persada<i></i></h2>
                </div>
            </div><!-- Sec Title -->
            <div class="serv-wrap2 position-relative w-100">
                <div class="row align-items-end serv-caro">
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="serv-box2-wrap mt-100 position-relative d-block w-100">
                            <span class="position-absolute">01</span>
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 position-relative overflow-hidden w-100"><a class="thm-btn thm-bg d-inline-block position-absolute" href="{{ route('portofolio-tambang') }}" title="">Lebih Lanjut<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/serv-img-1.jpeg" alt="Service Image 1"></div>
                                <div class="serv-info2 position-relative w-100">
                                    <h3 class="mb-0"><a href="{{ route('portofolio-tambang') }}" title="">Tambang</a></h3>
                                    <p class="mb-0">Tambang batu andesit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="serv-box2-wrap position-relative d-block w-100">
                            <span class="position-absolute">02</span>
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 position-relative overflow-hidden w-100"><a class="thm-btn thm-bg d-inline-block position-absolute" href="{{ route('portofolio-konstruksi') }}" title="">Lebih Lanjut<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/serv-img-2.jpg" alt="Service Image 2"></div>
                                <div class="serv-info2 position-relative w-100">
                                    <h3 class="mb-0"><a href="{{ route('portofolio-konstruksi') }}" title="">Konstruksi</a></h3>
                                    <p class="mb-0">Gedung, sipil, mekanikal dan elekterikal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="serv-box2-wrap mt-100 position-relative d-block w-100">
                            <span class="position-absolute">03</span>
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 position-relative overflow-hidden w-100"><a class="thm-btn thm-bg d-inline-block position-absolute" href="{{ route('portofolio-jalantol') }}" title="">Lebih Lanjut<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/serv-img-3.jpg" alt="Service Image 3"></div>
                                <div class="serv-info2 position-relative w-100">
                                    <h3 class="mb-0"><a href="{{ route('portofolio-jalantol') }}" title="">Jalan Tol</a></h3>
                                    <p class="mb-0">Pembangunan jalan tol</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="serv-box2-wrap position-relative d-block w-100">
                            <span class="position-absolute">04</span>
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 position-relative overflow-hidden w-100"><a class="thm-btn thm-bg d-inline-block position-absolute" href="{{ route('portofolio-suplier') }}" title="">Lebih Lanjut<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/.jpg" alt="Service Image 4"></div>
                                <div class="serv-info2 position-relative w-100">
                                    <h3 class="mb-0"><a href="{{ route('portofolio-suplier') }}" title="">Supplier</a></h3>
                                    <p class="mb-0">Alat berat dan material</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Services Wrap 2 -->
        </div>
    </div>
</section>
<div class="w-100 pt-50 pb-130 position-relative">
    <img class="img-fluid sec-btm-lft-shp opc-4 position-absolute" src="{{ asset('front') }}/assets/images/sec-shap2.jpg" alt="Sec Shape 2">
    <div class="container">
        <div class="sec-title text-center w-100">
            <div class="sec-title-inner d-inline-block">
                <span class="d-block thm-clr">Proyek</span>
                <h2 class="mb-0">Beberapa proyek dari kami<i></i></h2>
            </div>
        </div><!-- Sec Title -->
        <div class="projects-wrap2 position-relative w-100">
            <div class="proj-box2 position-relative w-100">
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-lg-7">
                        <div class="proj-img2 position-relative w-100">
                            <div class="proj-bg opc-6 position-absolute" style="background-image: url({{ asset('front') }}/assets/images/resources/proj-bg1-2.png);"></div><a href="{{ route('portofolio-single') }}" title=""><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/proj-img-1.jpg" alt="Project Image 1"></a>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 col-lg-5">
                        <div class="proj-info2 position-relative w-100">
                            <h3 class="mb-0"><i class="icon-construction thm-clr"></i><a href="{{ route('portofolio-single') }}" title="">Gedung Dodiklatpur Situbondo</a></h3>
                            <p class="mb-0">Gedung Dodiklatpur Situbondo</p>
                            <a class="d-inline-block thm-clr" href="{{ route('portofolio-single') }}" title="">Lebih Lanjut</a>
                            <div class="proj-info-list-wrap d-flex flex-wrap justify-content-end w-100">
                                <ul class="proj-info-list2 mb-0 list-unstyled">
                                    <li>Lokasi: <span>Situbondo</span></li>
                                    <li>Area  Bangunan: <span>1 300 m2</span></li>
                                    <li>Tahun: <span>-</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="proj-box2 rev position-relative w-100">
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-lg-7 order-md-1">
                        <div class="proj-img2 position-relative w-100">
                            <div class="proj-bg opc-6 position-absolute" style="background-image: url({{ asset('front') }}/assets/images/resources/proj-bg2-1.png);"></div><a href="{{ route('portofolio-single') }}" title=""><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/proj-img-2.jpg" alt="Project Image 2"></a>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 col-lg-5">
                        <div class="proj-info2 position-relative w-100">
                            <h3 class="mb-0"><i class="icon-hotel thm-clr"></i><a href="{{ route('portofolio-single') }}" title="">Jalan Tol Malang - Pandaan</a></h3>
                            <p class="mb-0">Jalan Tol Malang - Pandaan</p>
                            <a class="d-inline-block thm-clr" href="{{ route('portofolio-single') }}" title="">Lebih Lanjut</a>
                            <div class="proj-info-list-wrap d-flex flex-wrap justify-content-start w-100">
                                <ul class="proj-info-list2 mb-0 list-unstyled">
                                <li>Lokasi: <span>Pandaan</span></li>
                                    <li>Area  Bangunan: <span>1 300 m2</span></li>
                                    <li>Tahun: <span>-</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="proj-box2 position-relative w-100">
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-lg-7">
                        <div class="proj-img2 position-relative w-100">
                            <div class="proj-bg opc-6 position-absolute" style="background-image: url({{ asset('front') }}/assets/images/resources/proj-bg3-1.png);"></div><a href="{{ route('portofolio-single') }}" title=""><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/proj-img-3.jpeg" alt="Project Image 3"></a>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 col-lg-5">
                        <div class="proj-info2 position-relative w-100">
                            <h3 class="mb-0"><i class="icon-real-estate thm-clr"></i><a href="{{ route('portofolio-single') }}" title="">Konstruksi Rumah Ibu Lilik</a></h3>
                            <p class="mb-0">Konstruksi Rumah Ibu Lilik</p>
                            <a class="d-inline-block thm-clr" href="{{ route('portofolio-single') }}" title="">Lebih Lanjut</a>
                            <div class="proj-info-list-wrap d-flex flex-wrap justify-content-end w-100">
                                <ul class="proj-info-list2 mb-0 list-unstyled">
                                <li>Lokasi: <span>Sidoarjo</span></li>
                                    <li>Area  Bangunan: <span>1 300 m2</span></li>
                                    <li>Tahun: <span>-</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Projects Wrap 2 -->
        <div class="view-all mt-60 text-center w-100">
            <a class="thm-btn thm-bg d-inline-block position-relative" href="javascript:void(0);" title="">Semua Proyek<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a>
        </div><!-- View All -->
    </div>
</div>
</section>
<section>
    <div class="w-100 pb-110 position-relative">
        <div class="container">
            <div class="sec-title text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <span class="d-block thm-clr">Slogan</span>
                    <h2 class="mb-0">Kenapa harus memilih kami<i></i></h2>
                </div>
            </div><!-- Sec Title -->
            <div class="why-choose-wrap position-relative w-100">
                <div class="why-choose-caro">
                    <div class="why-choose-item position-relative d-block w-100">
                        <div class="why-choose-img position-relative"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/slogan/01P.png" alt="Why Choose Image 1"></div>
                        <div class="why-choose-info position-absolute">
                            <span>01<i class="icon-labor"></i></span>
                            <h1 class="mb-1 ml-3"><span style="color:#284592" ;>P</span><span style="color:#e14319" ;>erseverence</span></h1>
                            <h3 class="mb-0 mt-3">Kami mempunyai ketekunan dan kegigihan untuk melaksanakan kepercayaan dari para pelanggan</h3>
                        </div>
                    </div>
                    <div class="why-choose-item position-relative d-block w-100">
                        <div class="why-choose-img position-relative"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/slogan/01I.png" alt="Why Choose Image 2"></div>
                        <div class="why-choose-info position-absolute">
                            <span>02<i class="icon-brick"></i></span>
                            <h1 class="mb-1 ml-3"><span style="color:#284592" ;>I</span><span style="color:#e14319" ;>ntegrity</span></h1>
                            <h3 class="mb-0 mt-3">Kami melaksanakan tanggung jawab kepada para pelanggan dengan didasari ketulusan hati untuk mendapatkan hasil terbaik</h3>
                        </div>
                    </div>
                    <div class="why-choose-item position-relative d-block w-100">
                        <div class="why-choose-img position-relative"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/slogan/01L.png" alt="Why Choose Image 3"></div>
                        <div class="why-choose-info position-absolute">
                            <span>03<i class="icon-male"></i></span>
                            <h1 class="mb-1 ml-3"><span style="color:#284592" ;>L</span><span style="color:#e14319" ;>eadership</span></h1>
                            <h3 class="mb-0 mt-3">Setiap Insan PILAR adalah mempunyai fungsi manajemen untuk mempengaruhi, mengarahkan memotivasi dan mengawasi untuk mencapai tujuan dan hasil maksimal untuk kepuasan para pelanggan</h3>
                        </div>
                    </div>
                    <div class="why-choose-item position-relative d-block w-100">
                        <div class="why-choose-img position-relative"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/slogan/01A.png" alt="Why Choose Image 3"></div>
                        <div class="why-choose-info position-absolute">
                            <span>03<i class="icon-research"></i></span>
                            <h1 class="mb-1 ml-3"><span style="color:#284592" ;>A</span><span style="color:#e14319" ;>gile</span></h1>
                            <h3 class="mb-0 mt-3">Kami menyelesaikan semua kepercayaan para pelanggan dengan selalu mengedepankan kecerdasan dalam segala hal untuk mendapatkan hasil terbaik</h3>
                        </div>
                    </div>
                    <div class="why-choose-item position-relative d-block w-100">
                        <div class="why-choose-img position-relative"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/slogan/01R.png" alt="Why Choose Image 3"></div>
                        <div class="why-choose-info position-absolute">
                            <span>03<i class="icon-medal"></i></span>
                            <h1 class="mb-1 ml-3"><span style="color:#284592" ;>R</span><span style="color:#e14319" ;>esponsibility</span></h1>
                            <h3 class="mb-0 mt-3">Setiap Insan PILAR mempunyai Tanggung Jawab yang sama untuk mendapat hasil terbaik bagi para pelanggan </h3>
                        </div>
                    </div>
                </div>
                <div class="pagiInfo"></div>
            </div><!-- Why Choose Us Wrap -->
        </div>
    </div>
</section>
<section>
    <<div class="w-100 pb-110 position-relative">
        <img class="img-fluid sec-btm-lft-shp opc-4 position-absolute" src="{{ asset('front') }}/assets/images/sec-shap2.jpg" alt="Sec Shape 2">
        <div class="container">
            <div class="sec-title text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <span class="d-block thm-clr">Berita terbaru</span>
                    <h2 class="mb-0">Berita tentang PT Pilarperkasa Persada<i></i></h2>
                </div>
            </div><!-- Sec Title -->
            <div class="blog-wrap res-row position-relative w-100">
                <div class="row align-items-end">
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="blog-post-box-wrap position-relative w-100">
                            <div class="blog-post-box w-100">
                                <div class="blog-post-img position-relative overflow-hidden w-100"><a href="https://news.detik.com/berita/d-3240861/tni-al-segera-bangun-fasilitas-pelatihan-prajurit-di-surabaya?utm_source=copy_url&utm_campaign=detikcomsocmed&utm_medium=btn&utm_content=news" title=""><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/blog-post-img-1.jpg" alt="Blog Post Image 1"></a></div>
                                <div class="blog-post-info position-relative w-100">
                                    <span class="blog-post-data d-block"><i class="icon-calendar-alt thm-clr"></i>Aug 02, 2021<b></b></span>
                                    <h3 class="mb-0"><a href="{{ route('blog-detail') }}" title="">Proyek Renovasi Koarmada 2</a></h3>
                                    <p class="mb-0">Tasyakuran untuk memulai pelaksanaan pekerjaan pembangunan pusat isolasi pasien covid bertekanan negatif di Dinas kesehatan KOARMADA 2 TNI AL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="blog-post-box-wrap position-relative w-100">
                            <div class="blog-post-box w-100">
                                <div class="blog-post-img position-relative overflow-hidden w-100"><a href="https://news.detik.com/berita/d-3240861/tni-al-segera-bangun-fasilitas-pelatihan-prajurit-di-surabaya?utm_source=copy_url&utm_campaign=detikcomsocmed&utm_medium=btn&utm_content=news" title=""><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/blog-post-img-2.jpg" alt="Blog Post Image 2"></a></div>
                                <div class="blog-post-info position-relative w-100">
                                    <span class="blog-post-data d-block"><i class="icon-calendar-alt thm-clr"></i>Jul 04, 2021<b></b></span>
                                    <h3 class="mb-0 text-center"><a href="{{ route('blog-detail') }}" title="">Selamatan untuk memulai Proyek Koarmada 2</a></h3>
                                    <p class="mb-0">Tasyakuran untuk memulai pelaksanaan pekerjaan pembangunan pusat isolasi pasien covid bertekanan negatif di Dinas kesehatan KOARMADA 2 TNI AL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="blog-post-box-wrap position-relative w-100">
                            <div class="blog-post-box w-100">
                                <div class="blog-post-img position-relative overflow-hidden w-100"><a href="https://news.detik.com/berita/d-3240861/tni-al-segera-bangun-fasilitas-pelatihan-prajurit-di-surabaya?utm_source=copy_url&utm_campaign=detikcomsocmed&utm_medium=btn&utm_content=news" title=""><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/blog-post-img-1.jpg" alt="Blog Post Image 1"></a></div>
                                <div class="blog-post-info position-relative w-100">
                                    <span class="blog-post-data d-block"><i class="icon-calendar-alt thm-clr"></i>Aug 02, 2021<b></b></span>
                                    <h3 class="mb-0"><a href="{{ route('blog-detail') }}" title="">Proyek Renovasi Koarmada 2</a></h3>
                                    <p class="mb-0">Tasyakuran untuk memulai pelaksanaan pekerjaan pembangunan pusat isolasi pasien covid bertekanan negatif di Dinas kesehatan KOARMADA 2 TNI AL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Blog Wrap -->
            <div class="view-all mt-25 text-center w-100">
                <a class="thm-btn thm-bg d-inline-block position-relative" href="{{ route('blog') }}" title="">Lebih Lanjut<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a>
            </div><!-- View All -->
        </div>
        </div>
</section>
<section>
    <div class="w-100 pb-110 position-relative">
        <div class="spnsrs-wrap position-relative w-100">
            <div class="sec-title text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <span class="d-block thm-clr">Klien</span>
                    <h2 class="mb-0">Siapa saja klien kita<i></i></h2>
                </div>
            </div><!-- Sec Title -->
            <ul class="spnsrs-list justify-content-center align-items-center d-flex flex-wrap mb-0 list-unstyled">
                <li>
                    <div class="spnsr-box text-center w-100">
                        <a href="javascript:void(0);" title=""><img class="img-fluid" src="{{ asset('front') }}/assets/images/resources/spnsr-img-1.png" alt="Sponsor Image 1"></a>
                    </div>
                </li>
                <li>
                    <div class="spnsr-box text-center w-100">
                        <a href="javascript:void(0);" title=""><img class="img-fluid pt-5" src="{{ asset('front') }}/assets/images/resources/spnsr-img-2.png" alt="Sponsor Image 2"></a>
                    </div>
                </li>
                <li>
                    <div class="spnsr-box text-center w-100">
                        <a href="javascript:void(0);" title=""><img class="img-fluid" src="{{ asset('front') }}/assets/images/resources/spnsr-img-3.png" alt="Sponsor Image 3"></a>
                    </div>
                </li>
                <li>
                    <div class="spnsr-box text-center w-100">
                        <a href="javascript:void(0);" title=""><img class="img-fluid" src="{{ asset('front') }}/assets/images/klien/LOGO LANTAMAL V SURABAYA.png" alt="Sponsor Image 1"></a>
                    </div>
                </li>
                <li>
                    <div class="spnsr-box text-center w-100">
                        <a href="javascript:void(0);" title=""><img class="img-fluid" src="{{ asset('front') }}/assets/images/resources/spnsr-img-6.jpg" alt="Sponsor Image 6"></a>
                    </div>
                </li>
                <li>
                    <div class="spnsr-box text-center w-100">
                        <a href="javascript:void(0);" title=""><img class="img-fluid" src="{{ asset('front') }}/assets/images/klien/logo Diskes AL koarmada 2.png" alt="Sponsor Image 1"></a>
                    </div>
                </li>
                <li>
                    <div class="spnsr-box text-center w-100">
                        <a href="javascript:void(0);" title=""><img class="img-fluid pt-4" src="{{ asset('front') }}/assets/images/resources/spnsr-img-4.png" alt="Sponsor Image 4"></a>
                    </div>
                </li>
                <li>
                    <div class="spnsr-box text-center w-100">
                        <a href="javascript:void(0);" title=""><img class="img-fluid" src="{{ asset('front') }}/assets/images/resources/spnsr-img-5.png" alt="Sponsor Image 5"></a>
                    </div>
                </li>
                <li>
                    <div class="spnsr-box text-center w-100">
                        <a href="javascript:void(0);" title=""><img class="img-fluid" src="{{ asset('front') }}/assets/images/klien/logo-BSM.jpeg" alt="Sponsor Image 1"></a>
                    </div>
                </li>

            </ul>
        </div><!-- Sponsors Wrap -->
    </div>
</section>
@endsection
@push('scripts')
<script>
</script>
@endpush

<style>
    .prototype {
        font-family: prototype;
        font-weight: 400;
        font-style: normal;
        transform: scale(1, 1.1);
    }
</style>
