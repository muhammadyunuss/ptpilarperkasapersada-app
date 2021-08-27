@extends('layouts.layout')

@section('content')
<section>
    <div class="w-100 pb-80 position-relative">
        <div class="page-top-wrap position-relative w-100">
            <div class="container">
                <div class="page-top-inner d-flex flex-wrap align-items-center position-relative w-100">
                    <div class="page-title-info position-relative">
                        <i class="position-absolute"><svg viewBox="0 0 359 354" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M358.5 351H323V300.316L250.863 264.339V331.541H278.904V170.438L201.566 91.0182L200.661 327.921L223.727 351L224.179 71.1066L166.063 3V142.381L126.489 156.862L149.781 267.507L171.49 289.455V212.75H115.635L80.3576 331.541H171.49V306.651H34V351H0" stroke="#f1f1f1" stroke-width="2"/></svg></i>
                        <h1 class="mb-0 thm-clr">Blog</h1>
                        <ol class="breadcrumb mb-0 list-unstyled">
                            <li class="breadcrumb-item"><a href="index.html" title=""><i class="icon-home"></i>Home</a></li>
                            <li class="breadcrumb-item active">Blog</li>
                        </ol>
                    </div>
                    <div class="page-title-img position-absolute"><div class="page-title-img-inner d-block w-100" style="background-image: url({{ asset('front') }}/assets/images/page-title-bg1-2.jpg);"></div><span class="position-absolute sec-watermark center-watermark overlap-btm-shap88 font-200">Blog</span></div>
                </div>
            </div>
        </div><!-- Page Top Wrap -->
    </div>
