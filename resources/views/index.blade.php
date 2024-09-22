@extends('master');
@section('content')
   <!-- Bnner Section -->
   <section class="banner-section">
    <div class="banner-carousel owl-carousel owl-theme">
        <div class="slide-item" style="background-image: url({{asset('user/images/main-slider/image-1.jpg')}});">
            <div class="auto-container">
                <div class="content-box">
                    <h2>Architecture is a <br> Visual Art.</h2>
                    <div class="text">The buildings speak for themselves</div>
                    <div class="link-box">
                        <a href="about.html" class="theme-btn btn-style-one">Check Art</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide-item" style="background-image: url({{asset('user/images/main-slider/image-2.jpg')}});">
            <div class="auto-container">
                <div class="content-box">
                    <h2>Architecture is a <br> Visual Art.</h2>
                    <div class="text">The buildings speak for themselves</div>
                    <div class="link-box">
                        <a href="about.html" class="theme-btn btn-style-one">Check Art</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide-item" style="background-image: url({{asset('user/images/main-slider/image-3.jpg')}});">
            <div class="auto-container">
                <div class="content-box">
                    <h2>Architecture is a <br> Visual Art.</h2>
                    <div class="text">The buildings speak for themselves</div>
                    <div class="link-box">
                        <a href="about.html" class="theme-btn btn-style-one">Check Art</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-box">
        <div class="auto-container clearfix">
            <ul class="contact-info">
                <li><span>Phone :</span> (+84) 867-557-243</li>
                <li><span>EMAIL :</span> <a href="#">Support@yourdomain.com</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- End Bnner Section -->

    <!-- About Section -->
    <section class="about-section" style="background-image: url({{asset('user/images/background/1.jpg')}});">
        <div class="auto-container">
            <div class="row no-gutters">
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box wow fadeInLeft" data-wow-delay='1200ms'>
                            <h2>ABOUT <br> US</h2>
                        </div>
                        <div class="image-box">
                            <figure class="alphabet-img wow fadeInRight"><img src="{{asset('user/images/resource/alphabet-image.png')}}" alt=""></figure>
                            <figure class="image wow fadeInRight" data-wow-delay='600ms'><img src="{{asset('user/images/resource/image-1.jpg')}}" alt=""></figure>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <div class="content-box">
                            <div class="title">
                                <h2>Any  Complexity <br>For Any Cat</h2>
                            </div>
                            <div class="text">Our company has many years experience and specializes in manufacturing, salling, serviceing and repairing cardan shafts (cardans) for various vehicles, technological equipment, tractor, special machinery and agricultural machinery of verious domestic and foreign manufacturers.</div>
                            <div class="link-box"><a href="about.html" class="theme-btn btn-style-one">About Us</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section -->

    <!-- Services Section -->
    <section class="services-section">
        <div class="upper-box" style="background-image: url({{asset('user/images/background/2.jpg')}});">
            <div class="auto-container">    
                <div class="sec-title text-center light">
                    <span class="float-text">Designers</span>
                    <h2>Our Designers</h2>
                </div>
            </div>
        </div>

        <div class="services-box">
            <div class="auto-container">
                <div class="services-carousel owl-carousel owl-theme">
                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img src="{{asset('user/images/resource/service-1.')}}jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html">Architectural Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                                <div class="link-box">
                                    <a href="service-detail.html">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img src="{{asset('user/images/resource/service-2.')}}jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html">Interior Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                                <div class="link-box">
                                    <a href="service-detail.html">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img src="{{asset('user/images/resource/service-3.')}}jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html">Corporate Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                                <div class="link-box">
                                    <a href="service-detail.html">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img src="{{asset('user/images/resource/service-1.')}}jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html">Architectural Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                                <div class="link-box">
                                    <a href="service-detail.html">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img src="{{asset('user/images/resource/service-2.')}}jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html">Interior Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                                <div class="link-box">
                                    <a href="service-detail.html">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img src="{{asset('user/images/resource/service-3.')}}jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html">Corporate Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                                <div class="link-box">
                                    <a href="service-detail.html">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img src="{{asset('user/images/resource/service-1.')}}jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html">Architectural Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                                <div class="link-box">
                                    <a href="service-detail.html">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img src="{{asset('user/images/resource/service-2.')}}jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html">Interior Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                                <div class="link-box">
                                    <a href="service-detail.html">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img src="{{asset('user/images/resource/service-3.')}}jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html">Corporate Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                                <div class="link-box">
                                    <a href="service-detail.html">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section -->

    <!-- Fun Fact Section -->
    <section class="fun-fact-section">
        <div class="outer-box" style="background-image: url({{asset('user/images/background/3.jpg')}})">
            <div class="auto-container">
                <div class="fact-counter">
                    <div class="row">
                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="count-box">
                                <div class="count"><span class="count-text" data-speed="5000" data-stop="14">0</span></div>
                                <h4 class="counter-title">Years of <br>Experience</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                            <div class="count-box">
                                <div class="count"><span class="count-text" data-speed="5000" data-stop="237">0</span></div>
                                <h4 class="counter-title">Project <br>Taken</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                            <div class="count-box">
                                <div class="count"><span class="count-text" data-speed="5000" data-stop="11">0</span>K</div>
                                <h4 class="counter-title">Twitter <br> Follower</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                            <div class="count-box">
                                <div class="count"><span class="count-text" data-speed="5000" data-stop="12">0</span></div>
                                <h4 class="counter-title">Awards<br>won</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Fun Fact Section -->

    <!-- Project Section -->
    <section class="projects-section">
        <div class="auto-container">
            <div class="sec-title text-right">
                <span class="float-text">Products</span>
                <h2>Our Products</h2>
            </div>
        </div>
        <div class="inner-container">
            <div class="projects-carousel owl-carousel owl-theme">
                <!-- Project Block -->
                @if (!empty($products))
                @foreach ($products as $product)
                @php
                        $img = productImages($product->id);
                        @endphp
                    <div class="project-block">
                        <div class="image-box" >
                            @if (!empty($img))
                            <figure class="image"><img src="{{asset('uploads/product/large/'.$img->image)}}" alt="" style="height: 350px"></figure>
                            @endif
                            <div class="overlay-box">
                                <h4><a href="{{ route('Front.product.detail',$product->id) }}">{{$product->name}}</a></h4>
                                <div class="btn-box">
                                    <a href="{{asset('uploads/product/large/'.$img->image)}}" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                    <a href="{{ route('Front.product.detail',$product->id) }}"><i class="fa fa-external-link"></i></a>
                                </div>
                                <span class="tag">{{$product->name}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>
    <!--End Project Section -->

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Our Team</span>
                <h2>Perfect Designers</h2>
            </div>

            <div class="row clearfix">
                <!-- Team Block -->
                @foreach ($designers as $designer)
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="team.html"><img src="{{asset('user/images/resource/team-1.jpg')}}" alt=""></a></div>
                            <h3 class="name"><a href="team.html">{{$designer->name}}</a></h3>
                        </div>
                        <span class="designation">{{$designer->role}}</span>
                    </div>
                </div>
     
                @endforeach
               
            </div>
        </div>
    </section>
    <!--End Team Section -->

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="outer-container clearfix">
            <!-- Title Column -->
            <div class="title-column clearfix">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="float-text">testimonial</span>
                        <h2>What Client Says</h2>
                    </div>
                    <div class="text">Looking at its layout. The point of using very profectly is that it has a more-or-less normal distribution of letters, as opposed</div>
                </div>
            </div>

            <!-- Testimonial Column -->
            <div class="testimonial-column clearfix" style="background-image: url({{asset('user/images/background/4.jpg')}})">
                <div class="inner-column">
                    <div class="testimonial-carousel owl-carousel owl-theme">
                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="image-box"><img src="{{asset('user/images/resource/thumb-1.jpg')}}" alt=""></div>
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.</div>
                                <div class="info-box">
                                    <h4 class="name">Jane Smith</h4>
                                    <span class="designation">CEO, InDesign</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="image-box"><img src="{{asset('user/images/resource/thumb-1.jp')}}g" alt=""></div>
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.</div>
                                <div class="info-box">
                                    <h4 class="name">Jane Smith</h4>
                                    <span class="designation">CEO, InDesign</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="image-box"><img src="{{asset('user/images/resource/thumb-1.jp')}}g" alt=""></div>
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.</div>
                                <div class="info-box">
                                    <h4 class="name">Jane Smith</h4>
                                    <span class="designation">CEO, InDesign</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Section -->

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="float-text">Blogs</span>
                <h2>Blogs</h2>
            </div>
            <div class="row">
                <!-- News Block -->
                @if (!empty($blogs))

                @foreach ($blogs as $blog )
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">@if (!empty($blog->image))
                                <img src="{{ asset('uploads/Blog/small/' . $blog->image) }}" alt="image not found">
                                @else
                                <img src="{{ asset('Asset/Admin/img/default.png') }}" alt="image not found">
    
    
                                @endif</figure>
                                
                            <div class="overlay-box"><a href="{{ route('Front.blog.detail',$blog->id) }}"><i class="fa fa-link"></i>{{ $blog->title }}</a></div>
                        </div>
                        <div class="caption-box">
                            <h3 style="font-size: 15px"><a href="{{ route('Front.blog.detail',$blog->id) }}">{{ $blog->short_description }}</a><h3>
                            <ul class="info">
                                <li>{{ \Carbon\Carbon::parse($blog->created_at)->format('M,d, Y') }}</li>
                                <li>John Smith</li>
                            </ul>
                        </div>
                    </div>
                </div>   @endforeach

                @endif
            </div>
        </div>
    </section>
    <!--End News Section -->

    <!--Clients Section-->
    <section class="clients-section">
        <div class="inner-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('user/images/clients/1.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('user/images/clients/2.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('user/images/clients/3.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('user/images/clients/4.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('user/images/clients/5.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('user/images/clients/1.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('user/images/clients/2.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('user/images/clients/3.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('user/images/clients/4.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('user/images/clients/5.png')}}" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section-->


    {{-- products --}}
    {{-- <div class="1">
        <div class="container">
            <div style="margin-block: 45px" class="row mb-minus-30">
                <div class="section__title-wrapper text-center mb-55 mb-xs-40">
                    <span style="margin-top: 20px;" class="section__subtitle justify-content-center">Our Products</span>
                    <h2 class="section__title title-animation">Our Latest Products</h2>
                </div>
                @if (!empty($products))
                @foreach ($products as $product)
                @php
                $img = productImages($product->id);
                @endphp

                <div class=" col-md-6 col-lg-4 col-xl-3">
                    <div class="our-featured-service__item">
                        <div class="our-featured-service__media wow clip-a-z">
                            @if (!empty($img))

                            <img src="{{asset('uploads/product/large/'.$img->image)}}" alt="image not found">
                            @endif

                        </div>
                        <div class="our-featured-service__content">
                            <div class="our-featured-service__text">
                                <h6 class="title-animation"><a
                                        href="{{ route('Front.product.detail',$product->id) }}">{{$product->name}}</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif


            </div>
        </div>
    </div> --}}
    {{-- products --}}
    <!-- why-choose-us start -->
    {{-- <section class="why-choose-us section-space__top">
        <div class="container">
            <div class="row">
                <div class="section__title-wrapper text-center mb-55 mb-xs-40">
                    <span class="section__subtitle justify-content-center">Why Choose Us</span>
                    <h2 class="section__title title-animation">Why Choose DecorVista</h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="why-choose-us__content">
                        <div class="why-choose-us__item">
                            <div class="why-choose-us__icon">
                                <img src="{{asset('Asset/decorVista/assets/imgs/why-choose-us/design.svg')}}"
                                    alt="image not found">
                            </div>
                            <div class="why-choose-us__text">
                                <h6 class="mb-10 title-animation">Modern Design</h6>
                                <p class="mb-0">Decoral is one of the most popular for those who want to explore the</p>
                            </div>
                        </div>
                        <div class="why-choose-us__item">
                            <div class="why-choose-us__icon">
                                <img src="{{asset('Asset/decorVista/assets/imgs/why-choose-us/expert.svg')}}"
                                    alt="image not found">
                            </div>
                            <div class="why-choose-us__text">
                                <h6 class="mb-10 title-animation">Expert Team</h6>
                                <p class="mb-0">Decoral is one of the most popular for those who want to explore the</p>
                            </div>
                        </div>
                        <div class="why-choose-us__item">
                            <div class="why-choose-us__icon">
                                <img src="{{asset('Asset/decorVista/assets/imgs/why-choose-us/price.svg')}}"
                                    alt="image not found">
                            </div>
                            <div class="why-choose-us__text">
                                <h6 class="mb-10 title-animation">Reasonable Price</h6>
                                <p class="mb-0">Decoral is one of the most popular for those who want to explore the</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="row align-items-center">
                        <div class="col-sm-7">
                            <div class="why-choose-us__media-wrapper">
                                <div class="why-choose-us__media img1 wow clip-a-z">
                                    <img src="{{asset('Asset/decorVista/assets/imgs/why-choose-us/why-choose-us-1.jpg')}}"
                                        alt="image not found">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="why-choose-us__media img2 wow clip-a-z mb-30">
                                <img src="{{asset('Asset/decorVista/assets/imgs/why-choose-us/why-choose-us-2.jpg')}}"
                                    alt="image not found">
                            </div>
                            <div class="why-choose-us__media">
                                <div class="why-choose-us__media img3 wow clip-a-z">
                                    <img src="{{asset('Asset/decorVista/assets/imgs/why-choose-us/why-choose-us-3.jpg')}}"
                                        alt="image not found">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!-- why-choose-us end -->

  


    <!-- blog area start -->
{{--   
    <section class="blog-grid section-space">
        <div class="container">
            <div class="row">
                <div class="section__title-wrapper text-center mb-55 mb-xs-40">
                    <span class="section__subtitle justify-content-center">News & Articles</span>
                    <h2 class="section__title title-animation">Our Latest Blog Posts</h2>
                </div>
            </div>
            <div class="row mb-minus-30">

                @if (!empty($blogs))

                @foreach ($blogs as $blog )
                <div class="col-lg-4">
                    <div class="blog-grid__item">
                        <a href="{{ route('Front.blog.detail',$blog->id) }}" class="blog-grid__media">
                            @if (!empty($blog->image))
                            <img src="{{ asset('uploads/Blog/small/' . $blog->image) }}" alt="image not found">
                            @else
                            <img src="{{ asset('Asset/Admin/img/default.png') }}" alt="image not found">


                            @endif

                        </a>
                        <span
                            class="blog-grid__date">{{ \Carbon\Carbon::parse($blog->created_at)->format('M,d, Y') }}</span>
                        <div class="blog-grid__content">

                            <h6 class="mb-10"><a
                                    href="{{ route('Front.blog.detail',$blog->id) }}">{{ $blog->title }}</a>
                            </h6>

                            <p>{{ $blog->short_description }}</p>

                            <a class="read-more" href="{{ route('Front.blog.detail',$blog->id) }}">Read More
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6H11" stroke="#767676" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M6 1L11 6L6 11" stroke="#767676" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

                @endif

            </div>
        </div>
    </section> --}}

    <!-- blog area start -->
</main>
{{-- <div style="margin-top: 140px " class="footer__top">
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
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6.5H11" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M6 1.5L11 6.5L6 11.5" stroke="white" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span class="text-two">Contact Us
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6.5H11" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M6 1.5L11 6.5L6 11.5" stroke="white" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection