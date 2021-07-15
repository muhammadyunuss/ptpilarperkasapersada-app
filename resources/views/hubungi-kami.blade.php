@extends('layouts.layout')

@section('content')
<section>
    <div class="w-100 pb-80 position-relative">
        <div class="page-top-wrap position-relative w-100">
            <div class="container">
                <div class="page-top-inner d-flex flex-wrap align-items-center position-relative w-100">
                    <div class="page-title-info position-relative">
                        <i class="position-absolute"><svg viewBox="0 0 359 354" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M358.5 351H323V300.316L250.863 264.339V331.541H278.904V170.438L201.566 91.0182L200.661 327.921L223.727 351L224.179 71.1066L166.063 3V142.381L126.489 156.862L149.781 267.507L171.49 289.455V212.75H115.635L80.3576 331.541H171.49V306.651H34V351H0" stroke="#f1f1f1" stroke-width="2"/></svg></i>
                        <h1 class="mb-0 thm-clr">Contacts</h1>
                        <ol class="breadcrumb mb-0 list-unstyled">
                            <li class="breadcrumb-item"><a href="index.html" title=""><i class="icon-home"></i>Home</a></li>
                            <li class="breadcrumb-item active">Contacts</li>
                        </ol>
                    </div>
                    <div class="page-title-img position-absolute"><iframe class="page-title-img-innergg d-block w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126646.20902683717!2d112.64264297463801!3d-7.275614072036298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf8381ac47f%3A0x3027a76e352be40!2sSurabaya%2C%20Kota%20SBY%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1626325768427!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe><span class="position-absolute sec-watermark center-watermark overlap-btm-shap88 font-200">Contacts</span></div>
                </div>
            </div>
        </div><!-- Page Top Wrap -->
    </div>
</section>
<section>
    <div class="w-100 pt-80 pb-100 position-relative">
        <img class="img-fluid z-3 overlap-tp-shap200 pos-lft--100 sec-tp-lft-shp opc-03 position-absolute" src="{{ asset('front') }}/assets/images/sec-shap8.jpg" alt="Sec Shape 8">
        <div class="container">
            <div class="sec-title text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <span class="d-block thm-clr">Our Address</span>
                    <h2 class="mb-0">Where to find us<i></i></h2>
                </div>
            </div><!-- Sec Title -->
            <div class="cont-info-wrap res-row position-relative w-100">
                <div class="row">
                        <div class="cont-info-box-wrap position-relative w-100">
                            <div class="cont-info-box position-relative w-100">
                                <span class="thm-bg position-absolute text-center">01<svg viewBox="0 0 43 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M43 8L35.5 14.9282L35.5 1.0718L43 8Z" fill="#1E1E20"/><path d="M36 8L0 8" stroke="#1E1E20"/></svg></span>
                                <ul class="cont-info-list mb-0 list-unstyled w-100">
                                    <li><i class="thm-clr icon-map-marker-alt"></i>275 West Avenue, New York, NY 10002, USA</li>
                                    <li><i class="thm-clr icon-phone"></i>+ 1 (234) 567 89 90</li>
                                    <li><i class="thm-clr icon-envelope"></i><a href="mailto:inspire@mail.com" title="">inspire@mail.com</a></li>
                                    <li><i class="th    m-clr icon-clock"></i>Mon - Sat 10 AM - 6 PM</li>
                                </ul>
                            </div>
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
                    <i class="position-absolute"><svg viewBox="0 0 308 354" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M358.5 351H323V300.316L250.863 264.339V331.541H278.904V170.438L201.566 91.0182L200.661 327.921L223.727 351L224.179 71.1066L166.063 3V142.381L126.489 156.862L149.781 267.507L171.49 289.455V212.75H115.635L80.3576 331.541H171.49V306.651H34V351H0" stroke="#f1f1f1" stroke-width="2"/></svg></i>
                    <div class="cont-title w-100">
                        <h3 class="mb-0">Get in Touch</h3>
                        <p class="mb-0">But who has any right to find fault</p>
                    </div>
                    <form class="w-100" id="email-form" method="post" action="#">
                        <div class="response w-100"></div>
                        <span class="field-box d-block w-100 position-relative"><i class="thm-clr icon-user"></i><input class="fname" type="text" name="fname" placeholder="Your Name" required></span>
                        <span class="field-box d-block w-100 position-relative"><i class="thm-clr icon-envelope"></i><input class="email" type="email" name="email" placeholder="Your Email" required></span>
                        <span class="field-box d-block w-100 position-relative"><i class="thm-clr icon-phone"></i><input class="phone" type="tel" name="phone" placeholder="Your Phone" required></span>
                        <button class="thm-btn thm-bg d-inline-block position-relative" type="submit" id="submit">Send<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></button>
                    </form>
                </div>
            </div><!-- Contact Wrap -->
        </div>
    </div>
</section>

@endsection