</section>
<section>
    <div class="w-100 pt-80 pb-130 position-relative">
        <div class="container">
            <div class="page-wrap position-relative w-100">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-8">
                        <div class="blog-post-box2 v2 position-relative w-100">
                            <a class="blog-tag z2 thm-bg d-inline-block position-absolute" href="javascript:void(0);" title="">Architecture</a>
                            <div class="blog-post-img2 position-relative overflow-hidden w-100"><a href="blog-detail.html" title=""><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/blog-img2-1.jpg" title="Blog Post Image 1"></a></div>
                            <div class="blog-post-info2 w-100">
                                <h3 class="mb-0"><a href="blog-detail.html" title="">Solving Building Problems<i></i></a></h3>
                                <ul class="blog-meta d-flex flex-wrap align-items-center mb-0 list-unstyled w-100">
                                    <li>Oct 7, 2020</li>
                                    <li>by <a href="javascript:void(0);" title="">Samuel Adamson</a></li>
                                </ul>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</p>
                                <div class="blog-post-info-bottom d-flex flex-wrap align-items-center justify-content-between position-relative w-100">
                                    <a class="d-inline-block" href="blog-detail.html" title="">Read More</a>
                                    <div class="blog-share d-flex flex-wrap align-items-center">
                                        <span>Share:</span>
                                        <div class="scl-links v2 d-flex flex-wrap">
                                            <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                            <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post-box2 v2 blog-post-video position-relative w-100">
                            <a class="blog-tag z2 bg-color6 d-inline-block position-absolute" href="javascript:void(0);" title="">Building</a>
                            <iframe class="d-block w-100" src="https://www.youtube.com/embed/WpjN3q8NeSg"></iframe>
                            <div class="blog-post-info2 w-100">
                                <h3 class="mb-0"><a href="blog-detail.html" title="">House With A Spectacular Roof<i></i></a></h3>
                                <ul class="blog-meta d-flex flex-wrap align-items-center mb-0 list-unstyled w-100">
                                    <li>Aug 16, 2020</li>
                                    <li>by <a href="javascript:void(0);" title="">Samuel Adamson</a></li>
                                </ul>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</p>
                                <div class="blog-post-info-bottom d-flex flex-wrap align-items-center justify-content-between position-relative w-100">
                                    <a class="d-inline-block" href="blog-detail.html" title="">Read More</a>
                                    <div class="blog-share d-flex flex-wrap align-items-center">
                                        <span>Share:</span>
                                        <div class="scl-links v2 d-flex flex-wrap">
                                            <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                            <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post-box2 v2 blog-post-carousel position-relative w-100">
                            <a class="blog-tag z2 bg-color7 d-inline-block position-absolute" href="javascript:void(0);" title="">Interior</a>
                            <div class="blog-post-img2 blog-img-caro position-relative w-100">
                                <div class="blog-post-img d-block w-100"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/blog-img2-2.jpg" title="Blog Post Image 2"></div>
                            </div>
                            <div class="blog-post-info2 w-100">
                                <h3 class="mb-0"><a href="blog-detail.html" title="">Style In Interior Design<i></i></a></h3>
                                <ul class="blog-meta d-flex flex-wrap align-items-center mb-0 list-unstyled w-100">
                                    <li>Aug 02, 2020</li>
                                    <li>by <a href="javascript:void(0);" title="">Samuel Adamson</a></li>
                                </ul>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</p>
                                <div class="blog-post-info-bottom d-flex flex-wrap align-items-center justify-content-between position-relative w-100">
                                    <a class="d-inline-block" href="blog-detail.html" title="">Read More</a>
                                    <div class="blog-share d-flex flex-wrap align-items-center">
                                        <span>Share:</span>
                                        <div class="scl-links v2 d-flex flex-wrap">
                                            <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                            <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <aside class="sidebar-wrap w-100">
                            <div class="widget-box2 author_widget position-relative text-center w-100" style="background-image: url(assets/images/author_widget-bg.png);">
                                <div class="author-widget-img position-relative w-100"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/author-img.jpg" alt="Author Image"></div>
                                <div class="author-widget-info w-100">
                                    <h3 class="mb-0 position-relative">Samuel Adamson</h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    <div class="scl-links v2 d-flex flex-wrap justify-content-center w-100">
                                        <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                        <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-box2 search_widget w-100">
                                <form class="position-relative">
                                    <input type="text" placeholder="Search...">
                                    <button class="bg-color1 position-absolute"><i class="icon-search"></i></button>
                                </form>
                            </div>
                            <div class="widget-box2 cate_widget w-100">
                                <h3 class="position-relative widget-title2">Categories<i></i></h3>
                                <ul class="mb-0 list-unstyled w-100">
                                    <li><a href="javascript:void(0);" title="">Interior<span>- 6</span></a></li>
                                    <li><a href="javascript:void(0);" title="">Architecture<span>- 10</span></a></li>
                                    <li><a href="javascript:void(0);" title="">Exterior<span>- 8</span></a></li>
                                    <li><a href="javascript:void(0);" title="">Building<span>- 5</span></a></li>
                                </ul>
                            </div>
                            <div class="widget-box2 popular_widget w-100">
                                <h3 class="position-relative widget-title2">Popular Posts<i></i></h3>
                                <div class="popular-posts w-100">
                                    <div class="popular-post-box d-flex flex-wrap w-100">
                                        <div class="popular-post-img overflow-hidden position-relative"><a href="blog-detail.html" title=""><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/popular-post-img1.jpg" alt="Popular Post Image 1"></a></div>
                                        <div class="popular-post-info">
                                            <h4 class="mb-0"><a href="blog-detail.html" title="">House Design</a></h4>
                                            <span class="d-block">Oct 7, 2020</span>
                                        </div>
                                    </div>
                                    <div class="popular-post-box d-flex flex-wrap w-100">
                                        <div class="popular-post-img overflow-hidden position-relative"><a href="blog-detail.html" title=""><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/popular-post-img2.jpg" alt="Popular Post Image 2"></a></div>
                                        <div class="popular-post-info">
                                            <h4 class="mb-0"><a href="blog-detail.html" title="">Kitchen Style</a></h4>
                                            <span class="d-block">Aug 10, 2020</span>
                                        </div>
                                    </div>
                                    <div class="popular-post-box d-flex flex-wrap w-100">
                                        <div class="popular-post-img overflow-hidden position-relative"><a href="blog-detail.html" title=""><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/popular-post-img3.jpg" alt="Popular Post Image 3"></a></div>
                                        <div class="popular-post-info">
                                            <h4 class="mb-0"><a href="blog-detail.html" title="">Architecture</a></h4>
                                            <span class="d-block">Jul 9, 2020</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-box2 follow_us_widget w-100">
                                <h3 class="position-relative widget-title2">Follow Us<i></i></h3>
                                <div class="scl-links v2 d-flex flex-wrap w-100">
                                    <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                            <div class="widget-box2 tagcloud_widget w-100">
                                <h3 class="position-relative widget-title2">Tags<i></i></h3>
                                <div class="tagcloud w-100">
                                    <a class="d-inline-block" href="javascript:void(0);" title="">Build</a>
                                    <a class="d-inline-block" href="javascript:void(0);" title="">Architecture</a>
                                    <a class="d-inline-block" href="javascript:void(0);" title="">Planning</a>
                                    <a class="d-inline-block" href="javascript:void(0);" title="">Interior</a>
                                    <a class="d-inline-block" href="javascript:void(0);" title="">Style</a>
                                    <a class="d-inline-block" href="javascript:void(0);" title="">Exterior</a>
                                    <a class="d-inline-block" href="javascript:void(0);" title="">Design</a>
                                </div>
                            </div>
                        </aside><!-- Sidebar -->
                    </div>
                </div>
            </div><!-- Page Wrap -->
        </div>
    </div>
</section>
@endsection
