@extends('frontend.layouts.app')

@section('title','Contact-US')

@section('mobile_header')
    <!-- Mobile Header -->
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="index.html"><img src="assets/imgs/theme/logo.svg" alt="logo"></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…">
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <div class="main-categori-wrap mobile-header-border">
                        <a class="categori-button-active-2" href="#">
                            <span class="fi-rs-apps"></span> Browse Categories
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-small">
                            <ul>
                                <li><a href="shop-grid-right.html"><i class="evara-font-dress"></i>Women's Clothing</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-tshirt"></i>Men's Clothing</a></li>
                                <li> <a href="shop-grid-right.html"><i class="evara-font-smartphone"></i> Cellphones</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-desktop"></i>Computer & Office</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-cpu"></i>Consumer Electronics</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-home"></i>Home & Garden</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-high-heels"></i>Shoes</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-teddy-bear"></i>Mother & Kids</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-kite"></i>Outdoor fun</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="index.html">Home</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                    <li><a href="index-3.html">Home 3</a></li>
                                    <li><a href="index-4.html">Home 4</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="shop-grid-right.html">shop</a>
                                <ul class="dropdown">
                                    <li><a href="shop-grid-right.html">Shop Grid – Right Sidebar</a></li>
                                    <li><a href="shop-grid-left.html">Shop Grid – Left Sidebar</a></li>
                                    <li><a href="shop-list-right.html">Shop List – Right Sidebar</a></li>
                                    <li><a href="shop-list-left.html">Shop List – Left Sidebar</a></li>
                                    <li><a href="shop-fullwidth.html">Shop - Wide</a></li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Single Product</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-right.html">Product – Right Sidebar</a></li>
                                            <li><a href="shop-product-left.html">Product – Left Sidebar</a></li>
                                            <li><a href="shop-product-full.html">Product – No sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-filter.html">Shop – Filter</a></li>
                                    <li><a href="shop-wishlist.html">Shop – Wishlist</a></li>
                                    <li><a href="shop-cart.html">Shop – Cart</a></li>
                                    <li><a href="shop-checkout.html">Shop – Checkout</a></li>
                                    <li><a href="shop-compare.html">Shop – Compare</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Mega menu</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Women's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-right.html">Dresses</a></li>
                                            <li><a href="shop-product-right.html">Blouses & Shirts</a></li>
                                            <li><a href="shop-product-right.html">Hoodies & Sweatshirts</a></li>
                                            <li><a href="shop-product-right.html">Women's Sets</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Men's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-right.html">Jackets</a></li>
                                            <li><a href="shop-product-right.html">Casual Faux Leather</a></li>
                                            <li><a href="shop-product-right.html">Genuine Leather</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Technology</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-right.html">Gaming Laptops</a></li>
                                            <li><a href="shop-product-right.html">Ultraslim Laptops</a></li>
                                            <li><a href="shop-product-right.html">Tablets</a></li>
                                            <li><a href="shop-product-right.html">Laptop Accessories</a></li>
                                            <li><a href="shop-product-right.html">Tablet Accessories</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="blog-category-fullwidth.html">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="blog-category-grid.html">Blog Category Grid</a></li>
                                    <li><a href="blog-category-list.html">Blog Category List</a></li>
                                    <li><a href="blog-category-big.html">Blog Category Big</a></li>
                                    <li><a href="blog-category-fullwidth.html">Blog Category Wide</a></li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Single Product Layout</a>
                                        <ul class="dropdown">
                                            <li><a href="blog-post-left.html">Left Sidebar</a></li>
                                            <li><a href="blog-post-right.html">Right Sidebar</a></li>
                                            <li><a href="blog-post-fullwidth.html">No Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="page-about.html">About Us</a></li>
                                    <li><a href="page-contact.html">Contact</a></li>
                                    <li><a href="page-account.html">My Account</a></li>
                                    <li><a href="page-login-register.html">login/register</a></li>
                                    <li><a href="page-purchase-guide.html">Purchase Guide</a></li>
                                    <li><a href="page-privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="page-terms.html">Terms of Service</a></li>
                                    <li><a href="page-404.html">404 Page</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Language</a>
                                <ul class="dropdown">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap mobile-header-border">
                    <div class="single-mobile-header-info mt-30">
                        <a  href="page-contact.html"> Our location </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="page-login-register.html">Log In / Sign Up </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#">(+01) - 2345 - 6789 </a>
                    </div>
                </div>
                <div class="mobile-social-icon">
                    <h5 class="mb-15 text-grey-4">Follow Us</h5>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-youtube.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    {{-- Main Content --}}
    <section class="hero-2 bg-green mt-4">
        <div class="hero-content">
            <div class="container">
                <div class="text-center">
                    <h4 class="text-brand mb-20">Get in touch</h4>
                    <h1 class="mb-20 wow fadeIn animated font-xxl fw-900">
                        Let's Talk About <br>Your <span class="text-style-1">Idea</span>
                    </h1>
                    <p class="w-50 m-auto mb-50 wow fadeIn animated">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quam eius placeat, a quidem mollitia at accusantium reprehenderit pariatur provident nam ratione incidunt magnam sequi.</p>
                    <p class="wow fadeIn animated">
                        <a class="btn btn-brand btn-lg font-weight-bold text-white border-radius-5 btn-shadow-brand hover-up" href="page-about.html">About Us</a>
                        <a class="btn btn-outline btn-lg btn-brand-outline font-weight-bold text-brand bg-white text-hover-white ml-15 border-radius-5 btn-shadow-brand hover-up">Support Center</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-border pt-50 pb-50">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d27523.723335121354!2d31.053173080749527!3d30.42290565412326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1719489488474!5m2!1sen!2seg" width="100%" height="450" style="border:0;" class="mb-2" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h4 class="mb-15 text-brand">Office</h4>
                    205 North Michigan Avenue, Suite 810<br>
                    Chicago, 60601, USA<br>
                    <abbr title="Phone">Phone:</abbr> (123) 456-7890<br>
                    <abbr title="Email">Email: </abbr>contact@Evara.com<br>
                    <a class="btn btn-outline btn-sm btn-brand-outline font-weight-bold text-brand bg-white text-hover-white mt-20 border-radius-5 btn-shadow-brand hover-up"><i class="fi-rs-marker mr-10"></i>View map</a>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h4 class="mb-15 text-brand">Studio</h4>
                    205 North Michigan Avenue, Suite 810<br>
                    Chicago, 60601, USA<br>
                    <abbr title="Phone">Phone:</abbr> (123) 456-7890<br>
                    <abbr title="Email">Email: </abbr>contact@Evara.com<br>
                    <a class="btn btn-outline btn-sm btn-brand-outline font-weight-bold text-brand bg-white text-hover-white mt-20 border-radius-5 btn-shadow-brand hover-up"><i class="fi-rs-marker mr-10"></i>View map</a>
                </div>
                <div class="col-md-4">
                    <h4 class="mb-15 text-brand">Shop</h4>
                    205 North Michigan Avenue, Suite 810<br>
                    Chicago, 60601, USA<br>
                    <abbr title="Phone">Phone:</abbr> (123) 456-7890<br>
                    <abbr title="Email">Email: </abbr>contact@Evara.com<br>
                    <a class="btn btn-outline btn-sm btn-brand-outline font-weight-bold text-brand bg-white text-hover-white mt-20 border-radius-5 btn-shadow-brand hover-up"> <i class="fi-rs-marker mr-10"></i> View map</a>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 m-auto">
                    <div class="contact-from-area padding-20-row-col wow FadeInUp">
                        <h3 class="mb-10 text-center">Drop Us a Line</h3>
                        <p class="text-muted mb-30 text-center font-sm">Lorem ipsum dolor sit amet consectetur.</p>
                        {{-- @if (session()->get('success') != null)
                            <div class="alert alert-success text-center w-50 mx-auto" role="alert">
                                {{session()->get('success')}}
                            </div>
                        @endif --}}
                        <form class="contact-form-style " id="contact-form" action="{{route('send-email')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 mb-20">
                                    <div class="input-style ">
                                        <input name="name" placeholder="Your Name" type="text">
                                    </div>
                                    @error('name')
                                        <span class="text-danger">* {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 mb-20">
                                    <div class="input-style">
                                        <input name="email" placeholder="Your Email" type="email" >
                                    </div>
                                    @error('email')
                                        <span class="text-danger">* {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 mb-20">
                                    <div class="input-style">
                                        <input name="phone" placeholder="Your Phone" type="tel">
                                    </div>
                                    @error('phone')
                                        <span class="text-danger">* {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 mb-20">
                                    <div class="input-style">
                                        <input name="subject" placeholder="Subject" type="text">
                                    </div>
                                    @error('subject')
                                        <span class="text-danger">* {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-12 mb-30">
                                    <div class="textarea-style">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    @error('message')
                                        <span class="text-danger">* {{ $message }}</span>
                                    @enderror
                                </div>
                                <button class="submit submit-auto-width mx-auto col-3" type="submit">Send message</button>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('preloader')
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <h5 class="mb-5">Now Loading</h5>
                    <div class="loader">
                        <div class="bar bar1"></div>
                        <div class="bar bar2"></div>
                        <div class="bar bar3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection