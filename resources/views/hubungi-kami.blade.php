@extends('layouts.layout')

@section('content')
<section>
    <div class="w-100 pb-80 position-relative">
        <div class="page-top-wrap position-relative w-100">
            <div class="container">
                <div class="page-top-inner d-flex flex-wrap align-items-center position-relative w-100">
                    <div class="page-title-info position-relative">
                        <i class="position-absolute"><svg viewBox="0 0 359 354" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M358.5 351H323V300.316L250.863 264.339V331.541H278.904V170.438L201.566 91.0182L200.661 327.921L223.727 351L224.179 71.1066L166.063 3V142.381L126.489 156.862L149.781 267.507L171.49 289.455V212.75H115.635L80.3576 331.541H171.49V306.651H34V351H0" stroke="#f1f1f1" stroke-width="2"/></svg></i>
                        <h1 class="mb-0 thm-clr">Hubungi Kami</h1>
                        <ol class="breadcrumb mb-0 list-unstyled">
                            <li class="breadcrumb-item"><a href="index.html" title=""><i class="icon-home"></i>Home</a></li>
                            <li class="breadcrumb-item active">Pilarperkasa Persada</li>
                        </ol>
                    </div>
                   <!-- <div class="page-title-img position-absolute"><iframe class="page-title-img-inner cont-map d-block w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193310.17249480143!2d-74.09645863243038!3d40.795632810892606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25907eddf79fb%3A0xed011b43b592fa2c!2s120%20Park%20Ave%2C%20New%20York%2C%20NY%2010017%2C%20USA!5e0!3m2!1sen!2s!4v1610634111327!5m2!1sen!2s"></iframe><span class="position-absolute sec-watermark center-watermark overlap-btm-shap88 font-200">PilarperkasaPersada</span></div> -->
                    <div class="page-title-img position-absolute"><div class="page-title-img-inner d-block w-100" style="background-image: url({{ asset('front') }}/assets/images/page-title-bg1-2.jpg);"></div><span class="position-absolute sec-watermark center-watermark overlap-btm-shap88 font-200">Blog</span></div>
               
                </div>
            </div>
        </div><!-- Page Top Wrap -->
    </div>
</section>
<section>
    <div class="w-100 pt-80 pb-100 position-relative">
        <img class="img-fluid z-3 overlap-tp-shap200 pos-lft--100 sec-tp-lft-shp opc-03 position-absolute" src="assets/images/sec-shap8.jpg" alt="Sec Shape 8">
        <div class="container">
            <div class="sec-title text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <span class="d-block thm-clr">Kantor Pusat</span>
                    <h2 class="mb-0">PT Pilarperkasa Persada<i></i></h2>
                </div>
            </div><!-- Sec Title -->
            <div class="cont-info-wrap res-row position-relative w-100">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-4">

                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="cont-info-box-wrap position-relative w-100">
                                <ul class="cont-info-list mb-0 list-unstyled w-100">
                                    <li><i class="thm-clr icon-map-marker-alt"></i>Sidoarjo, Jawa Timur</li>
                                    <li><i class="thm-clr icon-phone"></i>+ 62</li>
                                    <li><i class="thm-clr icon-envelope"></i><a href="mailto:inspire@mail.com" title="">admin@pilarperkasa.co.id</a></li>
                                    <li><i class="thm-clr icon-clock"></i>Senin - Minggu, 08:00 -  17:00</li>
                                </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">

                    </div>
                </div>
            </div><!-- Contact Info Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-80 pb-90 position-relative">
        <div class="fixed-bg" style="background-image: url({{ asset('front') }}/assets/images/resources/photo-info-img-1.jpg);"></div>
        <div class="container">
            <div class="cont-wrap mt-05 d-flex flex-wrap justify-content-end position-relative w-100">
                <div class="cont-inner position-relative text-center d-inline-block">
                    <i class="position-absolute"><svg viewBox="0 0 308 354" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M358.5 351H323V300.316L250.863 264.339V331.541H278.904V170.438L201.566 91.0182L200.661 327.921L223.727 351L224.179 71.1066L166.063 3V142.381L126.489 156.862L149.781 267.507L171.49 289.455V212.75H115.635L80.3576 331.541H171.49V306.651H34V351H0" stroke="#f1f1f1" stroke-width="2" />
                        </svg></i>
                    <div class="cont-title w-100">
                        <h3 class="mb-0">Get in Touch</h3>
                        <p class="mb-0">But who has any right to find fault</p>
                    </div>
                    <form class="w-100" action="mailto:admin@pilarperkasa.co.id" method="post" enctype="text/plain">
                        <div class="response w-100"></div>
                        <span class="field-box d-block w-100 position-relative"><i class="thm-clr icon-user"></i><input class="fname" type="text" name="name" placeholder="Your Name" required></span>
                        <span class="field-box d-block w-100 position-relative"><i class="thm-clr icon-envelope"></i><input class="email" type="email" name="email" placeholder="Your Email" required></span>
                        <span class="field-box d-block w-100 position-relative"><i class="thm-clr icon-phone"></i><input class="phone" type="tel" name="phone" placeholder="Your Phone" required></span>
                        <span class="field-box d-block w-100 h-500 position-relative"><i class="thm-clr icon-envelope"></i><input class="text" type="text" name="text" placeholder="Your Text Here" required></span>
                        <button class="thm-btn thm-bg d-inline-block position-relative" type="submit" id="submit">Send<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></button>
                    </form>
                </div>
            </div><!-- Contact Wrap -->
        </div>
    </div>
</section>

@endsection
