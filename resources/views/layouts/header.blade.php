<header class="stick style1 w-100">
    <div class="container">
        <div class="logo-menu-wrap d-flex flex-wrap justify-content-between align-items-center w-100">
            <div class="logo"><h1 class="mb-0"><a href="{{ url('/') }}" title="Home"><img width="70px" class="img-fluid default-logo" src="{{ asset('front') }}/assets/images/logo.png" srcset="{{ asset('front') }}/assets/images/logo.png" alt="Logo"><img width="70px" class="img-fluid hover-logo" src="{{ asset('front') }}/assets/images/logo.png" srcset="{{ asset('front') }}/assets/images/logo.png" alt="Hover Logo"></a></h1></div><!-- Logo -->
            <nav class="d-flex flex-wrap justify-content-between align-items-center">
                <div class="nav-left">
                    <ul class="mb-0 list-unstyled d-inline-flex flex-wrap w-100">
                        <li><a href="{{ url('/') }}" title=""><span>Home</span></a></li>
                        <li><a href="{{ route('tentang-perusahaan') }}" title=""><span>About us</span></a></li>
                        <li><a href="{{ route('blog') }}" title=""><span>Blog</span></a></li>
                        <li><a href="{{ route('portofolio') }}" title=""><span>Portofolio</span></a></li>
                        <li><a href="{{ route('hubungi-kami') }}" title=""><span>Contact us</span></a></li>
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
