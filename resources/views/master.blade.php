<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DecorVista</title>
    <meta name="description" content="Artima – Modern Architecture & Interior HTML5 Template">
    <meta name="author" content="ranaahmead">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('Asset/decorVista/assets/imgs/favicon.svg')}}">
    <!-- CSS here -->

    <link rel="stylesheet" href="{{asset('Asset/decorVista/assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Asset/decorVista/assets/css/vendor/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('Asset/decorVista/assets/css/plugins/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('Asset/decorVista/assets/css/vendor/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('Asset/decorVista/assets/css/vendor/fontawesome-pro.css')}}">
    <link rel="stylesheet" href="{{asset('Asset/decorVista/assets/css/vendor/spacing.css')}}"> 
    <link rel="stylesheet" href="{{asset('Asset/decorVista/assets/css/plugins/odometer-theme-default.css')}}">
    <link rel="stylesheet" href="{{asset('Asset/decorVista/assets/css/plugins/carouselTicker.css')}}">
    <link rel="stylesheet" href="{{asset('Asset/decorVista/assets/css/main.css')}}">
</head>

<body class="body-1">

<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- preloader start -->
<!-- style 1 -->
<div id="preloader" data-preloader="active" data-loaded="doted">
    <div class="preloader-close">x</div>
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>

<!-- style 2 -->
<div class="preloader" data-preloader="deactive" data-loaded="progress">
    <div class="preloader-close">x</div>
    <div class="wrapper w-100 text-center">
        <div id="progress-bar" class="preloader-text" data-text="RIBUILD"></div>
        <div class="progress-bar">
            <div class="progress"></div>
        </div>
    </div>
</div>
<!-- preloader end -->

<!-- preloader start -->
<div class="loading-form">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!-- preloader end -->

<!-- Backtotop start -->
<div id="scroll-percentage">
    <span id="scroll-percentage-value"></span>
</div>
<!-- Backtotop end -->

<!-- cursorAnimation start -->
<div class="cursor-wrapper relative">
    <div class="cursor"></div>
    <div class="cursor-follower"></div>
</div>
<!-- cursorAnimation end -->

<!-- Offcanvas area start -->
<div class="fix">
    <div class="offcanvas__area">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="{{url('/')}}">
                            <img src="{{asset('Asset/decorVista/assets/imgs/logo/logo-white.svg')}}" alt="logo not found">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button class="offcanvas-close-icon animation--flip">
                                <span class="offcanvas-m-lines">
                              <span class="offcanvas-m-line line--1"></span><span class="offcanvas-m-line line--2"></span><span class="offcanvas-m-line line--3"></span>
                                </span>
                        </button>
                    </div>
                </div>
                <div class="mobile-menu fix"></div>
                <div class="offcanvas__social">
                    <h4 class="offcanvas__title mb-20">Subscribe & Follow</h4>
                    <p class="mb-30">The scallops were perfectly cooked, tender, and flavorful, paired beautifully with a creamy risotto and seasonal vegetables. The presentation was artful, showcasing the chef's attention to detail.</p>
                    <ul class="header-top-socail-menu d-flex">
                        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="https://www.pinterest.com/"><i class="fa-brands fa-pinterest-p"></i></a></li>
                        <li><a href="https://vimeo.com/"><i class="fa-brands fa-vimeo-v"></i></a></li>
                    </ul>
                </div>
                <div class="offcanvas__btn">
                    <div class="header__btn-wrap">
                        <a href="contact.html" class="rr-btn__header d-sm-none mb-10 w-100">
                            <span class="btn-wrap">
                                <span class="text-one">Get In Touch</span>
                                <span class="text-two">Get In Touch</span>
                            </span>
                        </a>
                        <a href="https://themeforest.net/user/rrdevs/portfolio" class="rr-btn__header w-100">
                            <span class="btn-wrap">
                                <span class="text-one">Purchase Now</span>
                                <span class="text-two">Purchase Now</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>
<div class="offcanvas__overlay-white"></div>
<!-- Offcanvas area start -->


