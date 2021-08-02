<header class="stick style1 w-100">
    <div class="container">
        <div class="logo-menu-wrap d-flex flex-wrap justify-content-between align-items-center w-100 ml-100">
            <div class="logo">
                <h1 class="mb-0 "><a href="{{ url('/') }}" title="Home"><img class="ml-5 img-fluid default-logo" src="{{ asset('front') }}/assets/images/logofix.png" srcset="{{ asset('front') }}/assets/images/logofix.png" alt="Logo">
                <img class="ml-5 img-fluid hover-logo" src="{{ asset('front') }}/assets/images/logofix.png" srcset="{{ asset('front') }}/assets/images/logofix.png" alt="Hover Logo"></a></h1>
            </div><!-- Logo -->
            <nav class="d-flex flex-wrap justify-content-between align-items-center">
                <div class="nav-left">
                    <ul class="mb-0 list-unstyled d-inline-flex flex-wrap w-180">
                        <li><a href="{{ url('/') }}" title=""><span>Beranda</span></a></li>
                        <li class="menu-item-has-children"><a href="javascript:void(0);" title=""><span>Perusahaan</span></a>
                            <ul class="mb-0 list-unstyled position-absolute">
                                <li><a href="{{ route('tentang-perusahaan') }}" title=""><span>Profile Perusahaan</span></a></li>
                                <li><a href="{{ route('profile-dewan-komisaris') }}" title=""><span>Profile Dewan Komisaris</span></a></li>
                                <li><a href="{{ route('profile-direksi') }}" title=""><span>Profile Direksi</span></a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('service') }}" title=""><span>Jasa</span></a></li>
                        <li><a href="{{ route('blog') }}" title=""><span>Blog</span></a></li>
                        <li><a href="{{ route('portofolio') }}" title=""><span>Portofolio</span></a></li>
                        <li><a href="{{ route('hubungi-kami') }}" title=""><span>Hubungi Kami</span></a></li>
                    </ul>
                </div>
                <div class="nav-right d-inline-flex flex-wrap">
                    <ul class="d-flex flex-wrap mb-0 list-unstyled">
                        <li class="res-menu-btn-wrap"><a class="res-menu-btn" href="javascript:void(0);" title=""><i class="fas fa-align-justify"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- Logo Menu Wrap -->
    </div>
</header><!-- Header -->
<div class="header-search d-flex flex-wrap align-items-center position-fixed">
    <span class="search-close-btn position-absolute"><i class="fas fa-times"></i></span>
    <form class="w-100 position-relative">
        <button type="submit"><i class="icon-search"></i></button>
        <input type="text" placeholder="Search">
    </form>
</div><!-- Header Search -->
