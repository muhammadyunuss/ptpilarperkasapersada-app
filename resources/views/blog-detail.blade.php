@extends('layouts.layout')

@section('content')
<section>
    <div class="w-100 pb-80 position-relative">
        <div class="page-top-wrap position-relative w-100">
            <div class="container">
                <div class="page-top-inner d-flex flex-wrap align-items-center position-relative w-100">
                    <div class="page-title-info position-relative">
                        <i class="position-absolute"><svg viewBox="0 0 359 354" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M358.5 351H323V300.316L250.863 264.339V331.541H278.904V170.438L201.566 91.0182L200.661 327.921L223.727 351L224.179 71.1066L166.063 3V142.381L126.489 156.862L149.781 267.507L171.49 289.455V212.75H115.635L80.3576 331.541H171.49V306.651H34V351H0" stroke="#f1f1f1" stroke-width="2"/></svg></i>
                        <h1 class="mb-0">Blog</h1>
                        <ol class="breadcrumb mb-0 list-unstyled">
                            <li class="breadcrumb-item"><a href="index.html" title=""><i class="icon-home"></i>Home</a></li>
                            <li class="breadcrumb-item"><a href="blog.html" title="">Blog</a></li>
                            <li class="breadcrumb-item active">Style in interior design</li>
                        </ol>
                    </div>
                    <div class="page-title-img position-absolute"><div class="page-title-img-inner d-block w-100" style="background-image: url({{ asset('front') }}/assets/images/page-title-bg6.jpg);"></div><span class="position-absolute sec-watermark center-watermark overlap-btm-shap88 font-200">Blog</span></div>
                </div>
            </div>
        </div><!-- Page Top Wrap -->
    </div>
</section>
<section>
    <div class="w-100 pt-80 pb-130 position-relative">
        <img class="img-fluid sec-btm-rgt-shp opc-3 position-absolute" src="{{ asset('front') }}/assets/images/sec-shap11.jpg" alt="Sec Shape 11">
        <div class="container">
            <div class="sec-title text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <span class="d-block thm-clr">Post</span>
                    <h2 class="mb-0">Style in interior design<i></i></h2>
                </div>
            </div><!-- Sec Title -->
            <div class="page-wrap position-relative w-100">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-8">
                        <div class="post-detail position-relative w-100">
                            <div class="post-detail-img blog-img-caro position-relative w-100">
                                <div class="blog-post-img d-block w-100"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/blog-img2-2.jpg" title="Blog Post Image 2"></div>
                                <div class="blog-post-img d-block w-100"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/blog-img2-3.jpg" title="Blog Post Image 3"></div>
                            </div>
                            <div class="post-detail-desc w-100">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum:</p>
                                <blockquote class="blockquote position-relative"><div class="blockquote-footer position-relative">George Davies</div><i class="lft-qut icon-quote-left thm-clr position-absolute"></i><p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti  sint occaecati cupiditate non provident.</p><i class="rgt-qut icon-quote-right thm-clr position-absolute"></i></blockquote>
                                <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                <p class="mb-0">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                                <ul class="mb-0 list-unstyled w-100">
                                    <li><span class="position-absolute text-center">01</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</li>
                                    <li><span class="position-absolute text-center">02</span>On the other hand, we denounce with righteous indignation</li>
                                    <li><span class="position-absolute text-center">03</span>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus</li>
                                </ul>
                                <p class="mb-0">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue.</p>
                                <div class="author-box position-relative w-100" style="background-image: url({{ asset('front') }}/assets/images/author-bg.png);">
                                    <ul class="blog-meta d-flex flex-wrap align-items-center mb-0 list-unstyled w-100">
                                        <li><i class="thm-clr icon-calendar-alt"></i>Aug 16, 2020</li>
                                        <li>by <a href="javascript:void(0);" title="">Samuel Adamson</a></li>
                                    </ul>
                                    <div class="post-detail-cate-share d-flex flex-wrap justify-content-between align-items-center w-100">
                                        <span class="blog-cat d-inline-block thm-clr"><a href="javascript:void(0);" title="">Build</a>, <a href="javascript:void(0);" title="">Architecture</a>, <a href="javascript:void(0);" title="">Planning</a></span>
                                        <div class="blog-share d-flex flex-wrap align-items-center">
                                            <span>Share:</span>
                                            <div class="scl-links v2 d-flex flex-wrap">
                                                <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                <a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                                <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="author-box-inner d-flex flex-wrap align-items-center w-100">
                                        <div class="author-box-img"><img class="img-fluid w-100" src="{{ asset('front') }}/assets/images/resources/author-img2.jpg" alt="Author Image 2"></div>
                                        <div class="author-box-info">
                                            <h4 class="mb-0">Samuel Adamson</h4>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div>
                                </div><!-- Author Box -->
                                <div class="comments-wrap position-relative w-100">
                                    <h3 class="text-center">2 Comments</h3>
                                    <ul class="comments-thread mb-0 list-unstyled w-100">
                                        <li>
                                            <div class="comment-box position-relative w-100">
                                                <div class="comment-info d-flex flex-wrap align-items-center w-100">
                                                    <img class="img-fluid rounded-circle" src="{{ asset('front') }}/assets/images/resources/comment-img1.jpg" alt="Comment Image 1">
                                                    <div class="comment-meta">
                                                        <h4 class="mb-0">Bill Parson</h4>
                                                        <span class="d-block">Aug 16, 2020 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9:08 am</span>
                                                    </div>
                                                </div>
                                                <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                                                <a class="d-inline-block thm-clr position-absolute" href="javascript:void(0);" title="">Reply</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment-box position-relative w-100">
                                                <div class="comment-info d-flex flex-wrap align-items-center w-100">
                                                    <img class="img-fluid rounded-circle" src="{{ asset('front') }}/assets/images/resources/comment-img2.jpg" alt="Comment Image 2">
                                                    <div class="comment-meta">
                                                        <h4 class="mb-0">Jane Stevens</h4>
                                                        <span class="d-block">Oct 18, 2020 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9:20 am</span>
                                                    </div>
                                                </div>
                                                <p class="mb-0">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</p>
                                                <a class="d-inline-block thm-clr position-absolute" href="javascript:void(0);" title="">Reply</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- Comments Wrap -->
                                <div class="comment-reply position-relative w-100">
                                    <h3 class="text-center">Your Comment</h3>
                                    <form class="w-100">
                                        <div class="row align-items-end">
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <textarea placeholder="Comment"></textarea>
                                            </div>
                                            <div class="col-md-9 col-sm-9 col-lg-9">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                        <span class="field-box d-block w-100 position-relative"><i class="thm-clr icon-user"></i><input type="text" placeholder="Your Name"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                        <span class="field-box d-block w-100 position-relative"><i class="thm-clr icon-envelope"></i><input type="email" placeholder="Your Email"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-lg-3 text-right">
                                                <button class="thm-btn thm-bg d-inline-block position-relative" type="submit">Send<span class="brd-tp-lft"></span><span class="brd-btm-rgt"></span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <aside class="sidebar-wrap w-100">
                            <div class="widget-box2 author_widget position-relative text-center w-100" style="background-image: url({{ asset('front') }}/assets/images/author_widget-bg.png);">
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
                            <div class="widget-box2 follow_us_widget w-100">
                                <h3 class="position-relative widget-title2">Follow Us<i></i></h3>
                                <div class="scl-links v2 d-flex flex-wrap w-100">
                                    <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
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

