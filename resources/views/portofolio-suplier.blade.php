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
                        <div class="page-title-img-inner d-block w-100" style="background-image: url({{ asset('front') }}/assets/images/page-title-bg1-1.jpg);"></div><span class="position-absolute sec-watermark center-watermark overlap-btm-shap88 font-200">Portofolio</span>
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
                    <div class="col-md-5 col-sm-12 col-lg-5">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#why-choose-tab1"><span class="position-absolute">01</span><i class="thm-clr icon-build"></i>Proyek A<svg class="position-absolute" viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M28 8L20.5 14.9282L20.5 1.0718L28 8Z" fill="#1E1E20" />
                                        <path d="M21 8L0 8" stroke="#1E1E20" />
                                    </svg></a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#why-choose-tab2"><span class="position-absolute">02</span><i class="thm-clr icon-build"></i>Proyek B<svg class="position-absolute" viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M28 8L20.5 14.9282L20.5 1.0718L28 8Z" fill="#1E1E20" />
                                        <path d="M21 8L0 8" stroke="#1E1E20" />
                                    </svg></a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#why-choose-tab3"><span class="position-absolute">03</span><i class="thm-clr icon-build"></i>Proyek C<svg class="position-absolute" viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M28 8L20.5 14.9282L20.5 1.0718L28 8Z" fill="#1E1E20" />
                                        <path d="M21 8L0 8" stroke="#1E1E20" />
                                    </svg></a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#why-choose-tab4"><span class="position-absolute">04</span><i class="thm-clr icon-build"></i>Proyek D<svg class="position-absolute" viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M28 8L20.5 14.9282L20.5 1.0718L28 8Z" fill="#1E1E20" />
                                        <path d="M21 8L0 8" stroke="#1E1E20" />
                                    </svg></a></li>
                        </ul>
                    </div>
                    <div class="col-md-7 col-sm-12 col-lg-7">
                        <div class="why-choose-tabs-decs-wrap position-relative w-100">
                            <div class="why-choose-bg position-absolute" style="background-image: url('https://ptbumiindonesia.co.id/userfiles/uploads/company-profile-pt--bumi-indonesia-terbaruhtmlm464e707a.jpg');"></div>
                            <div class="sec-title w-100">
                                <div class="sec-title-inner d-inline-block">
                                    <span class="d-block thm-clr">Suplier</span>
                                    <h2 class="mb-0">Proyek yang menjadikan kami suplier<i></i></h2>
                                </div>
                            </div><!-- Sec Title -->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="why-choose-tab1">
                                    <h4 class="mb-0">Teamwork On A Project</h4>
                                    <p class="mb-0">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                                    <p class="mb-0">These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p>
                                </div>
                                <div class="tab-pane fade" id="why-choose-tab2">
                                    <h4 class="mb-0">Detailed Design Projects</h4>
                                    <p class="mb-0">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                                    <p class="mb-0">These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p>
                                </div>
                                <div class="tab-pane fade" id="why-choose-tab3">
                                    <h4 class="mb-0">Material Liability</h4>
                                    <p class="mb-0">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                                    <p class="mb-0">These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p>
                                </div>
                                <div class="tab-pane fade" id="why-choose-tab4">
                                    <h4 class="mb-0">Quality Control System</h4>
                                    <p class="mb-0">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                                    <p class="mb-0">These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Why Choose Tabs Wrap -->
        </div>
    </div>
</section>

@endsection
