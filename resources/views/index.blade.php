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
                                    <a href="service-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
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
                    <li class="slide-item"><figure class="image-box"><a href="https://bginteriorsanddecor.com/landing-page/?gad_source=1&gclid=Cj0KCQjwurS3BhCGARIsADdUH53aJYvSTEZGjTjIgyRFpJj5NMX6AOl7UsKl0fbqHOMjkLz05PlVzzYaAngxEALw_wcB"><img src="{{asset('user/images/clients/1.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="https://deinterior.com.pk/"><img src="{{asset('user/images/clients/2.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="https://hiline.pk/interior-designer-in-karachi"><img src="{{asset('user/images/clients/3.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="https://www.styleyourspace.pk/"><img src="{{asset('user/images/clients/4.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="https://landscape.com.pk/interior-designer-in-karachi/"><img src="{{asset('user/images/clients/5.png')}}" alt=""></a></figure></li>
                   
                </ul>
            </div>
        </div>
    </section>
                      
</main>


@endsection