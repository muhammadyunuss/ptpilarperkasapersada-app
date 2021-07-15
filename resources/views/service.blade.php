@extends('layouts.layout')

@section('content')
<section>
    <div class="w-100 pb-80 position-relative">
        <div class="page-top-wrap position-relative w-100">
            <div class="container">
                <div class="page-top-inner d-flex flex-wrap align-items-center position-relative w-100">
                    <div class="page-title-info position-relative">
                        <i class="position-absolute"><svg viewBox="0 0 359 354" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M358.5 351H323V300.316L250.863 264.339V331.541H278.904V170.438L201.566 91.0182L200.661 327.921L223.727 351L224.179 71.1066L166.063 3V142.381L126.489 156.862L149.781 267.507L171.49 289.455V212.75H115.635L80.3576 331.541H171.49V306.651H34V351H0" stroke="#f1f1f1" stroke-width="2"/></svg></i>
                        <h1 class="mb-0">Our Services</h1>
                        <ol class="breadcrumb mb-0 list-unstyled">
                            <li class="breadcrumb-item"><a href="index.html" title=""><i class="icon-home"></i>Home</a></li>
                            <li class="breadcrumb-item active">Our Services</li>
                        </ol>
                    </div>
                    <div class="page-title-img position-absolute"><div class="page-title-img-inner d-block w-100" style="background-image: url({{ asset('front') }}/assets/images/page-title-bg2.jpg);"></div><span class="position-absolute sec-watermark center-watermark overlap-btm-shap88 font-200">Services</span></div>
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
                            <a class="thm-btn thm-bg d-inline-block position-relative" href="portfolio-masonry.html" title="">Our Projects<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a>
                        </div>
                    </div>
                </div>
            </div><!-- About Services Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pb-130 position-relative">
        <img class="img-fluid sec-btm-rgt-shp opc-4 position-absolute" src="{{ asset('front') }}/assets/images/sec-shap5.jpg" alt="Sec Shape 5">
        <div class="container">
            <div class="sec-title text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <span class="d-block thm-clr">Services</span>
                    <h2 class="mb-0">What services do we provide<i></i></h2>
                </div>
            </div><!-- Sec Title -->
            <div class="serv-wrap2 position-relative w-100">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="serv-box2-wrap mt-100 position-relative d-block w-100">
                            <span class="position-absolute">01</span>
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 position-relative overflow-hidden w-100"><a class="thm-btn thm-bg d-inline-block position-absolute" href="services.html" title="">More<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/serv-img2-7.jpg" alt="Service Image 7"></div>
                                <div class="serv-info2 position-relative w-100">
                                    <h3 class="mb-0"><a href="services.html" title="">Planning</a></h3>
                                    <p class="mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="serv-box2-wrap position-relative d-block w-100">
                            <span class="position-absolute">02</span>
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 position-relative overflow-hidden w-100"><a class="thm-btn thm-bg d-inline-block position-absolute" href="services.html" title="">More<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/serv-img2-8.jpg" alt="Service Image 8"></div>
                                <div class="serv-info2 position-relative w-100">
                                    <h3 class="mb-0"><a href="services.html" title="">Interior</a></h3>
                                    <p class="mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="serv-box2-wrap mt-100 position-relative d-block w-100">
                            <span class="position-absolute">03</span>
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 position-relative overflow-hidden w-100"><a class="thm-btn thm-bg d-inline-block position-absolute" href="services.html" title="">More<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/serv-img2-9.jpg" alt="Service Image 9"></div>
                                <div class="serv-info2 position-relative w-100">
                                    <h3 class="mb-0"><a href="services.html" title="">Construction</a></h3>
                                    <p class="mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="serv-box2-wrap position-relative d-block w-100">
                            <span class="position-absolute">04</span>
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 position-relative overflow-hidden w-100"><a class="thm-btn thm-bg d-inline-block position-absolute" href="services.html" title="">More<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/serv-img2-4.jpg" alt="Service Image 4"></div>
                                <div class="serv-info2 position-relative w-100">
                                    <h3 class="mb-0"><a href="services.html" title="">Building</a></h3>
                                    <p class="mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="serv-box2-wrap position-relative d-block w-100">
                            <span class="position-absolute">05</span>
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 position-relative overflow-hidden w-100"><a class="thm-btn thm-bg d-inline-block position-absolute" href="services.html" title="">More<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/serv-img2-5.jpg" alt="Service Image 5"></div>
                                <div class="serv-info2 position-relative w-100">
                                    <h3 class="mb-0"><a href="services.html" title="">Exterior</a></h3>
                                    <p class="mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="serv-box2-wrap position-relative d-block w-100">
                            <span class="position-absolute">06</span>
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 position-relative overflow-hidden w-100"><a class="thm-btn thm-bg d-inline-block position-absolute" href="services.html" title="">More<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/serv-img2-6.jpg" alt="Service Image 6"></div>
                                <div class="serv-info2 position-relative w-100">
                                    <h3 class="mb-0"><a href="services.html" title="">Consulting</a></h3>
                                    <p class="mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Services Wrap 2 -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-90 dark-layer opc7 pb-90 position-relative">
        <div class="fixed-bg" style="background-image: url({{ asset('front') }}/assets/images/parallax-bg3.jpg);"></div>
        <span class="frame thm-brd-clr position-absolute"></span>
        <div class="container">
            <div class="sec-title2 position-relative text-center w-100">
                <div class="sec-title2-inner d-inline-block">
                    <h2 class="mb-0">Get architectural news</h2>
                </div>
            </div><!-- Sec Title 2 -->
            <div class="newsletter-wrap position-relative text-center w-100">
                <div class="newsletter-inner d-inline-block">
                    <form class="position-relative w-100" id="subscribe-form" method="post" action="#">
                        <span class="field-box d-block w-100 position-relative"><i class="thm-clr icon-envelope"></i><input name="email" class="email" type="email" placeholder="Your Email"></span>
                        <button class="thm-btn thm-bg position-absolute" type="submit" id="subscribe-button">Sign Up<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></button>
                        <div class="response w-100"></div>
                    </form>
                </div>
            </div><!-- Newsletter Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-130 position-relative">
        <div class="container">
            <div class="port-tabs-wrap position-relative w-100">
                <span class="position-absolute sec-watermark v-center font-200">Port <br> <i>folio</i></span>
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
                                    <div class="customNextBtn"><svg viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.04907e-06 8L7.5 1.0718L7.5 14.9282L1.04907e-06 8Z" fill="#ffffff"/><path d="M7 8L28 8" stroke="#ffffff"/></svg></div>
                                    <div class="customPreviousBtn"><svg viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28 8L20.5 14.9282L20.5 1.0718L28 8Z" fill="#ffffff"/><path d="M21 8L0 8" stroke="#ffffff"/></svg></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="serv-tab2">
                                <div class="serv-tab-carousel owl-carousel w-100" id="serv-tab-caro2">
                                    <div class="serv-tab-img w-100"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/serv-tab-img2-1.jpg" alt="Service Tab Image 1"></div>
                                    <div class="serv-tab-img w-100"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/serv-tab-img2-2.jpg" alt="Service Tab Image 2"></div>
                                </div>
                                <div class="customBtns position-absolute">
                                    <div class="customNextBtn"><svg viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.04907e-06 8L7.5 1.0718L7.5 14.9282L1.04907e-06 8Z" fill="#ffffff"/><path d="M7 8L28 8" stroke="#ffffff"/></svg></div>
                                    <div class="customPreviousBtn"><svg viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28 8L20.5 14.9282L20.5 1.0718L28 8Z" fill="#ffffff"/><path d="M21 8L0 8" stroke="#ffffff"/></svg></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="serv-tab3">
                                <div class="serv-tab-carousel owl-carousel w-100" id="serv-tab-caro3">
                                    <div class="serv-tab-img w-100"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/serv-tab-img3-1.jpg" alt="Service Tab Image 1"></div>
                                    <div class="serv-tab-img w-100"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/serv-tab-img3-2.jpg" alt="Service Tab Image 2"></div>
                                </div>
                                <div class="customBtns position-absolute">
                                    <div class="customNextBtn"><svg viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.04907e-06 8L7.5 1.0718L7.5 14.9282L1.04907e-06 8Z" fill="#ffffff"/><path d="M7 8L28 8" stroke="#ffffff"/></svg></div>
                                    <div class="customPreviousBtn"><svg viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28 8L20.5 14.9282L20.5 1.0718L28 8Z" fill="#ffffff"/><path d="M21 8L0 8" stroke="#ffffff"/></svg></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="serv-tab4">
                                <div class="serv-tab-carousel owl-carousel w-100" id="serv-tab-caro4">
                                    <div class="serv-tab-img w-100"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/serv-tab-img4-1.jpg" alt="Service Tab Image 1"></div>
                                    <div class="serv-tab-img w-100"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/serv-tab-img4-2.jpg" alt="Service Tab Image 2"></div>
                                </div>
                                <div class="customBtns position-absolute">
                                    <div class="customNextBtn"><svg viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.04907e-06 8L7.5 1.0718L7.5 14.9282L1.04907e-06 8Z" fill="#ffffff"/><path d="M7 8L28 8" stroke="#ffffff"/></svg></div>
                                    <div class="customPreviousBtn"><svg viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28 8L20.5 14.9282L20.5 1.0718L28 8Z" fill="#ffffff"/><path d="M21 8L0 8" stroke="#ffffff"/></svg></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Portfolio Tabs Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-130 pb-180 position-relative">
        <span class="position-absolute sec-watermark center-watermark v3 overlap-btmshap120 font-200">Prices</span>
        <div class="container">
            <div class="sec-title text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <span class="d-block thm-clr">Our Prices</span>
                    <h2 class="mb-0">Choose the package that suits you<i></i></h2>
                </div>
            </div><!-- Sec Title -->
            <div class="packages-wrap res-row position-relative w-100">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="package-box bg-color3 text-center position-relative w-100">
                            <div class="package-head w-100">
                                <h4 class="mb-0">Minimal</h4>
                                <h2 class="mb-0">$ 120 <small>/&nbsp;&nbsp;&nbsp; per m2</small></h2>
                            </div>
                            <div class="package-body w-100">
                                <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accu santium doloremque laudantium, totam rem</p>
                                <a class="thm-btn thm-bg d-inline-block position-relative" href="javascript:void(0);" title="">Buy Plan<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="package-box active text-center position-relative w-100">
                            <div class="package-head w-100">
                                <h4 class="mb-0">Standard</h4>
                                <h2 class="mb-0">$ 180 <small>/&nbsp;&nbsp;&nbsp; per m2</small></h2>
                            </div>
                            <div class="package-body w-100">
                                <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas</p>
                                <a class="thm-btn thm-bg d-inline-block position-relative" href="javascript:void(0);" title="">Buy Plan<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="package-box bg-color3 text-center position-relative w-100">
                            <div class="package-head w-100">
                                <h4 class="mb-0">Premium</h4>
                                <h2 class="mb-0">$ 250 <small>/&nbsp;&nbsp;&nbsp; per m2</small></h2>
                            </div>
                            <div class="package-body w-100">
                                <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accu santium doloremque laudantium, totam rem</p>
                                <a class="thm-btn thm-bg d-inline-block position-relative" href="javascript:void(0);" title="">Buy Plan<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Packages Wrap -->
        </div>
    </div>
</section>

@endsection

