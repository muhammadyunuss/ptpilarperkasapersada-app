<div class="responsive-menu position-fixed w-100">
    <span class="menu-close"><i class="fas fa-times"></i></span>
    <ul class="mb-0 list-unstyled w-100">
        <li><a href="{{ url('/') }}" title=""><span>Beranda</span></a></li>
        <li class="menu-item-has-children"><a href="javascript:void(0);" title=""><span>Perusahaan</span></a>
            <ul class="mb-0 list-unstyled">
                <li><a href="{{ route('tentang-perusahaan') }}" title=""><span>Profile Perusahaan</span></a></li>
                <li><a href="{{ route('profile-dewan-komisaris') }}" title=""><span>Profile Dewan Komisari</span></a></li>
                <li><a href="{{ route('profile-direksi') }}" title=""><span>Profile Direksi</span></a></li>
            </ul>
        </li>
        <li><a href="{{ route('service') }}" title=""><span>Jasa</span></a></li>
        <li><a href="{{ route('blog') }}" title=""><span>Blog</span></a></li>
        <li><a href="{{ route('portofolio') }}" title=""><span>Portofolio</span></a></li>
        <li><a href="{{ route('hubungi-kami') }}" title=""><span>Hubungi Kami</span></a></li>
    </ul>
    <div class="scl-links v2 d-flex flex-wrap w-100">
        <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
    </div>
</div><!-- Responsive Menu -->
