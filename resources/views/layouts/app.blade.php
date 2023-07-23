<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>UTS Grocery</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/imgs/theme/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <style>
        .mailto:hover{
color:#F15412 !important;
        }
        .logout_submit{
            background:transparent !important;
            border:none !important;
            color:red !important; 
            padding:none !important;
            margin-left:2px !important;
        }
    </style>
    @livewireStyles

</head>

<body>
    <header class="header-area header-style-1 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="header-info" style="color:white;">
                            <i class="fa fa-envelope" style="font-size:18px"></i><a href="mailto:info@uts_grocery.joyuts.com" class="mailto" style="color:white;">info@uts_grocery.joyuts.com</a>
                           | <i class="fa fa-phone" style="margin-left:4px;font-size:18px;"></i> <a href="tel:+(61) 426059100"class="mailto" style="color:white;">+(61) 426059100</a>
                        
                        </div>
                    </div>
                    @if (session('success'))
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Congratulation!!!',
                                text: 'Purchases Completed. You will get a mail soon',
                            });
                        </script>
                    @endif     
                    @if (session('subscribe'))
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Congratulation!!!',
                            text: 'Subscription Completed. You will get a mail soon',
                        });
                    </script>
                @endif 
                  @if (session('already_subscribed'))
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Already Subscribed!!!',
                        text: 'This email already subscribed. Try another email !!!',
                    });
                </script>
            @endif
                    <div class="col-md-6">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul style="color:white;">
                                    <li>Fresh Delights: Discover the Finest Selection <a href="{{route('shop')}}">View details</a></li>
                                    <li>Supper Value Deals - Savor the Flavors of Excellence</li>
                                    <li>Stock Up and Save: Unbeatable Deals on Everyday <a href="{{route('shop')}}">Shop now</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="header-info header-info-right">
                            @auth
                                <ul>
                                    <li style="color:white;">
                                        <i class="fa fa-user-circle-o" style="font-size:18px;"></i> {{ Auth::user()->name }} 
                                      
                                    </li>
                                </ul>
                            @else
                                <ul>
                                    <li style="color:white;"><i class="fi-rs-key" style="color:white;"></i><a {{ Request::url() == route('login') ? 'active' : '' }}
                                            href="{{ route('login') }}" style="color:white;">Log In </a> / <a href="{{ route('register') }}" style="color:white;">Sign
                                            Up</a></li>
                                </ul>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="{{ route('home.index') }}"><img src="{{ asset('assets/imgs/logo/logo.png') }}"
                                alt="logo"></a>
                    </div>
                    <div class="header-right">
                        @livewire('header-search-component')
                        <div class="header-action-right">
                            <div class="header-action-2">
                                @livewire('wish-list-icon-component')
                                @livewire('cart-icon-component')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @livewire('show-category-component')



      
    </header>
    {{-- <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="index.html"><img src="assets/imgs/logo/logo.png" alt="logo"></a>
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
                                <li><a href="shop.html"><i class="surfsidemedia-font-dress"></i>Women's Clothing</a>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-tshirt"></i>Men's Clothing</a>
                                </li>
                                <li> <a href="shop.html"><i class="surfsidemedia-font-smartphone"></i> Cellphones</a>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-desktop"></i>Computer &
                                        Office</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>Consumer Electronics</a>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-home"></i>Home & Garden</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-high-heels"></i>Shoes</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-teddy-bear"></i>Mother & Kids</a>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-kite"></i>Outdoor fun</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="index.html">Home</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="shop.html">shop</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Our
                                    Collections</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                            href="#">Women's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">Dresses</a></li>
                                            <li><a href="product-details.html">Blouses & Shirts</a></li>
                                            <li><a href="product-details.html">Hoodies & Sweatshirts</a></li>
                                            <li><a href="product-details.html">Women's Sets</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                            href="#">Men's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">Jackets</a></li>
                                            <li><a href="product-details.html">Casual Faux Leather</a></li>
                                            <li><a href="product-details.html">Genuine Leather</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                            href="#">Technology</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">Gaming Laptops</a></li>
                                            <li><a href="product-details.html">Ultraslim Laptops</a></li>
                                            <li><a href="product-details.html">Tablets</a></li>
                                            <li><a href="product-details.html">Laptop Accessories</a></li>
                                            <li><a href="product-details.html">Tablet Accessories</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="blog.html">Blog</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="#">Language</a>
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
                        <a href="contact.html"> Our location </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="login.html">Log In </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="register.html">Sign Up</a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#">(+1) 0000-000-000 </a>
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
    </div> --}}

    {{ $slot }}

    <footer class="main">
        <section class="newsletter p-30 text-white wow fadeIn animated">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-md-3 mb-lg-0">
                        <div class="row align-items-center">
                            <div class="col flex-horizontal-center">
                                <img class="icon-email" src="{{asset('assets/imgs/theme/icons/icon-email.svg')}}" alt="">
                                <h4 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h4>
                            </div>
                            <div class="col my-4 my-md-0 des">
                                <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>Updated Information.</strong></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <!-- Subscribe Form -->
                        <form class="form-subcriber d-flex wow fadeIn animated" action="{{route('customer.subscribe')}}" method="POST">
                         
                         @csrf
                            <input type="email" class="form-control bg-white font-small"
                                placeholder="Enter your email" required name="email">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <button class="btn bg-dark text-white" type="submit">Subscribe</button>
                        </form>
                        <!-- End Subscribe Form -->
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding footer-mid">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="widget-about font-md mb-md-5 mb-lg-0">
                            <div class="logo logo-width-1 wow fadeIn animated">
                                <a href="index.html"><img src="{{asset('assets/imgs/logo/logo.png')}}" alt="logo"></a>
                            </div>
                            <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                            <p class="wow fadeIn animated">
                                <strong>Address: </strong>15 Broadway, Ultimo NSW 2007
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>Phone: </strong>  <i class="fa fa-phone" style="margin-left:4px;font-size:18px;"></i> <a href="tel:+(61) 426059100"class="mailto" style="color:black;">+(61) 426059100</a>

                             
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>Email: </strong><i class="fa fa-envelope" style="font-size:18px"></i><a href="mailto:info@uts_grocery.joyuts.com" class="mailto" style="color:black;">info@uts_grocery.joyuts.com</a>

                            </p>
                            <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Follow Us</h5>
                            <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                                <a href="https://facebook.com"><img src="{{asset('assets/imgs/theme/icons/icon-facebook.svg')}}"
                                        alt=""></a>
                                <a href="https://twitter.com"><img src="{{asset('assets/imgs/theme/icons/icon-twitter.svg')}}"
                                        alt=""></a>
                                <a href="https://instagram.com"><img src="{{asset('assets/imgs/theme/icons/icon-instagram.svg')}}"
                                        alt=""></a>
                                <a href="https://pinterest.com"><img src="{{asset('assets/imgs/theme/icons/icon-pinterest.svg')}}"
                                        alt=""></a>
                                <a href="https://youtube.com"><img src="{{asset('assets/imgs/theme/icons/icon-youtube.svg')}}"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <h5 class="widget-title wow fadeIn animated">About</h5>
                        <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                            <li><a href="{{route('home.about')}}">About Us</a></li>
                            <li><a href="{{ route('home.privacy') }}">Privacy Policy</a></li>
                            <li><a href="{{ route('home.terms') }}">Terms &amp; Conditions</a></li>
                            <li><a href="{{ route('home.contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-3">
                        <h5 class="widget-title wow fadeIn animated">Information</h5>
                        <ul class="footer-list wow fadeIn animated">
                            <li><a href="{{route('shop.cart')}}">View Cart</a></li>
                            <li><a href="{{route('shop.wishlist')}}">My Wishlist</a></li>
                            <li><a href="{{route('shop')}}">Shop</a></li>
                            <li><a href="{{route('exclusive.deals')}}">Exclusive Deals</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 mob-center">
                        <h5 class="widget-title wow fadeIn animated">Secured Payment Gateways</h5>
                        <div class="row">
                            {{-- <div class="col-md-8 col-lg-12">
                                <p class="wow fadeIn animated">From App Store or Google Play</p>
                                <div class="download-app wow fadeIn animated mob-app">
                                    <a href="#" class="hover-up mb-sm-4 mb-lg-0"><img class="active"
                                            src="{{asset('assets/imgs/theme/app-store.jpg')}}" alt=""></a>
                                    <a href="#" class="hover-up"><img src="{{asset('assets/imgs/theme/google-play.jpg')}}"
                                            alt=""></a>
                                </div>
                            </div> --}}
                            <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                                <img class="wow fadeIn animated" src="{{asset('assets/imgs/theme/payment-method.png')}}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container pb-20 wow fadeIn animated mob-center">
            <div class="row">
                <div class="col-12 mb-20">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-lg-6">
                    <p class="float-md-left font-sm text-muted mb-0">
                        <a href="{{route('home.privacy')}}">Privacy Policy</a> | <a href="{{route('home.terms')}}">Terms &
                            Conditions</a>
                    </p>
                </div>
                <div class="col-lg-6">
                    <p class="text-lg-end text-start font-sm text-muted mb-0">
                        &copy; <strong class="text-brand">UTS Grocery</strong> All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Vendor JS-->
    <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/images-loaded.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.vticker-min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.theia.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.elevatezoom.js') }}"></script>
    <!-- Template  JS -->
    <script src="assets/js/main.js?v=3.3"></script>
    <script src="assets/js/shop.js?v=3.3"></script>

    @livewireScripts
    @stack('scripts')
    
    <script>
        window.livewire.on('productAdded',()=>{
            $('#addCategory,#addProduct').modal('hide');
        });
        window.livewire.on('productUpdated',()=>{
            $('#updateCategory').modal('hide');
        });


        productAdded
    </script>
    
</body>

</html>
