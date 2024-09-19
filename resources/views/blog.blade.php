@extends('master');
@section('content')

<main>
    <!-- Breadcrumb area start  -->
    <div style="margin-top: -29px" class="breadcrumb__area header__background-color breadcrumb__header-up breadcrumb-space overly overflow-hidden">
        <div class="breadcrumb__background" data-background="{{asset('Asset/decorVista/assets/imgs/breadcrumb/page-header-1.png')}}"></div>
        <div class="container">
            <div class="breadcrumb__bg-left"></div>
            <div class="breadcrumb__bg-right"></div>
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div style="margin-top: 100px;"  class="breadcrumb__content text-center">
                        <h2 class="breadcrumb__title mb-15 mb-sm-10 mb-xs-5 color-white title-animation">Blog</h2>

                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="index.html">Home</a></span></li>
                                    <li class="active"><span>Blog</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area start  -->

    <section class="blog-grid section-space">
        <div class="container">
            <div class="row mb-minus-30">
                <div class="col-lg-4">
                    <div class="blog-grid__item">
                        <a href="blog-details.html" class="blog-grid__media">
                            <img src="{{asset('Asset/decorVista/assets/imgs/blog-grid/blog-1.png')}}" alt="image not found">
                        </a>
                        <span class="blog-grid__date">26 January,2024 </span>
                        <div class="blog-grid__content">
                            <ul class="blog-grid__meta">
                                <li><a href="blog-details.html">Architecture</a></li>
                                <li><a href="blog-details.html">By Carlos Joe</a></li>
                            </ul>
                            <h6 class="mb-10"><a href="blog-details.html">Five Quick Tips Regarding Architecture.</a></h6>

                            <p>Bibendum est ultricies integer quis auctor elit sed vulputate Vivamus...</p>

                            <a class="read-more" href="blog-details.html">Read More
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6H11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6 1L11 6L6 11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    
                                </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-grid__item">
                        <a href="blog-details.html" class="blog-grid__media">
                            <img src="{{asset('Asset/decorVista/assets/imgs/blog-grid/blog-2.png')}}" alt="image not found">
                        </a>
                        <span class="blog-grid__date">26 January,2024 </span>
                        <div class="blog-grid__content">
                            <ul class="blog-grid__meta">
                                <li><a href="blog-details.html">Architecture</a></li>
                                <li><a href="blog-details.html">By Carlos Joe</a></li>
                            </ul>
                            <h6 class="mb-10"><a href="blog-details.html">Five Useful Tips From Experts In Architecture.</a></h6>

                            <p>Bibendum est ultricies integer quis auctor elit sed vulputate Vivamus...</p>

                            <a class="read-more" href="blog-details.html">Read More
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6H11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6 1L11 6L6 11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    
                                </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-grid__item">
                        <a href="blog-details.html" class="blog-grid__media">
                            <img src="{{asset('Asset/decorVista/assets/imgs/blog-grid/blog-3.png')}}" alt="image not found">
                        </a>
                        <span class="blog-grid__date">26 January,2024 </span>
                        <div class="blog-grid__content">
                            <ul class="blog-grid__meta">
                                <li><a href="blog-details.html">Architecture</a></li>
                                <li><a href="blog-details.html">By Carlos Joe</a></li>
                            </ul>
                            <h6 class="mb-10"><a href="blog-details.html">Seven Important Life Lessons Architecture Taught Us.</a></h6>

                            <p>Bibendum est ultricies integer quis auctor elit sed vulputate Vivamus...</p>

                            <a class="read-more" href="blog-details.html">Read More
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6H11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6 1L11 6L6 11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    
                                </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-grid__item">
                        <a href="blog-details.html"  class="blog-grid__media">
                            <img src="{{asset('Asset/decorVista/assets/imgs/blog-grid/blog-4.png')}}" alt="image not found">
                        </a>
                        <span class="blog-grid__date">26 January,2024 </span>
                        <div class="blog-grid__content">
                            <ul class="blog-grid__meta">
                                <li><a href="blog-details.html">Architecture</a></li>
                                <li><a href="blog-details.html">By Carlos Joe</a></li>
                            </ul>
                            <h6 class="mb-10"><a href="blog-details.html">How to Choose the Right Colors for Your Bedroom</a></h6>

                            <p>Bibendum est ultricies integer quis auctor elit sed vulputate Vivamus...</p>

                            <a class="read-more" href="blog-details.html">Read More
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6H11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6 1L11 6L6 11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    
                                </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-grid__item">
                        <a href="blog-details.html" class="blog-grid__media">
                            <img src="{{asset('Asset/decorVista/assets/imgs/blog-grid/blog-5.png')}}" alt="image not found">
                        </a>
                        <span class="blog-grid__date">26 January,2024 </span>
                        <div class="blog-grid__content">
                            <ul class="blog-grid__meta">
                                <li><a href="blog-details.html">Architecture</a></li>
                                <li><a href="blog-details.html">By Carlos Joe</a></li>
                            </ul>
                            <h6 class="mb-10"><a href="blog-details.html">The Power of Accent Lighting in Interior Design</a></h6>

                            <p>Bibendum est ultricies integer quis auctor elit sed vulputate Vivamus...</p>

                            <a class="read-more" href="blog-details.html">Read More
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6H11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6 1L11 6L6 11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    
                                </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-grid__item">
                        <a href="blog-details.html" class="blog-grid__media">
                            <img src="{{asset('Asset/decorVista/assets/imgs/blog-grid/blog-6.png')}}" alt="image not found">
                        </a>
                        <span class="blog-grid__date">26 January,2024 </span>
                        <div class="blog-grid__content">
                            <ul class="blog-grid__meta">
                                <li><a href="blog-details.html">Architecture</a></li>
                                <li><a href="blog-details.html">By Carlos Joe</a></li>
                            </ul>
                            <h6 class="mb-10"><a href="blog-details.html">The Power of Accent Lighting in Interior Design</a></h6>

                            <p>Bibendum est ultricies integer quis auctor elit sed vulputate Vivamus...</p>

                            <a class="read-more" href="blog-details.html">Read More
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6H11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6 1L11 6L6 11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    
                                </a>
                        </div>
                    </div>
                </div>

              
            </div>
        </div>
    </section>

    <!-- brand area start -->
    <section class="brand section-space__bottom has--transparent">
        <div class="container">
            <div class="slider-brand">
                <div class="container">
                    <div class="rr-scroller" data-speed="slow">
                        <ul class="text-anim rr-scroller__inner">
                            <li><a href="#"><img src="{{asset('Asset/decorVista/assets/imgs/brand-2/brand-1.png')}}" alt="image not found"></a></li>
                            <li><a href="#"><img src="{{asset('Asset/decorVista/assets/imgs/brand-2/brand-2.png')}}" alt="image not found"></a></li>
                            <li><a href="#"><img src="{{asset('Asset/decorVista/assets/imgs/brand-2/brand-4.png')}}" alt="image not found"></a></li>
                            <li><a href="#"><img src="{{asset('Asset/decorVista/assets/imgs/brand-2/brand-1.png')}}" alt="image not found"></a></li>
                            <li><a href="#"><img src="{{asset('Asset/decorVista/assets/imgs/brand-2/brand-2.png')}}" alt="image not found"></a></li>
                            <li><a href="#"><img src="{{asset('Asset/decorVista/assets/imgs/brand-2/brand-4.png')}}" alt="image not found"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- brand area end -->
</main>   

@endsection