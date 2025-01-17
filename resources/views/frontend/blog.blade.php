@extends('frontend.layouts.app')

@section('title','Our Blog')

@section('mobile_header')
    <!-- Mobile Header -->
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="index.html"><img src="{{asset('admin/assets/front/imgs/theme/logo.svg')}}" alt="logo"></a>
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
                    <a href="#"><img src="{{asset('admin/assets/front/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('admin/assets/front/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('admin/assets/front/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('admin/assets/front/imgs/theme/icons/icon-pinterest.svg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('admin/assets/front/imgs/theme/icons/icon-youtube.svg')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    {{-- Main Content --}}
    <section class="mt-50 mb-50">
        <div class="container custom">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-header mb-50 text-center">
                        <h1 class="font-xxl text-brand">Our Blog</h1>
                        <div class="entry-meta meta-1 font-xs mt-15 mb-15">
                            <span class="post-by">32 Sub Categories</span>
                            <span class="post-on has-dot">1020k Article</span>
                            <span class="time-reading has-dot">480 Authors</span>
                            <span class="hit-count  has-dot">29M Views</span>
                        </div>
                    </div>
                    <div class="loop-grid pr-30">
                        <div class="row">
                            <div class="col-lg-4">
                                <article class="wow fadeIn animated hover-up mb-30">
                                    <div class="post-thumb img-hover-scale">
                                        <a href="blog-post-right.html">
                                            <img src="{{asset('admin/assets/front/imgs/blog/blog-1.jpg')}}" alt="">
                                        </a>
                                        <div class="entry-meta">
                                            <a class="entry-meta meta-2" href="blog-category-grid.html">Sport</a>
                                        </div>
                                    </div>
                                    <div class="entry-content-2">
                                        <h3 class="post-title mb-15">
                                            <a href="blog-post-right.html">9 Things I Love About Shaving My Head</a></h3>
                                        <p class="post-exerpt mb-30">At the Emmys, broadcast scripted shows created by people of color gained ground relative to those pitched by White show creators, while broadcast scripted shows.</p>
                                        <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on"> <i class="fi-rs-clock"></i> 25 April 2022</span>
                                                <span class="hit-count has-dot">126k Views</span>
                                            </div>
                                            <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-4">
                                <article class="wow fadeIn animated hover-up mb-30">
                                    <div class="post-thumb img-hover-scale">
                                        <a href="blog-post-right.html">
                                            <img src="{{asset('admin/assets/front/imgs/blog/blog-2.jpg')}}" alt="">
                                        </a>
                                        <div class="entry-meta">
                                            <a class="entry-meta meta-2" href="blog-category-grid.html">Sport</a>
                                        </div>
                                    </div>
                                    <div class="entry-content-2">
                                        <h3 class="post-title mb-15">
                                            <a href="blog-post-right.html">The World Caters to Average People</a></h3>
                                        <p class="post-exerpt mb-30">At the Emmys, broadcast scripted shows created by people of color gained ground relative to those pitched by White show creators, while broadcast scripted shows.</p>
                                        <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on"> <i class="fi-rs-clock"></i> 25 April 2022</span>
                                                <span class="hit-count has-dot">126k Views</span>
                                            </div>
                                            <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-4">
                                <article class="wow fadeIn animated hover-up mb-30">
                                    <div class="post-thumb img-hover-scale">
                                        <a href="blog-post-right.html">
                                            <img src="{{asset('admin/assets/front/imgs/blog/blog-3.jpg')}}" alt="">
                                        </a>
                                        <div class="entry-meta">
                                            <a class="entry-meta meta-2" href="blog-category-grid.html">Politic</a>
                                        </div>
                                    </div>
                                    <div class="entry-content-2">
                                        <h3 class="post-title mb-15">
                                            <a href="blog-post-right.html">The litigants on the screen are not actors</a></h3>
                                        <p class="post-exerpt mb-30">These people envy me for having a lifestyle they don’t have, but the truth is, sometimes but the truth is, sometimes I envy their lifestyle instead. Struggling to sell one multi.</p>
                                        <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on"> <i class="fi-rs-clock"></i> 25 April 2022</span>
                                                <span class="hit-count has-dot">126k Views</span>
                                            </div>
                                            <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="wow fadeIn animated hover-up mb-30">
                                    <div class="post-thumb img-hover-scale">
                                        <a href="blog-post-right.html">
                                            <img src="{{asset('admin/assets/front/imgs/blog/blog-4.jpg')}}" alt="">
                                        </a>
                                        <div class="entry-meta">
                                            <a class="entry-meta meta-2" href="blog-category-grid.html">Global</a>
                                        </div>
                                    </div>
                                    <div class="entry-content-2">
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right.html">Essential Qualities of Highly Successful Music</a></h4>
                                        <p class="post-exerpt mb-30 font-sm">Graduating from a top accelerator or incubator can be as career-defining for a startup founder ah</p>
                                        <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                            <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="wow fadeIn animated hover-up mb-30">
                                    <div class="post-thumb img-hover-scale">
                                        <a href="blog-post-right.html">
                                            <img src="{{asset('admin/assets/front/imgs/blog/blog-5.jpg')}}" alt="">
                                        </a>
                                        <div class="entry-meta">
                                            <a class="entry-meta meta-2" href="blog-category-grid.html">Sport</a>
                                        </div>
                                    </div>
                                    <div class="entry-content-2">
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right.html">9 Things I Love About Shaving My Head</a></h4>
                                        <p class="post-exerpt mb-30 font-sm">Graduating from a top accelerator or incubator can be as career-defining for a startup founder ah</p>
                                        <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                            <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="wow fadeIn animated hover-up mb-30">
                                    <div class="post-thumb img-hover-scale">
                                        <a href="blog-post-right.html">
                                            <img src="{{asset('admin/assets/front/imgs/blog/blog-6.jpg')}}" alt="">
                                        </a>
                                        <div class="entry-meta">
                                            <a class="entry-meta meta-2" href="blog-category-grid.html">Technology</a>
                                        </div>
                                    </div>
                                    <div class="entry-content-2">
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right.html">Why Teamwork Really Makes The Dream Work</a></h4>
                                        <p class="post-exerpt mb-30 font-sm">Graduating from a top accelerator or incubator can be as career-defining for a startup founder ah</p>
                                        <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                            <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="wow fadeIn animated hover-up mb-30">
                                    <div class="post-thumb img-hover-scale">
                                        <a href="blog-post-right.html">
                                            <img src="{{asset('admin/assets/front/imgs/blog/blog-1.jpg')}}" alt="">
                                        </a>
                                        <div class="entry-meta">
                                            <a class="entry-meta meta-2" href="blog-category-grid.html">Watch</a>
                                        </div>
                                    </div>
                                    <div class="entry-content-2">
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right.html">The World Caters to Average People</a></h4>
                                        <p class="post-exerpt mb-30 font-sm">Graduating from a top accelerator or incubator can be as career-defining for a startup founder ah</p>
                                        <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                            <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="wow fadeIn animated hover-up mb-30">
                                    <div class="post-thumb img-hover-scale">
                                        <a href="blog-post-right.html">
                                            <img src="{{asset('admin/assets/front/imgs/blog/blog-8.jpg')}}" alt="">
                                        </a>
                                        <div class="entry-meta">
                                            <a class="entry-meta meta-2" href="blog-category-grid.html">Global</a>
                                        </div>
                                    </div>
                                    <div class="entry-content-2">
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right.html">Essential Qualities of Highly Successful Music</a></h4>
                                        <p class="post-exerpt mb-30 font-sm">Graduating from a top accelerator or incubator can be as career-defining for a startup founder ah</p>
                                        <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                            <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="wow fadeIn animated hover-up mb-30">
                                    <div class="post-thumb img-hover-scale">
                                        <a href="blog-post-right.html">
                                            <img src="{{asset('admin/assets/front/imgs/blog/blog-9.jpg')}}" alt="">
                                        </a>
                                        <div class="entry-meta">
                                            <a class="entry-meta meta-2" href="blog-category-grid.html">Sport</a>
                                        </div>
                                    </div>
                                    <div class="entry-content-2">
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right.html">9 Things I Love About Shaving My Head</a></h4>
                                        <p class="post-exerpt mb-30 font-sm">Graduating from a top accelerator or incubator can be as career-defining for a startup founder ah</p>
                                        <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                            <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="wow fadeIn animated hover-up mb-30">
                                    <div class="post-thumb img-hover-scale">
                                        <a href="blog-post-right.html">
                                            <img src="{{asset('admin/assets/front/imgs/blog/blog-1.jpg')}}" alt="">
                                        </a>
                                        <div class="entry-meta">
                                            <a class="entry-meta meta-2" href="blog-category-grid.html">Technology</a>
                                        </div>
                                    </div>
                                    <div class="entry-content-2">
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right.html">Why Teamwork Really Makes The Dream Work</a></h4>
                                        <p class="post-exerpt mb-30 font-sm">Graduating from a top accelerator or incubator can be as career-defining for a startup founder ah</p>
                                        <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                            <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="wow fadeIn animated hover-up mb-30">
                                    <div class="post-thumb img-hover-scale">
                                        <a href="blog-post-right.html">
                                            <img src="{{asset('admin/assets/front/imgs/blog/blog-2.jpg')}}" alt="">
                                        </a>
                                        <div class="entry-meta">
                                            <a class="entry-meta meta-2" href="blog-category-grid.html">Watch</a>
                                        </div>
                                    </div>
                                    <div class="entry-content-2">
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right.html">The World Caters to Average People</a></h4>
                                        <p class="post-exerpt mb-30 font-sm">Graduating from a top accelerator or incubator can be as career-defining for a startup founder ah</p>
                                        <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                            <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <!--post-grid-->
                    <div class="pagination-area mt-15 mb-lg-0">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">16</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fi-rs-angle-double-small-right"></i></a></li>
                            </ul>
                        </nav>
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