@extends('layouts.layout')

@section('content')
<section>
    <div class="w-100 pb-80 position-relative">
        <div class="page-top-wrap position-relative w-100">
            <div class="container">
                <div class="page-top-inner d-flex flex-wrap align-items-center position-relative w-100">
                    <div class="page-title-info position-relative">
                        <i class="position-absolute"><svg viewBox="0 0 359 354" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M358.5 351H323V300.316L250.863 264.339V331.541H278.904V170.438L201.566 91.0182L200.661 327.921L223.727 351L224.179 71.1066L166.063 3V142.381L126.489 156.862L149.781 267.507L171.49 289.455V212.75H115.635L80.3576 331.541H171.49V306.651H34V351H0" stroke="#f1f1f1" stroke-width="2"/></svg></i>
                        <h1 class="mb-0  thm-clr">Visi dan Misi</h1>
                        <ol class="breadcrumb mb-0 list-unstyled">
                            <li class="breadcrumb-item"><a href="index.html" title=""><i class="icon-home"></i>Beranda</a></li>
                            <li class="breadcrumb-item active">Visi Misi</li>
                        </ol>
                    </div>
                    <div class="page-title-img position-absolute"><div class="page-title-img-inner d-block w-100" style="background-image: url({{ asset('front') }}/assets/images/page-title-bg1-2.jpg);"></div><span class="position-absolute sec-watermark center-watermark overlap-btm-shap88 font-200">VisiMisi</span></div>
                </div>
            </div>
        </div><!-- Page Top Wrap -->
    </div>
</section>
<section>
    <div class="w-100 pt-90 pb-50 position-relative">
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
                                    <span class="d-block thm-clr">Visi dan Misi</span>
                                    <h2 class="mb-0">PT PILARPERKASA PERSADA<i></i></h2>
                                </div>
                            </div><!-- Sec Title -->
                            <div class="founder-desc w-100">
                                <blockquote class="blockquote position-relative"><div class="blockquote-footer position-relative">Visi</div><i class="lft-qut icon-quote-left thm-clr position-absolute"></i><p class="mb-0">Menjadi perusahaan dibidang penyedia barang dan jasa, earth work, general kontraktor dan supplier dengan ditunjang total quality management yang memberikan total service bagi pengguna jasa diseluruh Indonesia</p><i class="rgt-qut icon-quote-right thm-clr position-absolute"></i> <br>

                                <div class="blockquote-footer position-relative">Misi</div><i class="lft-qut icon-quote-left thm-clr position-absolute"></i><p class="mb-0">1.	Memberikan pelayanan, mutu dan kepuasan yang terbaik kepada pelanggan</p><p class="mb-0">2.	Membangun serta menciptakan citra terbaik perusahaan</p><p class="mb-0">3.	Turut berpartisipasi dalam pembangunan negara kesatuan republik Indonesia</p><i class="rgt-qut icon-quote-right thm-clr position-absolute"></i></blockquote>
                           </div>
                        </div>
                    </div>
                </div>
            </div><!-- Founder Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-10 pb-130 position-relative">
        <img class="img-fluid overlap-tp-shap50 sec-tp-rgt-shp opc-4 position-absolute" src="{{ asset('front') }}/assets/images/sec-shap7.jpg" alt="Sec Shape 7">
        <div class="container">
            <div class="sec-title text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <h2 class="mb-0 thm-clr">Kebijakan dan Pengalaman Kerja<i></i></h2>
                </div>
            </div><!-- Sec Title -->
            <div class="team-wrap2 res-row position-relative w-100">
                <div class="row mrg55">
                    <div class="col-md-4 col-sm-4 col-lg-3">

                    </div>
                    <div class="col-md-4 col-sm-4 col-lg-3">
                        <div class="team-box2 w-100">
                            <div class="team-img2 position-relative w-100"><a href="{{ route('K3KebijakanPDF') }}" title=""><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/pdf.png" alt="Team Image 1"></a></div>
                            <div class="team-info2 position-relative w-100">
                                <h3 class="mb-0"><a href="team-detail.html" title="">KEBIJAKAN KESELAMATAN DAN KESEHATAN KERJA</a></h3>
                                <span class="d-block thm-clr">
                                <a href="{{ route('K3KebijakanPDF') }}" target="_blank" rel="noopener noreferrer">Download</a> &nbsp;&nbsp;
                                <a href="{{ route('LihatK3KebijakanPDF') }}" target="_blank" rel="noopener noreferrer">Lihat</a> &nbsp;&nbsp;
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-lg-3">
                        <div class="team-box2 w-100">
                            <div class="team-img2 position-relative w-100"><a href="{{ route('pengalamanPekerjaanPDF') }}" title=""><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/pdf.png" alt="Team Image 2"></a></div>
                            <div class="team-info2 position-relative w-100">
                                <h3 class="mb-0"><a href="team-detail.html" title="">Pengalaman <br> Pekerjaan</a></h3>
                                <span class="d-block thm-clr">
                                    <a href="{{ route('pengalamanPekerjaanPDF') }}" target="_blank" rel="noopener noreferrer">Download</a> &nbsp;&nbsp;
                                    <a href="{{ route('LihatpengalamanPekerjaanPDF') }}" target="_blank" rel="noopener noreferrer">Lihat</a> &nbsp;&nbsp;
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-lg-3">

                    </div>
                </div>
            </div><!-- Blog Wrap -->
        </div>
    </div>
</section>
@endsection