<!-- Header area start -->
<header>
    <div style="margin-top: -34px" id="header-sticky" class="header__area header-1">
        <div class="container">
            <div style="margin-top: 37px;" class="mega__menu-wrapper p-relative">
                <div class="header__main">
                    <div class="header__logo">
                        <a href="{{url('/')}}">
                            <div class="logo">
                                <h3 style="color: white">DecorVista</h3>
                                {{-- <img src="{{asset('Asset/decorVista/assets/imgs/logo/logo.svg')}}" alt="logo not found"> --}}
                            </div>
                        </a>
                    </div>

                    <div class="mean__menu-wrapper d-none d-lg-block">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class=" has-mega-menu">
                                        <a href="{{url('/')}}">Home</a>
                                    </li>
                                    <li><a href="{{url('/about-us')}}">About us</a></li>
                                   
                                    <li class="has-dropdown">
                                        <a href="#">Category</a>
                                        <ul class="submenu">
                                            <li><a href="{{url('/living-room')}}">Living Rooms</a></li>
                                            <li><a href="{{url('/bedrooms')}}">Bedrooms</a></li>
                                            <li><a href="{{url('/Kitchens')}}">Kitchens</a></li>
                                            <li><a href="{{url('/bathrooms')}}">Bathrooms</a></li>
                                            <li><a href="{{url('/offices')}}">Offices</a></li>
                                            <li><a href="{{url('/outdoor-spaces')}}">Outdoor Spaces</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown ">
                                        <a href="javascript:void(0)">Sub Category</a>
                                        <ul class="submenu">
                                            <li><a href="our-team.html">Team</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('/gallery')}}">Gallery</a></li>
                                    <li><a href="{{url('/design')}}">Design</a></li>
                                    <li><a href="{{url('/blog')}}">blog</a></li>
                                    <li><a href="{{url('/contact-us')}}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="header__right">
                        <div class="header__action d-flex align-items-center">
                            <div class="header__hamburger">
                                <div class="sidebar__toggle">
                                    <a class="bar-icon" href="javascript:void(0)">
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Header area end -->

@yield('content')


<footer>
    <section  class="footer__area-common theme-bg-heading-primary overflow-hidden">
        {{-- <div class="footer__top">
            <div class="container">
                <div class="footer__top-shape">
                    <img src="{{asset('Asset/decorVista/assets/imgs/footer-1/footer-cta-shape.png')}}" alt="image not found">
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 text-lg-start text-center rr-mb-40-md">
                        <div class="footer-cta__content-text">
                            <h2 class="footer-cta__content-title color-white">Subscribe to Our Newsletter</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-end text-center">
                        <div class="footer__widget-subscribe ">
                            <input type="email" placeholder="Enter your email address">
                            <button type="submit" class="rr-btn">
                                <span class="btn-wrap">
                                    <span class="text-one">Contact Us
                                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 6.5H11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M6 1.5L11 6.5L6 11.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                    <span class="text-two">Contact Us
                                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 6.5H11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M6 1.5L11 6.5L6 11.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div  class="footer__main-wrapper footer__bottom-border">
            <div class="container">
                <div class="row mb-minus-50">
                    <div class="col-lg-3 col-6">
                        <div class="footer__widget footer__widget-item-1">
                            <div class="footer__logo mb-15">
                                <a href="{{url('/')}}">     
                                        <h3 style="color: white">DecorVista</h3>
                                </a>
                            </div>

                            <div class="footer__content mb-30 mb-xs-35">
                                <p class="mb-0">Inoterior design consultancy firm that brings sensitivity to the design top restaurants, hotels <a href="blog-details-2.html">Read more!</a></p>
                            </div>

                            <div class="footer__support"> 
                                <span class="icon">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.8656 5.58713C16.9879 5.80567 18.0192 6.35348 18.8278 7.16044C19.6363 7.96741 20.1851 8.99682 20.4041 10.1169M15.8656 1C18.1972 1.25853 20.3714 2.30065 22.0313 3.95527C23.6912 5.60988 24.738 7.77864 25 10.1055M23.851 19.2568V22.6971C23.8523 23.0165 23.7868 23.3326 23.6586 23.6253C23.5304 23.9179 23.3424 24.1806 23.1066 24.3965C22.8708 24.6124 22.5924 24.7768 22.2893 24.8791C21.9861 24.9814 21.6649 25.0194 21.3462 24.9907C17.8106 24.6073 14.4145 23.4014 11.4306 21.4701C8.65443 19.7094 6.30076 17.3602 4.53669 14.5894C2.59489 11.5977 1.38647 8.19147 1.00933 4.64677C0.980614 4.32965 1.01837 4.01003 1.1202 3.70827C1.22203 3.40651 1.3857 3.12922 1.60078 2.89405C1.81586 2.65888 2.07765 2.47099 2.36948 2.34233C2.6613 2.21368 2.97677 2.14708 3.29579 2.14678H6.74273C7.30034 2.1413 7.84091 2.33839 8.2637 2.70129C8.68649 3.06419 8.96264 3.56816 9.04069 4.11925C9.18617 5.22024 9.45598 6.30126 9.84497 7.34171C9.99956 7.75217 10.033 8.19826 9.94138 8.62711C9.84974 9.05597 9.63685 9.44962 9.32793 9.76142L7.86873 11.2178C9.50436 14.0889 11.8861 16.466 14.7626 18.0985L16.2218 16.6421C16.5342 16.3338 16.9286 16.1213 17.3583 16.0298C17.788 15.9384 18.2349 15.9718 18.6461 16.1261C19.6886 16.5143 20.7717 16.7836 21.8748 16.9288C22.4329 17.0074 22.9426 17.288 23.307 17.7172C23.6714 18.1464 23.865 18.6944 23.851 19.2568Z" stroke="#906E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                        
                                </span>
                                <span class="text">
                                    <span>Talk To Our Support</span>
                                    <a href="tel:123534352555">+1-2353-4352-555</a>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="footer__widget footer__widget-item-2">
                            <div class="footer__widget-title">
                                <h6>Useful Links</h6>
                            </div>
                            <div class="footer__link">
                                <ul>
                                    <li><a href="about-us.html"> <i class="fa-solid fa-angles-right"></i>About Company</a></li>
                                    <li><a href="team.html"> <i class="fa-solid fa-angles-right"></i>Customer Insights</a></li>
                                    <li><a href="project.html"> <i class="fa-solid fa-angles-right"></i>Meet Our Team</a></li>
                                    <li><a href="blog.html"> <i class="fa-solid fa-angles-right"></i>Client Testimonial</a></li>
                                    <li><a href="project.html"> <i class="fa-solid fa-angles-right"></i>Privacy Policy</a></li>
                                    <li><a href="project.html"> <i class="fa-solid fa-angles-right"></i>Before After</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-6">
                        <div class="footer__widget footer__widget-item-3">
                            <div class="footer__widget-title">
                                <h6>Recent Posts</h6>
                            </div>

                            <div class="footer__post">
                                <div class="footer__post-item">
                                    <a href="blog-details.html" class="footer__post-item__thum">
                                        <img src="{{asset('Asset/decorVista/assets/imgs/footer-1/post-1.png')}}" class="img-fluid" alt="image not found">
                                    </a>
                                    <div class="footer__post-item__content">
                                        <ul class="footer__post-item__content-meta">
                                            <li>
                                                <a href="blog-details.html">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 8C15 11.864 11.864 15 8 15C4.136 15 1 11.864 1 8C1 4.136 4.136 1 8 1C11.864 1 15 4.136 15 8Z" stroke="#906E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M10.5962 10.2245L8.42623 8.92947C8.04823 8.70547 7.74023 8.16647 7.74023 7.72547V4.85547" stroke="#906E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                        
                                                    24 April 2023
                                                </a>
                                            </li>
                                        </ul>
                                        <a href="blog-details.html">
                                            <h6 class="footer__post-item__content-title">Things to Know When Choosing the Perfect.</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="footer__post-item">
                                    <a href="blog-details.html" class="footer__post-item__thum">
                                        <img src="{{asset('Asset/decorVista/assets/imgs/footer-1/post-2.png')}}" class="img-fluid" alt="image not found">
                                    </a>
                                    <div class="footer__post-item__content">
                                        <ul class="footer__post-item__content-meta">
                                            <li>
                                                <a href="blog-details.html">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 8C15 11.864 11.864 15 8 15C4.136 15 1 11.864 1 8C1 4.136 4.136 1 8 1C11.864 1 15 4.136 15 8Z" stroke="#906E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M10.5962 10.2245L8.42623 8.92947C8.04823 8.70547 7.74023 8.16647 7.74023 7.72547V4.85547" stroke="#906E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                        
                                                    24 April 2023
                                                </a>
                                            </li>
                                        </ul>
                                        <a href="blog-details.html">
                                            <h6 class="footer__post-item__content-title">Colour Schemes to Introduce Spring in Home</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6">
                        <div class="footer__widget footer__widget-item-4">
                            <div class="footer__widget-title">
                                <h6>Contact Us</h6>
                            </div>

                            <div class="footer__contact">
                                <ul>
                                    <li>
                                        <span class="icon">
                                            <img src="{{asset('Asset/decorVista/assets/imgs/icon/call.svg')}}" alt="">
                                        </span>
                                        <span class="text">
                                            <span>Phone Number</span>
                                            <a href="tel:888123869523">+888 (123) 869523</a>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{asset('Asset/decorVista/assets/imgs/icon/mail.svg')}}" alt="">
                                        </span>
                                        <span class="text">
                                            <span>Email Address</span>
                                            <a href="mailto:example@gmail.com">example@gmail.com</a>
                                        </span>
                                    </li>
                                    <li class="address">
                                        <span class="icon">
                                            <img src="{{asset('Asset/decorVista/assets/imgs/icon/map.svg')}}" alt="">
                                        </span>
                                        <span class="text">
                                            <span>Location</span>
                                            <a target="_blank" href="https://maps.app.goo.gl/1N77c8d8zieLRaot7">1058 Helton Ave, Berlin.</a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="footer__copyright text-lg-start text-center">
                            <p class="mb-0">Copyright © 2024 by  <a href="{{url('/')}}">RRDevs.</a> All Rights Reserved.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="footer__copyright-menu  last_no_bullet">
                            <ul>
                                <li><a href="about-us.html">Privacy & Policy </a></li>
                                <li><a href="about-us.html">Careers</a></li>
                                <li><a href="contact.html">Media centre</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<!-- Footer area end -->
    
<!-- JS here -->
<script src="{{asset('Asset/decorVista/assets/js/vendor/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('Asset/decorVista/assets/js/plugins/waypoints.min.js')}}"></script>
<script src="{{asset('Asset/decorVista/assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('Asset/decorVista/assets/js/plugins/meanmenu.min.js')}}"></script>
<script src="{{asset('Asset/decorVista/assets/js/plugins/odometer.min.js')}}"></script>
<script src="{{asset('Asset/decorVista/assets/js/plugins/swiper.min.js')}}"></script>
<script src="{{asset('Asset/decorVista/assets/js/plugins/wow.js')}}"></script>
<script src="{{asset('Asset/decorVista/assets/js/vendor/magnific-popup.min.js')}}"></script>
<script src="{{asset('Asset/decorVista/assets/js/vendor/type.js')}}"></script>
<script src="{{asset('Asset/decorVista/assets/js/plugins/nice-select.min.js')}}"></script>
<script src="{{asset('Asset/decorVista/assets/js/vendor/jquery-ui.min.js')}}"></script>
<script src="{{asset('Asset/decorVista/assets/js/vendor/jquery.appear.js')}}"></script>
<script src="{{asset('Asset/decorVista/assets/js/plugins/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('Asset/decorVista/assets/js/plugins/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('Asset/decorVista/assets/js/plugins/gsap.min.js')}}"></script>
<script src="{{asset('Asset/decorVista/assets/js/plugins/ScrollTrigger.min.js')}}"></script>
<script src="{{asset('Asset/decorVista/assets/js/plugins/SplitText.js')}}"></script>
<script src="{{asset('Asset/decorVista/assets/js/plugins/tween-max.min.js')}}"></script>
<script src="{{asset('Asset/decorVista/assets/js/plugins/draggable.min.js')}}"></script>
<script src="{{asset('Asset/decorVista/assets/js/plugins/jquery.carouselTicker.js')}}"></script>
<script src="{{asset('Asset/decorVista/assets/js/vendor/ajax-form.js')}}"></script>
<script src="{{asset('Asset/decorVista/assets/js/plugins/TextPlugin.min.js')}}"></script>
<script src="{{asset('Asset/decorVista/assets/js/main.js')}}"></script>
<script src="{{asset('Asset/decorVista/assets/js/plugins/magiccursor.js')}}"></script>
</body>


</html>