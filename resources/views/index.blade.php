@extends('master');
@section('content')

<main>    <!-- Banner area start -->
    <section style="margin-top: -33px !important" class="banner overflow-hidden">
       <div class="swiper banner__slider">
           <div class="swiper-wrapper">
               <div class="swiper-slide">
                   <div class="banner__item banner__space ">
                       <div class="banner__item-bg" data-background="{{asset('Asset/decorVista/assets/imgs/banner-1/banner-1.jpg')}}"></div>
                       <div class="container">
                           <div class="banner__item__left-bg"></div>
                           <div class="banner__item__right-bg"></div>
                           <div class="row">
                               <div class="col-12">
                                   <div class="banner__item-content">
                                       <div class="banner__item-wrapper">
                                           <h1 class="banner__item-title rr-fw-bold color-white">
                                               Creating Spaces Through <span>Innovative Design.</span>
                                           </h1>
                                           <p class="des color-white mb-45 mb-md-30">Welcome to DecorVista, crafting timeless interiors that tell your story. Discover a world where design meets emotion.</p>
   
                                           <a href="{{route('Front.about')}}" class="rr-btn">
                                               <span class="btn-wrap">
                                                   <span class="text-one">About Us</span>
                                                   <span class="text-two">About Us</span>
                                               </span>
                                           </a>
                                       </div>

                                       <div class="banner__item-content-link">
                                           <a href="https://www.youtube.com/watch?v=vkew-1KK3Sc" class="popup-video zooming d-flex align-items-center" data-effect="mfp-move-from-top vertical-middle">
                                               <div class="icon">
                                                   <svg width="34" height="38" viewBox="0 0 34 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                       <path d="M33.656 19.0001L0.598633 37.7624V0.237793L33.656 19.0001Z" fill="#906E50"/>
                                                   </svg>                                                        
                                               </div>
                                           </a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="swiper-slide">
                   <div class="banner__item banner__space ">
                       <div class="banner__item-bg" data-background="{{asset('Asset/decorVista/assets/imgs/banner-1/banner-2.jpg')}}"></div>
                       <div class="container">
                           <div class="banner__item__left-bg"></div>
                           <div class="banner__item__right-bg"></div>
                           <div class="row">
                               <div class="col-12">
                                   <div class="banner__item-content">
                                       <div class="banner__item-wrapper">
                                           <h1 class="banner__item-title rr-fw-bold color-white">
                                               Creating Spaces Through <span>Innovative Design.</span>
                                           </h1>
                                           <p class="des color-white mb-45 mb-md-30">Welcome to DecorVista, crafting timeless interiors that tell your story. Discover a world where design meets emotion.</p>
   
                                           <a href="{{url('/about-us')}}" class="rr-btn">
                                               <span class="btn-wrap">
                                                   <span class="text-one">About Us</span>
                                                   <span class="text-two">About Us</span>
                                               </span>
                                           </a>
                                       </div>

                                       <div class="banner__item-content-link">
                                           <a href="https://www.youtube.com/watch?v=vkew-1KK3Sc" class="popup-video d-flex align-items-center" data-effect="mfp-move-from-top vertical-middle">
                                               <div class="icon">
                                                   <svg width="34" height="38" viewBox="0 0 34 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                       <path d="M33.656 19.0001L0.598633 37.7624V0.237793L33.656 19.0001Z" fill="#906E50"/>
                                                   </svg>                                                        
                                               </div>
                                           </a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="swiper-slide">
                   <div class="banner__item banner__space ">
                       <div class="banner__item-bg" data-background="{{asset('Asset/decorVista/assets/imgs/banner-1/banner-3.jpg')}}"></div>
                       <div class="container">
                           <div class="banner__item__left-bg"></div>
                           <div class="banner__item__right-bg"></div>
                           <div class="row">
                               <div class="col-12">
                                   <div class="banner__item-content">
                                       <div class="banner__item-wrapper">
                                           <h1 class="banner__item-title rr-fw-bold color-white">
                                               Creating Spaces Through <span>Innovative Design.</span>
                                           </h1>
                                           <p class="des color-white mb-45 mb-md-30">Welcome to DecorVista, crafting timeless interiors that tell your story. Discover a world where design meets emotion.</p>
   
                                           <a href="{{url('/about-us')}}" class="rr-btn">
                                               <span class="btn-wrap">
                                                   <span class="text-one">About Us</span>
                                                   <span class="text-two">About Us</span>
                                               </span>
                                           </a>
                                       </div>

                                       <div class="banner__item-content-link">
                                           <a href="https://www.youtube.com/watch?v=vkew-1KK3Sc" class="popup-video d-flex align-items-center" data-effect="mfp-move-from-top vertical-middle">
                                               <div class="icon">
                                                   <svg width="34" height="38" viewBox="0 0 34 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                       <path d="M33.656 19.0001L0.598633 37.7624V0.237793L33.656 19.0001Z" fill="#906E50"/>
                                                   </svg>                                                        
                                               </div>
                                           </a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               
           </div>
           <div class="banner__bottom-wrapper">

               <div class="banner__slider__arrow">
                   <button class="banner__slider__arrow-prev d-flex align-items-center justify-content-center wow clip-t-b">
                       <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1 8L26 8" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                           <path d="M19.75 1L26 8L19.75 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                       </svg>
                   </button>
   
                   <button class="banner__slider__arrow-next d-flex align-items-center justify-content-center wow clip-t-b">
                       <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M26 8L1 8" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                           <path d="M7.25 1L1 8L7.25 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                       </svg>                            
                   </button>
               </div>

               <div class="banner__bottom-title">
                   <h6><a href="#">Creating Spaces Through<span> Innovative Design.</span> </a></h6>
               </div>

               <div class="swiper-container gallery-thumbs">
                   <div class="swiper-wrapper">
                       <div class="swiper-slide"><img src="{{asset('Asset/decorVista/assets/imgs/banner-1/banner-1.jpg')}}" alt=""></div>
                       <div class="swiper-slide"><img src="{{asset('Asset/decorVista/assets/imgs/banner-1/banner-2.jpg')}}" alt=""></div>
                       <div class="swiper-slide"><img src="{{asset('Asset/decorVista/assets/imgs/banner-1/banner-3.jpg')}}" alt=""></div>
                   </div>
               </div>
           </div>

           {{-- <div class="banner__socail-media">
               <ul>
                   <li><a href="https://www.facebook.com/">Facebook</a></li>
                   <li><a href="https://www.instagram.com/">Instagram</a></li>
                   <li><a href="https://x.com/tweeter">Tweeter</a></li>
                   <li><a href="https://dribbble.com/">DRIBBBLE </a></li>
               </ul>
           </div> --}}
       </div>

   </section>
   <!-- Banner area end -->

   <!--about-us area start -->
   <section class="about-us section-space">
       <div class="container">
           <div class="row align-items-center">
               <div class="col-lg-6">
                   <div class="about-us__media">
                       <img class="wow clip-a-z" src="{{asset('Asset/decorVista/assets/imgs/about-us/about.jpg')}}" alt="image not found">

                       <div class="about-us__box">
                           <h4><span class="odometer" data-count="20">0</span></h4>
                           <h6>Years <br> Experience</h6>
                       </div>

                       <div class="about-us__socail">
                           <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                           <a href="#"><i class="fa-brands fa-twitter"></i></a>
                           <a href="#"><i class="fa-brands fa-instagram"></i></a>
                           <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                       </div>
                   </div>
               </div>

               <div class="col-lg-6">
                   <div class="about-us__content">
                       <div class="section__title-wrapper mb-45 mb-xs-40">
                           <span class="section__subtitle justify-content-center">Welcome To DecorVista</span>
                           <h2 class="section__title mb-25 title-animation">Interior Design with Different Approach</h2>
                           <p class="mb-0">Et purus duis sollicitudin dignissim habitant. Egestas nulla quis venenatis cras sed eu massa eu faucibus Urna fusce Et purus duis sollicitudin dig- nissim habitant.</p>
                       </div>

                       <div class="skill-one__progress mb-50 mb-xs-30">
                           <div class="skill-one__progress-single">
                               <h6 class="skill-one__progress-title">Interior Design</h6>
                               <div class="bar">
                                   <div class="bar-inner count-bar counted" data-percent="90%">
                                       <div class="count-text">90%</div>
                                   </div>
                               </div>
                           </div>
   
                           <div class="skill-one__progress-single">
                               <h6 class="skill-one__progress-title">Architecture</h6>
                               <div class="bar">
                                   <div class="bar-inner count-bar counted" data-percent="80%">
                                       <div class="count-text">80%</div>
                                   </div>
                               </div>
                           </div>
                           <div class="skill-one__progress-single">
                               <h6 class="skill-one__progress-title">3D Design</h6>
                               <div class="bar">
                                   <div class="bar-inner count-bar counted" data-percent="95%">
                                       <div class="count-text">95%</div>
                                   </div>
                               </div>
                           </div>
                       </div>
   
                       <a href="{{url('/about-us')}}" class="rr-btn">
                           <span class="btn-wrap">
                               <span class="text-one">Learn More 
                                   <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M1 6.5H11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M6 1.5L11 6.5L6 11.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                   </svg>
                               </span>
                               <span class="text-two">Learn More 
                                   <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M1 6.5H11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M6 1.5L11 6.5L6 11.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                   </svg>
                               </span>
                           </span>
                       </a>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!--about-us area end -->

   <!--what-we-do  area start -->
   <section class="what-we-do section-space__bottom">
       <div class="container">
           <div class="row">
               <div class="section__title-wrapper text-center mb-55 mb-xs-40">
                   <span class="section__subtitle justify-content-center">What We Do</span>
                   <h2 class="section__title title-animation">The best Services We Provide</h2>
               </div>
           </div>

           <div class="what-we-do__wrapper">
               <div class="what-we-do__bg">
                   <img src="{{asset('Asset/decorVista/assets/imgs/what-we-do/shape.png')}}" alt="">
               </div>
               <div class="row">
               <div class="col-xl-4 has--border has--border-1">
                   <div class="what-we-do__item has--padding-pb">
                       <div class="what-we-do__item-icon">
                           <img src="{{asset('Asset/decorVista/assets/imgs/what-we-do/what-we-do-1.svg')}}" alt="image not found">
                       </div>
                       <div class="text">
                           <h6 class="what-we-do__item-title title-animation"><a href="#">Home Interior Design</a></h6>
                           <p class="what-we-do__item-desc">Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero</p>
                           <a href="#" class="what-we-do__item-arrow">
                               Read More
                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M1 6H11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                               <path d="M6 1L11 6L6 11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                               </svg>
   
                           </a>
                       </div>
                   </div>
               </div>
               <div class="col-xl-4 has--border has--border-2">
                   <div class="what-we-do__item has--padding-pb">
                       <div class="what-we-do__item-icon">
                           <img src="{{asset('Asset/decorVista/assets/imgs/what-we-do/what-we-do-2.svg')}}" alt="image not found">
                       </div>
                       <div class="text">
                           <h6 class="what-we-do__item-title title-animation"><a href="#">Home Exterior Design</a></h6>
                           <p class="what-we-do__item-desc">Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero</p>
                           <a href="#" class="what-we-do__item-arrow">
                               Read More
                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M1 6H11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                               <path d="M6 1L11 6L6 11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                               </svg>
   
                           </a>
                       </div>
                   </div>
               </div>
               <div class="col-xl-4 has--border has--border-3">
                   <div class="what-we-do__item has--padding-pb">
                       <div class="what-we-do__item-icon">
                           <img src="{{asset('Asset/decorVista/assets/imgs/what-we-do/what-we-do-3.svg')}}" alt="image not found">
                       </div>
                       <div class="text">
                           <h6 class="what-we-do__item-title title-animation"><a href="#">2D/3D Design Layout</a></h6>
                           <p class="what-we-do__item-desc">Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero</p>
                           <a href="#" class="what-we-do__item-arrow">
                               Read More
                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M1 6H11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                               <path d="M6 1L11 6L6 11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                               </svg>
   
                           </a>
                       </div>
                   </div>
               </div>
               <div class="col-xl-4 has--border has--border-4">
                   <div class="what-we-do__item has--padding">
                       <div class="what-we-do__item-icon">
                           <img src="{{asset('Asset/decorVista/assets/imgs/what-we-do/what-we-do-4.svg')}}" alt="image not found">
                       </div>
                       <div class="text">
                           <h6 class="what-we-do__item-title title-animation"><a href="#">Furniture's Design</a></h6>
                           <p class="what-we-do__item-desc">Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero</p>
                           <a href="#" class="what-we-do__item-arrow">
                               Read More
                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M1 6H11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                               <path d="M6 1L11 6L6 11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                               </svg>
   
                           </a>
                       </div>
                   </div>
               </div>
               <div class="col-xl-4 has--border has--border-5">
                   <div class="what-we-do__item has--padding">
                       <div class="what-we-do__item-icon">
                           <img src="{{asset('Asset/decorVista/assets/imgs/what-we-do/what-we-do-5.svg')}}" alt="image not found">
                       </div>
                       <div class="text">
                           <h6 class="what-we-do__item-title title-animation"><a href="#">Modern Home Interior</a></h6>
                           <p class="what-we-do__item-desc">Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero</p>
                           <a href="#" class="what-we-do__item-arrow">
                               Read More
                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M1 6H11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                               <path d="M6 1L11 6L6 11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                               </svg>
   
                           </a>
                       </div>
                   </div>
               </div>
               <div class="col-xl-4 has--border has--border-6">
                   <div class="what-we-do__item has--padding">
                       <div class="what-we-do__item-icon">
                           <img src="{{asset('Asset/decorVista/assets/imgs/what-we-do/what-we-do-6.svg')}}" alt="image not found">
                       </div>
                       <div class="text">
                           <h6 class="what-we-do__item-title title-animation"><a href="#">Custom Design Plan</a></h6>
                           <p class="what-we-do__item-desc">Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero</p>
                           <a href="#" class="what-we-do__item-arrow">
                               Read More
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
       </div>
   </section>
   <!--what-we-do  area end -->

   <!--latest-project  area start -->
   
   <section class="latest-project section-space__bottom">
    <div class="container">
        <div class="row mb-55 mb-xs-40 align-items-end">
            <div class="col-lg-6">
                <div class="section__title-wrapper">
                    <span class="section__subtitle justify-content-center">latest projects</span>
                    <h2 class="section__title title-animation">Our Projects & Designs</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <p class=" des mb-0">Sed id lacus volutpat, imperdiet quam a, fermentum mi. Etiam urna sapien, tempor in accumsan eu, consequat sed neque Etiam euismod volutpat lacus fringilla henr.</p>
            </div>
        </div>

        <div class="row gx-100 mb-minus-60">

            <div class="col-lg-6">
                <div class="latest-project__item">
                    <div class="latest-project__media">
                        <img class="wow clip-a-z" src="{{asset('Asset/decorVista/assets/imgs/latest-project/latest-project-1.jpg')}}" alt="image not found">
                        <a class="icon" href="#">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.48633 23.4867L22.4072 5.56579" stroke="#906E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.3848 4.61475H23.3501V13.58" stroke="#906E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                                                                          
                        </a>
                    </div>
                    <div class="latest-project__text">
                        <h5 class="title-animation"><a href="#">D-Orex Home Interior</a></h5>
                        <p class="mb-0">DecorVista is one of the most popular for</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="latest-project__item">
                    <div class="latest-project__media">
                        <img class="wow clip-a-z" src="{{asset('Asset/decorVista/assets/imgs/latest-project/latest-project-2.jpg')}}" alt="image not found">
                        <a class="icon" href="#">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.48633 23.4867L22.4072 5.56579" stroke="#906E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.3848 4.61475H23.3501V13.58" stroke="#906E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                                                                          
                        </a>
                    </div>
                    <div class="latest-project__text">
                        <h5 class="title-animation"><a href="#">Luxe Living Home Decor</a></h5>
                        <p class="mb-0">DecorVista is one of the most popular for</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="latest-project__item">
                    <div class="latest-project__media">
                        <img style="padding-top: 140px;" class="wow clip-a-z" src="{{asset('Asset/decorVista/assets/imgs/latest-project/latest-project-3.jpg')}}" alt="image not found">
                        <a class="icon" href="#">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.48633 23.4867L22.4072 5.56579" stroke="#906E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.3848 4.61475H23.3501V13.58" stroke="#906E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                                                                          
                        </a>
                    </div>
                    <div class="latest-project__text">
                        <h5 class="title-animation"><a href="#">Home Corner Interior</a></h5>
                        <p class="mb-0">DecorVista is one of the most popular for</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="latest-project__item">
                    <div class="latest-project__media">
                        <img style="padding-top: 140px;" class="wow clip-a-z" src="{{asset('Asset/decorVista/assets/imgs/latest-project/latest-project-4.jpg')}}" alt="image not found">
                        <a class="icon" href="#">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.48633 23.4867L22.4072 5.56579" stroke="#906E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.3848 4.61475H23.3501V13.58" stroke="#906E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                                                                          
                        </a>
                    </div>
                    <div class="latest-project__text">
                        <h5 class="title-animation"><a href="#">Orion Home Studio Interior</a></h5>
                        <p class="mb-0">DecorVista is one of the most popular for</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
   <!--latest-project  area end -->


   <!-- experience start -->
   <section style="margin-top: 150px;" class="experience" data-background="assets/imgs/experience/experience-bg.jpg"> 
       <div class="container">
           <div class="experience__item-wrapper">
               <div class="experience__item">
                   <div class="experience__item-content">
                       <div class="experience__item-content-icon">
                           <img src="{{asset('Asset/decorVista/assets/imgs/experience/experience-1.svg')}}" alt="image not found">
                       </div>
                       <div class="experience__item-content-text">
                           <h6 class="title-animation">Years Of Experience</h6>
                           <h2><span class="odometer" data-count="15">0</span>+</h2>
                       </div>
                   </div>
               </div>

               <div class="experience__item">
                   <div class="experience__item-content">
                       <div class="experience__item-content-icon">
                           <img src="{{asset('Asset/decorVista/assets/imgs/experience/experience-2.svg')}}" alt="image not found">
                       </div>
                       <div class="experience__item-content-text">
                           <h6 class="title-animation">Success Projects</h6>
                           <h2><span class="odometer" data-count="600">0s</span>+</h2>
                       </div>
                   </div>
               </div>

               <div class="experience__item">
                   <div class="experience__item-content">
                       <div class="experience__item-content-icon">
                           <img src="{{asset('Asset/decorVista/assets/imgs/experience/experience-3.svg')}}" alt="image not found">
                       </div>
                       <div class="experience__item-content-text">
                           <h6 class="title-animation">Team Members</h6>
                           <h2><span class="odometer" data-count="40">0</span>+</h2>
                       </div>
                   </div>
               </div>

               <div class="experience__item">
                   <div class="experience__item-content">
                       <div class="experience__item-content-icon">
                           <img src="{{asset('Asset/decorVista/assets/imgs/experience/experience-4.svg')}}" alt="image not found">
                       </div>
                       <div class="experience__item-content-text">
                           <h6 class="title-animation">Clients Satisfactions</h6>
                           <h2><span class="odometer" data-count="500">0</span>+</h2>
                       </div>
                   </div>

               </div>
           </div>
       </div>
   </section>
   <!-- experience end -->

   {{-- products --}}
   <div class="1">
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
                <div  class="our-featured-service__item">
                    <div class="our-featured-service__media wow clip-a-z">
                        @if (!empty($img))
                       
                        <img src="{{asset('uploads/product/large/'.$img->image)}}" alt="image not found">
                        @endif
                      
                    </div>
                    <div class="our-featured-service__content">
                        <div class="our-featured-service__text">
                            <h6 class="title-animation"><a href="{{ route('Front.product.detail',$product->id) }}">{{$product->name}}</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
                                
                              
        </div>
    </div>
</div>
   {{-- products --}}
   <!-- why-choose-us start -->
   <section class="why-choose-us section-space__top">
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
                               <img src="{{asset('Asset/decorVista/assets/imgs/why-choose-us/design.svg')}}" alt="image not found">
                           </div>
                           <div class="why-choose-us__text">
                               <h6 class="mb-10 title-animation">Modern Design</h6>
                               <p class="mb-0">Decoral is one of the most popular for those who want to explore the</p>
                           </div>
                       </div>
                       <div class="why-choose-us__item">
                           <div class="why-choose-us__icon">
                               <img src="{{asset('Asset/decorVista/assets/imgs/why-choose-us/expert.svg')}}" alt="image not found">
                           </div>
                           <div class="why-choose-us__text">
                               <h6 class="mb-10 title-animation">Expert Team</h6>
                               <p class="mb-0">Decoral is one of the most popular for those who want to explore the</p>
                           </div>
                       </div>
                       <div class="why-choose-us__item">
                           <div class="why-choose-us__icon">
                               <img src="{{asset('Asset/decorVista/assets/imgs/why-choose-us/price.svg')}}" alt="image not found">
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
                                   <img src="{{asset('Asset/decorVista/assets/imgs/why-choose-us/why-choose-us-1.jpg')}}" alt="image not found">
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-5">
                           <div class="why-choose-us__media img2 wow clip-a-z mb-30">
                               <img src="{{asset('Asset/decorVista/assets/imgs/why-choose-us/why-choose-us-2.jpg')}}" alt="image not found">
                           </div>
                           <div class="why-choose-us__media">
                               <div class="why-choose-us__media img3 wow clip-a-z">
                                   <img src="{{asset('Asset/decorVista/assets/imgs/why-choose-us/why-choose-us-3.jpg')}}" alt="image not found">
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

           </div>
       </div>
   </section>
   <!-- why-choose-us end -->

   <!-- Filter area start -->
   <div class="filter__area filter__space">
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <div class="filter__media filter__container">
                       <div class="pic pic--left" data-background="{{asset('Asset/decorVista/assets/imgs/filter__area/before-filter.png')}}"></div>
                       <div class="pic pic--right" data-background="{{asset('Asset/decorVista/assets/imgs/filter__area/after-filter.png')}}"></div>
                       <div class="comparison-ctrl">
                           <img class="img-fluid" src="{{asset('Asset/decorVista/assets/imgs/filter__area/ctrl.svg')}}" alt="icon not found">
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Filter area end -->

   <!-- "working-process area start -->
   <section class="working-process working-process__background">
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <div class="section__title-wrapper text-center mb-50">
                       <span class="section__subtitle">Working Process</span>
                       <h2 class="section__title title-animation">Our Working Process</h2>
                   </div>
               </div>
           </div>
           <div class="working-process__wrapper">
               <div class="working-process__item">
                   <div class="working-process__icon">
                       <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M53.2007 8.45C51.7563 8.16111 50.384 8.37778 49.084 9.1C47.784 9.82222 46.9174 10.9417 46.484 12.4583C46.0507 13.975 46.2313 15.3833 47.0257 16.6833C47.8201 17.9833 48.9396 18.85 50.384 19.2833C50.8174 19.4278 51.2507 19.5 51.684 19.5C52.6951 19.5 53.634 19.2111 54.5007 18.6333C55.8007 17.9111 56.6674 16.7917 57.1007 15.275C57.534 13.7583 57.3535 12.35 56.559 11.05C55.7646 9.75 54.6451 8.88333 53.2007 8.45ZM53.634 16.9C52.7674 17.4778 51.8285 17.6222 50.8174 17.3333C49.8063 17.0444 49.084 16.4667 48.6507 15.6C48.2174 14.7333 48.109 13.8306 48.3257 12.8917C48.5424 11.9528 49.084 11.2667 49.9507 10.8333C50.5285 10.4 51.1063 10.1833 51.684 10.1833L52.7674 10.4C53.634 10.6889 54.3201 11.2667 54.8257 12.1333C55.3313 13 55.4757 13.9028 55.259 14.8417C55.0424 15.7806 54.5007 16.4667 53.634 16.9ZM64.2507 16.6833L62.3007 15.1667C62.4451 14.1556 62.4451 13.1444 62.3007 12.1333L64.034 10.6167C64.3229 10.3278 64.5396 9.93055 64.684 9.425C64.8285 8.91944 64.7563 8.52222 64.4674 8.23333L62.9507 5.41667C62.6618 4.98333 62.3007 4.69444 61.8674 4.55C61.434 4.40555 61.0007 4.40555 60.5674 4.55L58.184 5.41667C57.4618 4.69445 56.5951 4.18889 55.584 3.9L55.1507 1.73333C55.0063 1.15556 54.7535 0.722223 54.3924 0.433334C54.0313 0.144445 53.634 0 53.2007 0H50.1674C49.5896 0 49.1201 0.144445 48.759 0.433334C48.3979 0.722223 48.1451 1.15556 48.0007 1.73333L47.5674 3.9C46.7007 4.33333 45.834 4.91111 44.9674 5.63333L43.0174 4.76667C42.4396 4.62222 41.934 4.65833 41.5007 4.875C41.0674 5.09167 40.7063 5.41667 40.4174 5.85L38.9007 8.45C38.7563 8.88333 38.7201 9.31667 38.7924 9.75C38.8646 10.1833 39.0451 10.6167 39.334 11.05L41.0674 12.5667C40.9229 13.5778 40.9951 14.5889 41.284 15.6L39.5507 17.1167C39.1174 17.4056 38.8646 17.8028 38.7924 18.3083C38.7201 18.8139 38.8285 19.2833 39.1174 19.7167L40.634 22.3167C40.9229 22.75 41.284 23.0389 41.7174 23.1833C42.1507 23.3278 42.584 23.3278 43.0174 23.1833L45.184 22.3167C46.0507 23.0389 46.9896 23.5444 48.0007 23.8333L48.434 26C48.434 26.5778 48.6507 27.0111 49.084 27.3C49.5174 27.5889 49.9507 27.7333 50.384 27.7333H53.4174C53.8507 27.7333 54.284 27.5889 54.7174 27.3C55.1507 27.0111 55.3674 26.5778 55.3674 26L55.8007 23.8333C56.8118 23.4 57.7507 22.8222 58.6174 22.1L60.5674 22.9667C61.0007 23.1111 61.4701 23.075 61.9757 22.8583C62.4813 22.6417 62.8063 22.3889 62.9507 22.1L64.684 19.2833C64.8285 18.85 64.8646 18.4167 64.7924 17.9833C64.7201 17.55 64.5396 17.1167 64.2507 16.6833ZM62.9507 18.4167L61.434 21.0167H61.2174L58.6174 20.15C58.3285 20.0056 58.0396 20.0778 57.7507 20.3667C56.884 21.2333 55.8729 21.8111 54.7174 22.1C54.4285 22.2444 54.2118 22.5333 54.0674 22.9667L53.634 25.7833H53.4174H50.384H50.1674L49.734 22.9667C49.734 22.6778 49.5174 22.4611 49.084 22.3167C47.9285 21.8833 46.9174 21.3056 46.0507 20.5833C45.7618 20.4389 45.4729 20.3667 45.184 20.3667L42.3674 21.45L40.8507 18.6333C40.7063 18.6333 40.7063 18.5611 40.8507 18.4167L42.8007 16.6833C43.0896 16.3944 43.234 16.1056 43.234 15.8167C42.9451 14.6611 42.8729 13.5056 43.0174 12.35C43.1618 11.9167 43.0896 11.6278 42.8007 11.4833L40.634 9.53333C40.634 9.53333 40.634 9.46111 40.634 9.31667L42.1507 6.71667H42.3674L44.9674 7.58333C45.2563 7.72778 45.5451 7.65555 45.834 7.36666C46.7007 6.5 47.7118 5.92222 48.8674 5.63333C49.1563 5.48889 49.3729 5.2 49.5174 4.76667L49.9507 1.95H50.1674H53.2007L53.8507 4.76667C53.8507 5.05556 54.0674 5.27222 54.5007 5.41667C55.6563 5.85 56.6674 6.42778 57.534 7.15C57.8229 7.43889 58.1118 7.51111 58.4007 7.36666L61.2174 6.28333V6.5L62.734 9.1C62.8785 9.1 62.8785 9.17222 62.734 9.31667L60.784 11.05C60.4951 11.3389 60.3507 11.6278 60.3507 11.9167C60.6396 13.0722 60.6396 14.2278 60.3507 15.3833C60.3507 15.8167 60.4951 16.1056 60.784 16.25L62.9507 18.2C62.9507 18.2 62.9507 18.2722 62.9507 18.4167ZM13.7674 34.2333C13.7674 33.3667 13.4424 32.6444 12.7924 32.0667C12.1424 31.4889 11.384 31.2 10.5174 31.2H10.084V26.4333C10.084 25.8556 9.90347 25.5306 9.54236 25.4583C9.18125 25.3861 8.82014 25.4583 8.45903 25.675C8.09792 25.8917 7.98958 26.2167 8.13403 26.65V31.2H5.31736V14.7333C5.31736 14.5889 5.31736 14.4444 5.31736 14.3L2.93403 10.4V5.41667H10.5174V10.4L8.3507 14.3C8.20625 14.4444 8.13403 14.5889 8.13403 14.7333V21.0167C7.98958 21.45 8.09792 21.775 8.45903 21.9917C8.82014 22.2083 9.18125 22.2444 9.54236 22.1C9.90347 21.9556 10.084 21.6667 10.084 21.2333V14.95L12.2507 11.05C12.3951 10.9056 12.4674 10.7611 12.4674 10.6167V0.866669C12.4674 0.722224 12.359 0.541664 12.1424 0.324997C11.9257 0.10833 11.6729 0 11.384 0H2.06736C1.77847 0 1.56181 0.10833 1.41736 0.324997C1.27292 0.541664 1.20069 0.794443 1.20069 1.08333V10.6167C1.20069 10.7611 1.20069 10.9778 1.20069 11.2667L3.58403 14.95V31.2H2.93403C1.77847 31.2 0.947917 31.6694 0.442361 32.6083C-0.0631945 33.5472 -0.135417 34.5583 0.225694 35.6417C0.586806 36.725 1.34514 37.3389 2.50069 37.4833V56.55C2.50069 57.85 2.93403 58.8972 3.80069 59.6917C4.66736 60.4861 5.67847 60.8833 6.83403 60.8833C7.98958 60.8833 9.0007 60.4861 9.86736 59.6917C10.734 58.8972 11.1674 57.85 11.1674 56.55V37.4833C11.8896 37.3389 12.5035 36.9778 13.009 36.4C13.5146 35.8222 13.7674 35.1 13.7674 34.2333ZM2.93403 3.46667V1.95H10.5174V3.46667H2.93403ZM6.83403 58.9333C6.11181 58.9333 5.49792 58.6806 4.99236 58.175C4.48681 57.6694 4.23403 57.1278 4.23403 56.55L4.4507 37.4833H9.21736V56.55C9.21736 57.1278 8.96458 57.6694 8.45903 58.175C7.95347 58.6806 7.41181 58.9333 6.83403 58.9333ZM10.5174 35.5333H2.93403C2.50069 35.5333 2.17569 35.3167 1.95903 34.8833C1.74236 34.45 1.74236 34.0167 1.95903 33.5833C2.17569 33.15 2.50069 32.9333 2.93403 32.9333H10.5174C11.0951 32.9333 11.4563 33.15 11.6007 33.5833C11.7451 34.0167 11.7451 34.45 11.6007 34.8833C11.4563 35.3167 11.0951 35.5333 10.5174 35.5333ZM60.784 53.95V49.8333C60.784 46.3667 60.0618 43.0806 58.6174 39.975C57.1729 36.8694 55.0785 34.2333 52.334 32.0667C52.0451 31.7778 51.684 31.6333 51.2507 31.6333C50.8174 31.6333 50.4563 31.7778 50.1674 32.0667C48.1451 30.6222 45.9063 29.5389 43.4507 28.8167C43.5951 28.0944 43.4507 27.6611 43.0174 27.5167C41.4285 26.65 39.8035 26.2167 38.1424 26.2167C36.4813 26.2167 34.8563 26.65 33.2674 27.5167C32.834 27.6611 32.6896 28.0944 32.834 28.8167C31.6785 29.1056 30.5951 29.5389 29.584 30.1167V18.85C33.484 17.8389 35.5063 15.3833 35.6507 11.4833C35.6507 9.46111 35.0729 7.36667 33.9174 5.2C32.7618 3.03333 31.3896 1.37222 29.8007 0.216667C28.934 -0.0722217 28.4285 0.216665 28.284 1.08333V8.88333C28.1396 9.31666 27.8507 9.53333 27.4174 9.53333H23.5174C23.3729 9.53333 23.2285 9.46111 23.084 9.31667C22.9396 9.17222 22.8674 9.02778 22.8674 8.88333V0.866669C22.7229 0.144446 22.2174 -0.0722217 21.3507 0.216667C19.6174 1.22778 18.209 2.81667 17.1257 4.98333C16.0424 7.15 15.5007 9.31667 15.5007 11.4833C15.5007 15.3833 17.4507 17.8389 21.3507 18.85V34.6667C19.3285 36.6889 17.8118 39 16.8007 41.6C15.7896 44.2 15.284 46.9444 15.284 49.8333V53.95C14.1285 54.3833 13.4063 55.1417 13.1174 56.225C12.8285 57.3083 12.9729 58.3556 13.5507 59.3667C14.1285 60.3778 15.0674 60.8833 16.3674 60.8833C18.9674 60.8833 21.5674 61.5694 24.1674 62.9417C26.7674 64.3139 29.4396 65 32.184 65H43.884C46.7729 65 49.5174 64.3139 52.1174 62.9417C54.7174 61.5694 57.3174 60.8833 59.9174 60.8833C61.2174 60.8833 62.1563 60.3778 62.734 59.3667C63.3118 58.3556 63.4563 57.3083 63.1674 56.225C62.8785 55.1417 62.084 54.3833 60.784 53.95ZM49.5174 33.8V44.85C49.5174 45.1389 49.5896 45.3917 49.734 45.6083C49.8785 45.825 50.0951 45.9333 50.384 45.9333C50.6729 45.9333 50.8896 45.825 51.034 45.6083C51.1785 45.3917 51.2507 45.1389 51.2507 44.85V33.8C53.7063 35.8222 55.6201 38.2056 56.9924 40.95C58.3646 43.6944 59.0507 46.6556 59.0507 49.8333V53.7333H51.4674L51.2507 50.05C51.2507 49.7611 51.1785 49.5083 51.034 49.2917C50.8896 49.075 50.6729 48.9667 50.384 48.9667C50.0951 48.9667 49.8785 49.075 49.734 49.2917C49.5896 49.5083 49.5174 49.7611 49.5174 50.05V53.7333H43.4507V30.9833C45.6174 31.5611 47.6396 32.5 49.5174 33.8ZM41.5007 28.8167V53.7333H34.5674V28.8167C36.8785 27.8056 39.1896 27.8056 41.5007 28.8167ZM32.834 53.7333H26.7674V33.8C28.6451 32.5 30.6674 31.5611 32.834 30.9833V53.7333ZM17.4507 11.4833C17.4507 10.0389 17.7757 8.52222 18.4257 6.93333C19.0757 5.34445 19.9063 4.04444 20.9174 3.03333V8.88333C20.9174 9.60555 21.1701 10.2194 21.6757 10.725C22.1813 11.2306 22.7951 11.4833 23.5174 11.4833H27.4174C28.1396 11.4833 28.7535 11.2306 29.259 10.725C29.7646 10.2194 30.0174 9.60555 30.0174 8.88333V3.03333C31.1729 4.18889 32.0757 5.525 32.7257 7.04167C33.3757 8.55833 33.7007 10.0389 33.7007 11.4833C33.7007 14.6611 31.9674 16.5389 28.5007 17.1167C27.9229 17.2611 27.634 17.55 27.634 17.9833V30.9833L25.9007 32.0667C25.6118 31.7778 25.2868 31.6694 24.9257 31.7417C24.5646 31.8139 24.2396 31.9222 23.9507 32.0667L23.084 32.7167L23.3007 17.9833C23.3007 17.55 23.0118 17.2611 22.434 17.1167C19.1118 16.3944 17.4507 14.5167 17.4507 11.4833ZM24.8174 33.8V53.7333H17.234V49.8333C17.234 46.6556 17.9201 43.6944 19.2924 40.95C20.6646 38.2056 22.5063 35.8222 24.8174 33.8ZM61.0007 58.5C60.7118 58.7889 60.3507 58.9333 59.9174 58.9333C57.0285 58.9333 54.0674 59.7278 51.034 61.3167C48.8674 62.4722 46.484 63.05 43.884 63.05H32.184C29.7285 63.05 27.3451 62.4722 25.034 61.3167C21.8563 59.5833 18.9674 58.7889 16.3674 58.9333C15.6451 58.9333 15.1757 58.6806 14.959 58.175C14.7424 57.6694 14.7785 57.1278 15.0674 56.55C15.3563 55.9722 15.7896 55.6833 16.3674 55.6833H59.7007C60.4229 55.6833 60.9646 56.0083 61.3257 56.6583C61.6868 57.3083 61.5785 57.9222 61.0007 58.5Z" fill="#080A0B"/>
                       </svg>
                           <span class="number">01</span>
                   </div>

                   <div class="working-process__text text-center">
                       <h6 class="title-animation"><a href="#">Visit Project</a></h6>
                       <p class="mb-0">Lorem ipsum dolor sit amecon sectetur
                           adipisicing elit sed do.</p>
                   </div>
               </div>
               <div class="working-process__item">
                   <div class="working-process__icon">
                       <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M7.99862 60H52.0026C53.6596 60 55.0028 58.6569 55.0028 57.0002V23.2564L55.3578 23.4914C56.0103 23.9419 56.8191 24.1045 57.595 23.9414C58.3932 23.7762 59.0896 23.2926 59.5231 22.6024L59.5292 22.5924C60.4079 21.1769 60.0232 19.3213 58.6541 18.3717L31.6467 0.504024C30.6548 -0.168008 29.3534 -0.168008 28.3614 0.504024L1.33897 18.3808C-0.0273061 19.3336 -0.407167 21.1897 0.474915 22.6025C0.903721 23.2922 1.59607 23.7763 2.39106 23.9424C2.5909 23.9827 2.79431 24.0028 2.99811 24.0025C3.58098 24.0033 4.15057 23.8291 4.63328 23.5025L4.99828 23.2575V57.0002C4.99828 58.6569 6.34156 60 7.99862 60ZM53.0026 57.0002C53.0026 57.5525 52.5548 58.0001 52.0025 58.0001H7.99862C7.44627 58.0001 6.99854 57.5525 6.99854 57.0002V21.9356L30.0006 6.73657L53.0026 21.9356V57.0002ZM3.51916 21.8376C3.30981 21.9823 3.05003 22.0344 2.80105 21.9816C2.53829 21.9267 2.30972 21.7662 2.16903 21.5376C1.85238 21.0438 1.97563 20.3888 2.45002 20.0437L29.4735 2.16598C29.6289 2.06038 29.8126 2.00401 30.0006 2.00401C30.1923 2.0048 30.3792 2.06295 30.5377 2.17103L57.5431 20.0388C58.0213 20.3806 58.1494 21.0362 57.8351 21.5328C57.691 21.7641 57.4588 21.9266 57.192 21.9827C56.9414 22.0325 56.6811 21.9777 56.472 21.8308L30.5526 4.70373C30.2184 4.4855 29.7867 4.4855 29.4526 4.70373L3.51916 21.8376Z" fill="#080A0B"/>
                           <path d="M21.6462 18.8699C20.4847 17.7141 18.6073 17.7141 17.4458 18.8699L11.8693 24.4454C10.7128 25.6065 10.7128 27.484 11.8693 28.6451L20.9191 37.7015L15.3526 43.2682C15.2319 43.3879 15.144 43.5366 15.0976 43.7002L12.7664 51.8607C12.6006 52.4397 12.7165 53.063 13.0791 53.5438C13.4417 54.0247 14.0092 54.3075 14.6115 54.3075C14.7897 54.3071 14.9671 54.2822 15.1386 54.2335L23.3004 51.9007C23.4638 51.8542 23.6126 51.7664 23.7324 51.6457L29.301 46.0821L38.3527 55.1335C39.5145 56.2887 41.3913 56.2887 42.5531 55.1335L48.1296 49.5579C49.2861 48.3968 49.2861 46.5193 48.1296 45.3582L39.0827 36.3018L46.7404 28.6453C47.4838 27.9032 47.9015 26.8959 47.9015 25.8456C47.9015 24.7952 47.4838 23.788 46.7404 23.0458L43.9522 20.258C43.2113 19.513 42.2028 19.0956 41.152 19.0991C40.1013 19.0955 39.0929 19.5125 38.3517 20.257L30.701 27.9215L21.6462 18.8699ZM18.1539 48.8458C17.5656 48.2633 16.8617 47.8103 16.0877 47.5159L16.7099 45.3371L20.1781 46.823L21.6643 50.2907L19.4851 50.9128C19.1904 50.1384 18.737 49.4343 18.1539 48.8458ZM22.1252 46.29L36.9715 31.446L39.0427 33.5169L23.3673 49.1888L22.1252 46.29ZM34.9014 26.5473L36.9726 24.4764L42.5291 30.0321L40.4569 32.102L34.9014 26.5473ZM35.5585 30.0321L20.7111 44.8761L17.8108 43.6341L33.4862 27.9612L35.5585 30.0321ZM13.2835 27.2322C12.9043 26.8527 12.9043 26.2379 13.2835 25.8583L18.8599 20.2828C19.2395 19.9037 19.8545 19.9037 20.234 20.2828L22.3152 22.3637L20.234 24.4445C19.974 24.6956 19.8698 25.0673 19.9613 25.417C20.0528 25.7666 20.3259 26.0396 20.6755 26.1312C21.0252 26.2227 21.397 26.1184 21.6482 25.8584L23.7294 23.7776L25.8006 25.8504L24.4165 27.2343C24.1565 27.4853 24.0523 27.8571 24.1437 28.2068C24.2352 28.5564 24.5083 28.8294 24.8579 28.9209C25.2076 29.0125 25.5794 28.9082 25.8306 28.6482L27.2147 27.2643L29.2859 29.3352L22.3352 36.2848L13.2835 27.2322ZM14.7296 52.2706L15.5296 49.4508C16.4384 49.8341 17.1614 50.5571 17.5449 51.4657L14.7296 52.2706ZM39.7398 39.7895L38.3557 41.1733C38.0957 41.4244 37.9915 41.7961 38.0829 42.1458C38.1745 42.4954 38.4475 42.7684 38.7972 42.86C39.1468 42.9515 39.5187 42.8472 39.7698 42.5872L41.1539 41.2014L43.2251 43.2722L41.1439 45.3531C40.884 45.6042 40.7797 45.9759 40.8712 46.3256C40.9627 46.6752 41.2358 46.9482 41.5854 47.0398C41.9351 47.1313 42.3069 47.027 42.5581 46.767L44.6393 44.6862L46.7194 46.7669C47.0986 47.1464 47.0986 47.7613 46.7194 48.1408L41.1429 53.7165C40.7634 54.0956 40.1484 54.0956 39.7688 53.7165L30.7171 44.6661L37.6677 37.7166L39.7398 39.7895ZM41.1529 21.1027C41.6724 21.101 42.1709 21.3074 42.5371 21.6757L45.3253 24.4635C46.0887 25.2278 46.0887 26.4659 45.3253 27.2302L43.9422 28.6182L38.3856 23.0625L39.7697 21.6787C40.1353 21.3096 40.6335 21.1022 41.1529 21.1027Z" fill="#080A0B"/>
                           </svg>
                           <span class="number">02</span>
                   </div>

                   <div class="working-process__text text-center">
                       <h6 class="title-animation"><a href="#">Planning Design</a></h6>
                       <p class="mb-0">Lorem ipsum dolor sit amecon sectetur
                           adipisicing elit sed do.</p>
                   </div>
               </div>
               <div class="working-process__item">
                   <div class="working-process__icon">
                       <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M59.9995 5.958C60.0032 5.14316 59.6789 4.36109 59.0995 3.78802L56.2116 0.900039C55.6412 0.32341 54.8637 -0.000689943 54.0526 1.10282e-06H54.0426C53.2365 0.000494707 52.4644 0.324793 51.8996 0.900039L38.7997 13.9999H13V3.00003C13 1.3431 11.6568 1.10282e-06 9.99992 1.10282e-06H7.99994C3.58376 0.00493714 0.00493604 3.58376 0 7.99994V52.2507C0.250257 56.6332 3.90056 60.0452 8.28998 59.9995H56.9996C58.6564 59.9995 59.9995 58.6565 59.9995 56.9996V16.9999C59.9995 15.3431 58.6564 13.9999 56.9996 13.9999H53.1997L59.0996 8.09995C59.6737 7.53487 59.9978 6.76356 59.9995 5.958ZM35.7798 24.9999C35.5681 25.0287 35.3554 24.9543 35.2078 24.7999C35.0589 24.652 34.9854 24.4445 35.0078 24.2359L35.3868 20.8359C35.4027 20.7648 35.4227 20.6946 35.4468 20.6259L39.3857 24.5649C39.3208 24.5789 39.2618 24.6109 39.1937 24.6189L35.7798 24.9999ZM41.0187 23.3668L36.6427 18.9898L47.5427 8.08997L51.9166 12.4629L41.0187 23.3668ZM48.9527 6.67491L50.4357 5.19291L54.8076 9.56585L53.3256 11.0488L48.9527 6.67491ZM1.99998 7.99994C2.00334 4.68766 4.68766 2.00324 7.99994 1.99999H9.99992C10.5522 1.99999 11 2.44769 11 2.99993V42.9996C11 43.5519 10.5523 43.9996 9.99992 43.9996H7.99994C5.70261 43.9989 3.51634 44.9878 1.99998 46.7135V7.99994ZM56.9996 15.9999C57.5519 15.9999 57.9997 16.4476 57.9997 16.9999V56.9996C57.9997 57.5519 57.552 57.9997 56.9996 57.9997H8.28998C4.98876 58.0551 2.22319 55.5138 1.99998 52.2197V51.9996C2.00334 48.6873 4.68766 46.003 7.99994 45.9997H9.99992C11.6568 45.9997 12.9999 44.6566 12.9999 42.9997V15.9999H36.7997L34.5287 18.2709C33.8947 18.8956 33.4959 19.72 33.3997 20.6048L33.0207 24.0118C32.9895 24.3441 33.0211 24.6791 33.1137 24.9998H15.9999C15.4476 24.9998 14.9998 25.4475 14.9998 25.9998C14.9998 26.552 15.4475 26.9997 15.9999 26.9997H18.9999V53.9996C18.9999 54.5518 19.4476 54.9996 19.9999 54.9996C20.5523 54.9996 21 54.5519 21 53.9996V39.9997H31.9999V47.9996H24.9999C24.4476 47.9996 23.9999 48.4473 23.9999 48.9996C23.9999 49.5518 24.4476 49.9996 24.9999 49.9996H44.9997C46.1043 49.9996 46.9997 49.1042 46.9997 47.9996V32.9998C46.9997 32.4476 46.552 31.9998 45.9997 31.9998C45.4475 31.9998 44.9997 32.4475 44.9997 32.9998V37.9997H20.9999V26.9998H35.7078C35.8053 27 35.9029 26.9947 35.9998 26.9839L39.4167 26.5949C40.284 26.4965 41.0935 26.1111 41.7167 25.4999L51.2047 16L56.9996 15.9999ZM44.9997 39.9997V47.9996H33.9997V39.9997H44.9997ZM57.6896 6.68192L56.2216 8.15088L51.8496 3.77893L53.3186 2.30997C53.5108 2.11273 53.7742 2.00097 54.0496 1.99999C54.33 2.00068 54.5983 2.11381 54.7946 2.31402L57.6866 5.20002C57.8877 5.39806 58.0005 5.66875 57.9997 5.95099C57.9988 6.22642 57.887 6.48991 57.6896 6.68192Z" fill="#080A0B"/>
                           </svg>
                           
                           <span class="number">03</span>
                   </div>

                   <div class="working-process__text text-center">
                       <h6 class="title-animation"><a href="#">Project Sketch</a></h6>
                       <p class="mb-0">Lorem ipsum dolor sit amecon sectetur
                           adipisicing elit sed do.</p>
                   </div>
               </div>
               <div class="working-process__item">
                   <div class="working-process__icon">
                       <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M60 25.1613H57.8254L54.5843 26.8667C54.2195 26.6654 53.8401 26.4948 53.4309 26.3922L49.3539 25.372V24.9085C51.1575 23.6497 52.2581 21.5701 52.2581 19.3548V17.6632C52.2581 13.9037 49.3123 10.7576 45.6918 10.648C45.508 10.6433 45.327 10.6499 45.1451 10.6589L46.2021 8.18422L41.0775 3.06105L38.0566 5.02725C36.9089 4.38083 35.6949 3.87758 34.4342 3.5246L33.6881 0H26.3128L25.5667 3.52555C24.306 3.87853 23.0911 4.38177 21.9443 5.02819L18.9234 3.062L13.8031 8.18233L14.8422 10.6589C14.8025 10.657 14.7647 10.6499 14.725 10.6489C12.8717 10.5951 11.1262 11.2713 9.80028 12.5584C8.47247 13.8447 7.74194 15.5708 7.74194 17.4194V19.3548C7.74194 21.5701 8.84151 23.6487 10.6452 24.9075V25.372L7.98576 26.0369L3.16548 23.2258H0V43.2786L9.52054 46.4516H11.3747L11.6063 45.6408L14.5246 47.3924C14.5724 48.9792 15.8449 50.256 17.4302 50.3117C17.486 51.8904 18.7547 53.1592 20.3334 53.2149C20.3892 54.7937 21.6579 56.0624 23.2367 56.1182C23.2943 57.7337 24.6174 59.0323 26.2462 59.0323C26.8511 59.0323 27.4441 58.8437 27.9426 58.5077L28.7998 59.2647C29.337 59.7377 30.0288 60 30.7471 60H30.9262C32.5365 60 33.8469 58.6982 33.8672 57.093C35.4601 57.0727 36.7501 55.7827 36.7704 54.1898C38.3643 54.1694 39.6552 52.8776 39.6736 51.2837C41.2821 51.2459 42.5806 49.9318 42.5806 48.3143C42.5806 48.217 42.5759 48.1211 42.566 48.0242L60 39.3079V25.1613ZM50.3226 17.6632V19.3548C50.3226 21.0725 49.3945 22.6772 47.9004 23.5424L47.4165 23.8221L47.4203 26.8846L52.2552 28.0924L41.6129 33.6938V31.0868C41.6129 29.7859 41.0874 28.5947 40.227 27.7144L43.5484 26.8846V23.8198L43.0655 23.5405C41.5723 22.6772 40.6452 21.0725 40.6452 19.3548V17.4194C40.6452 16.0996 41.1668 14.8653 42.1152 13.9463C43.0626 13.0277 44.3196 12.5324 45.6337 12.5835C48.2189 12.661 50.3226 14.94 50.3226 17.6632ZM31.4592 32.933L27.0783 31.5329C25.0819 30.8931 22.921 30.7976 20.8773 31.2503L20.3226 31.3732V31.0868C20.3226 29.7524 21.2275 28.5938 22.5213 28.2696L28.0645 26.8846V23.8198L27.5816 23.5405C26.0884 22.6772 25.1613 21.0725 25.1613 19.3548V17.4194C25.1613 16.0996 25.683 14.8653 26.6313 13.9463C27.5788 13.0277 28.8437 12.5324 30.1498 12.5835C32.735 12.661 34.8387 14.94 34.8387 17.6632V19.3548C34.8387 21.0725 33.9107 22.6772 32.4165 23.5424L31.9326 23.8221L31.9364 26.8846L37.4787 28.2696C38.7725 28.5938 39.6774 29.7524 39.6774 31.0868V34.713L39.4383 34.8387H38.8453L32.8957 33.1385C32.4269 33.0058 31.944 32.9514 31.4592 32.933ZM20.5395 14.484C22.3568 10.9627 26.0147 8.70968 30 8.70968C33.9475 8.70968 37.5898 10.9325 39.4208 14.406C38.9601 15.3298 38.7097 16.3529 38.7097 17.4194V19.3548C38.7097 21.5701 39.8093 23.6487 41.6129 24.9075V25.372L37.7419 26.3412L33.87 25.372V24.9085C35.6737 23.6497 36.7742 21.5701 36.7742 19.3548V17.6632C36.7742 13.9037 33.8284 10.7576 30.2079 10.648C28.3556 10.5937 26.6091 11.2703 25.2832 12.5575C23.9563 13.8447 23.2258 15.5708 23.2258 17.4194V19.3548C23.2258 21.5701 24.3254 23.6487 26.129 24.9075V25.372L22.2581 26.3412L18.3862 25.372V24.9085C20.1898 23.6497 21.2903 21.5701 21.2903 19.3548V17.6632C21.2903 16.5244 21.0163 15.4432 20.5395 14.484ZM16.0887 8.63124L19.1805 5.53947L21.9018 7.31051L22.4225 6.99108C23.7272 6.19156 25.1372 5.6061 26.6129 5.25312L27.2083 5.11041L27.8816 1.93548H32.1193L32.7908 5.10947L33.3862 5.2517C34.8619 5.60515 36.2719 6.19062 37.5765 6.99014L38.0973 7.30957L40.8186 5.53853L43.9066 8.62746L42.8089 11.1975C42.0618 11.5189 41.3691 11.9711 40.7661 12.5556C40.7264 12.5943 40.6924 12.6359 40.6537 12.6756C38.3737 9.05132 34.343 6.77419 30 6.77419C25.6258 6.77419 21.5838 9.07258 19.3095 12.7337C18.7009 12.0968 17.9769 11.5808 17.1746 11.2202L16.0887 8.63124ZM12.5806 26.8846V23.8198L12.0977 23.5405C10.6045 22.6772 9.67742 21.0725 9.67742 19.3548V17.4194C9.67742 16.0996 10.1991 14.8653 11.1475 13.9463C12.0949 13.0277 13.3546 12.5324 14.6659 12.5835C17.2511 12.661 19.3548 14.94 19.3548 17.6632V19.3548C19.3548 21.0725 18.4268 22.6772 16.9326 23.5424L16.4488 23.8221L16.4526 26.8846L19.773 27.7144C18.9125 28.5947 18.3871 29.7859 18.3871 31.0868V31.8036L15.3686 32.4746L15.447 32.2006L15.4839 30.412L10.3801 27.4346L12.5806 26.8846ZM1.93548 25.1613H2.64097L9.60087 29.2208L6.08902 43.2677L1.93548 41.8827V25.1613ZM9.8343 44.5161L7.92953 43.8815L11.3412 30.2363L13.5484 31.5234V31.7999L9.91557 44.5161H9.8343ZM16.4516 47.3022C16.4516 47.0168 16.5669 46.737 16.7692 46.5348L18.4703 44.8337C18.6725 44.6314 18.9522 44.5161 19.2376 44.5161C19.8359 44.5161 20.3226 45.0028 20.3226 45.6011C20.3226 45.8865 20.2073 46.1662 20.005 46.3684L18.3039 48.0696C18.1017 48.2718 17.8219 48.3871 17.5365 48.3871C16.9383 48.3871 16.4516 47.9004 16.4516 47.3022ZM19.3548 50.2054C19.3548 49.92 19.4701 49.6402 19.6724 49.438L21.3735 47.7369C21.5757 47.5346 21.8555 47.4194 22.1409 47.4194C22.7391 47.4194 23.2258 47.9061 23.2258 48.5043C23.2258 48.7897 23.1105 49.0694 22.9083 49.2717L21.2072 50.9728C21.0049 51.175 20.7252 51.2903 20.4398 51.2903C19.8415 51.2903 19.3548 50.8036 19.3548 50.2054ZM22.2581 53.1086C22.2581 52.8232 22.3734 52.5435 22.5756 52.3412L24.2767 50.6401C24.479 50.4379 24.7587 50.3226 25.0441 50.3226C25.6423 50.3226 26.129 50.8093 26.129 51.4075C26.129 51.6929 26.0137 51.9727 25.8115 52.1749L24.1104 53.876C23.9081 54.0783 23.6284 54.1935 23.343 54.1935C22.7448 54.1935 22.2581 53.7068 22.2581 53.1086ZM26.2462 57.0968C25.648 57.0968 25.1613 56.6101 25.1613 56.0118C25.1613 55.7264 25.2766 55.4467 25.4788 55.2445L27.1799 53.5433C27.3822 53.3411 27.6619 53.2258 27.9473 53.2258C28.5456 53.2258 29.0323 53.7125 29.0323 54.3107C29.0323 54.5961 28.917 54.8759 28.7147 55.0781L27.0136 56.7792C26.8114 56.9815 26.5316 57.0968 26.2462 57.0968ZM30.9262 58.0645H30.7471C30.5004 58.0645 30.2641 57.9747 30.0803 57.8117L29.3564 57.1733L30.0832 56.4466C30.3426 56.1872 30.5439 55.8786 30.6927 55.5473L31.5726 56.2798C31.8027 56.4716 31.9355 56.7542 31.9355 57.0552C31.9355 57.6118 31.4828 58.0645 30.9262 58.0645ZM39.6046 49.3548H39.4374C39.1945 49.3548 38.9573 49.2688 38.7716 49.1129L33.5237 44.7396L32.2837 46.2272L37.38 50.4733C37.6092 50.6652 37.7419 50.9477 37.7419 51.2487C37.7419 51.8054 37.2892 52.2581 36.7326 52.2581H36.5214C36.2865 52.2581 36.0569 52.1749 35.8759 52.0237L30.6195 47.6438L29.3796 49.1313L34.4758 53.378C34.7059 53.5684 34.8387 53.851 34.8387 54.152C34.8387 54.7086 34.386 55.1613 33.8294 55.1613C33.458 55.1613 33.096 55.0295 32.8111 54.7927L30.6511 52.9924C30.1753 52.0199 29.1976 51.3418 28.0527 51.3012C27.9969 49.7225 26.7282 48.4537 25.1495 48.398C25.0937 46.8192 23.825 45.5505 22.2463 45.4947C22.1895 43.8792 20.8665 42.5806 19.2376 42.5806C18.4424 42.5806 17.6641 42.9029 17.1018 43.4652L15.4007 45.1663C15.2991 45.2679 15.215 45.3832 15.1295 45.4976L12.1568 43.7138L14.7628 34.593L21.296 33.1404C23.0099 32.7572 24.8168 32.8404 26.4882 33.3753L27.9138 33.8313L23.0807 36.2478C21.9764 36.8011 21.2903 37.912 21.2903 39.1472V39.3386C21.2903 41.1262 22.7448 42.5806 24.5324 42.5806C25.1197 42.5806 25.6976 42.4209 26.1999 42.118L29.8034 39.9572C30.5273 39.5234 31.4989 39.6184 32.124 40.1807L40.3007 47.5394C40.5195 47.7378 40.6452 48.0195 40.6452 48.3143C40.6452 48.8885 40.1788 49.3548 39.6046 49.3548ZM58.0645 38.1115L41.7608 46.264C41.7079 46.2078 41.6526 46.1544 41.5945 46.1024L33.4192 38.7437C32.7029 38.0973 31.7767 37.7419 30.8118 37.7419C30.1063 37.7419 29.4136 37.9338 28.8069 38.2976L25.2019 40.4595C24.9997 40.5814 24.7686 40.6452 24.5324 40.6452C23.8113 40.6452 23.2258 40.0597 23.2258 39.3386V39.1472C23.2258 38.6487 23.5027 38.2017 23.9478 37.9791L29.346 35.2801C30.2698 34.8174 31.3666 34.714 32.3622 35.0003L38.4436 36.7373L39.9165 36.7742L58.0645 27.2225V38.1115Z" fill="#080A0B"/>
                           </svg>
                           
                           <span class="number">04</span>
                   </div>

                   <div class="working-process__text text-center">
                       <h6 class="title-animation"><a href="#">Start Working</a></h6>
                       <p class="mb-0">Lorem ipsum dolor sit amecon sectetur
                           adipisicing elit sed do.</p>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- "working-process area end -->

   <!-- "our-team  area start -->
   <section class="our-team section-space">
       <div class="container">
           <div class="row">
               <div class="section__title-wrapper text-center mb-55 mb-xs-40">
                   <span class="section__subtitle justify-content-center ">Our Team</span>
                   <h2 class="section__title title-animation">Meet Our Highly Professional Team</h2>
               </div>
           </div>
           <div class="row mb-minus-30">
               <div class="col-lg-4">
                   <div class="our-team__item">
                       <div class="our-team__item-media wow clip-a-z">
                           <img src="{{asset('Asset/decorVista/assets/imgs/our-team/team-1.jpg')}}" alt="image not found">
                       </div>
                       <div class="our-team__item__text">
                           <h6><a href="#">Daniel Smith</a></h6>
                           <span>Chef Executive </span>
                       </div>

                       <div class="our-team__item__socail">
                           <a href="https://www.facebook.com/">
                               <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M5.19311 16V8.70218H7.55084L7.90457 5.85725H5.19311V4.04118C5.19311 3.21776 5.41238 2.65661 6.55063 2.65661L8 2.65599V0.111384C7.74935 0.0775563 6.88896 0 5.88756 0C3.79647 0 2.36488 1.32557 2.36488 3.75942V5.85725H0V8.70218H2.36488V16H5.19311Z" fill="white"/>
                               </svg>                                    
                           </a>
                           <a href="https://x.com/?lang=en">
                               <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M8.3319 5.92804L13.5437 0H12.3087L7.78327 5.14724L4.16883 0H0L5.46574 7.78354L0 14H1.2351L6.01406 8.56434L9.83117 14H14L8.3319 5.92804ZM6.64026 7.85211L6.08647 7.07705L1.68013 0.909771H3.57717L7.13314 5.88696L7.68693 6.66202L12.3093 13.1316H10.4122L6.64026 7.85211Z" fill="white"/>
                               </svg>
                           </a>
                           <a href="https://www.instagram.com/">
                               <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M12.334 4.66649C12.8863 4.66649 13.334 4.21878 13.334 3.66651C13.334 3.11424 12.8863 2.66654 12.334 2.66654C11.7817 2.66654 11.334 3.11424 11.334 3.66651C11.334 4.21878 11.7817 4.66649 12.334 4.66649Z" fill="white"/>
                                   <path d="M8.00002 3.9999C5.79041 3.9999 4.00002 5.79044 4.00002 7.9998C4.00002 10.2083 5.79041 12.0001 8.00002 12.0001C10.209 12.0001 12 10.2083 12 7.9998C12 5.79044 10.209 3.9999 8.00002 3.9999ZM8.00002 10.6667C6.5274 10.6667 5.33342 9.47278 5.33342 7.9998C5.33342 6.52683 6.5274 5.33327 8.00002 5.33327C9.47264 5.33327 10.6666 6.52683 10.6666 7.9998C10.6666 9.47278 9.47264 10.6667 8.00002 10.6667Z" fill="white"/>
                                   <path d="M12 0H4C1.8002 0 0 1.80015 0 3.9999V12.0001C0 14.1993 1.8002 16 4 16H12C14.1998 16 16 14.1993 16 12.0001V3.9999C16 1.80015 14.1998 0 12 0ZM14.6666 12.0001C14.6666 13.4701 13.4708 14.6666 12 14.6666H4C2.5298 14.6666 1.3334 13.4701 1.3334 12.0001V3.9999C1.3334 2.52955 2.5298 1.33337 4 1.33337H12C13.4708 1.33337 14.6666 2.52955 14.6666 3.9999V12.0001Z" fill="white"/>
                               </svg>                                    
                           </a>
                           <a href="https://bd.linkedin.com/">
                               <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M16 16V10.14C16 7.26 15.38 5.06 12.02 5.06C10.4 5.06 9.32 5.94 8.88 6.78H8.84V5.32H5.66V16H8.98V10.7C8.98 9.3 9.24 7.96 10.96 7.96C12.66 7.96 12.68 9.54 12.68 10.78V15.98H16V16Z" fill="white"/>
                                   <path d="M0.26 5.32H3.58V16H0.26V5.32Z" fill="white"/>
                                   <path d="M1.92 0C0.86 0 0 0.86 0 1.92C0 2.98 0.86 3.86 1.92 3.86C2.98 3.86 3.84 2.98 3.84 1.92C3.84 0.86 2.98 0 1.92 0Z" fill="white"/>
                               </svg>                                                                       
                           </a>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4">
                   <div class="our-team__item">
                       <div class="our-team__item-media wow clip-a-z">
                           <img src="{{asset('Asset/decorVista/assets/imgs/our-team/team-2.jpg')}}" alt="image not found">
                       </div>
                       <div class="our-team__item__text">
                           <h6><a href="#">William Lucas</a></h6>
                           <span>Senior Architect </span>
                       </div>

                       <div class="our-team__item__socail">
                           <a href="https://www.facebook.com/">
                               <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M5.19311 16V8.70218H7.55084L7.90457 5.85725H5.19311V4.04118C5.19311 3.21776 5.41238 2.65661 6.55063 2.65661L8 2.65599V0.111384C7.74935 0.0775563 6.88896 0 5.88756 0C3.79647 0 2.36488 1.32557 2.36488 3.75942V5.85725H0V8.70218H2.36488V16H5.19311Z" fill="white"/>
                               </svg>                                    
                           </a>
                           <a href="https://x.com/?lang=en">
                               <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M8.3319 5.92804L13.5437 0H12.3087L7.78327 5.14724L4.16883 0H0L5.46574 7.78354L0 14H1.2351L6.01406 8.56434L9.83117 14H14L8.3319 5.92804ZM6.64026 7.85211L6.08647 7.07705L1.68013 0.909771H3.57717L7.13314 5.88696L7.68693 6.66202L12.3093 13.1316H10.4122L6.64026 7.85211Z" fill="white"/>
                               </svg>
                           </a>
                           <a href="https://www.instagram.com/">
                               <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M12.334 4.66649C12.8863 4.66649 13.334 4.21878 13.334 3.66651C13.334 3.11424 12.8863 2.66654 12.334 2.66654C11.7817 2.66654 11.334 3.11424 11.334 3.66651C11.334 4.21878 11.7817 4.66649 12.334 4.66649Z" fill="white"/>
                                   <path d="M8.00002 3.9999C5.79041 3.9999 4.00002 5.79044 4.00002 7.9998C4.00002 10.2083 5.79041 12.0001 8.00002 12.0001C10.209 12.0001 12 10.2083 12 7.9998C12 5.79044 10.209 3.9999 8.00002 3.9999ZM8.00002 10.6667C6.5274 10.6667 5.33342 9.47278 5.33342 7.9998C5.33342 6.52683 6.5274 5.33327 8.00002 5.33327C9.47264 5.33327 10.6666 6.52683 10.6666 7.9998C10.6666 9.47278 9.47264 10.6667 8.00002 10.6667Z" fill="white"/>
                                   <path d="M12 0H4C1.8002 0 0 1.80015 0 3.9999V12.0001C0 14.1993 1.8002 16 4 16H12C14.1998 16 16 14.1993 16 12.0001V3.9999C16 1.80015 14.1998 0 12 0ZM14.6666 12.0001C14.6666 13.4701 13.4708 14.6666 12 14.6666H4C2.5298 14.6666 1.3334 13.4701 1.3334 12.0001V3.9999C1.3334 2.52955 2.5298 1.33337 4 1.33337H12C13.4708 1.33337 14.6666 2.52955 14.6666 3.9999V12.0001Z" fill="white"/>
                               </svg>                                    
                           </a>
                           <a href="https://bd.linkedin.com/">
                               <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M16 16V10.14C16 7.26 15.38 5.06 12.02 5.06C10.4 5.06 9.32 5.94 8.88 6.78H8.84V5.32H5.66V16H8.98V10.7C8.98 9.3 9.24 7.96 10.96 7.96C12.66 7.96 12.68 9.54 12.68 10.78V15.98H16V16Z" fill="white"/>
                                   <path d="M0.26 5.32H3.58V16H0.26V5.32Z" fill="white"/>
                                   <path d="M1.92 0C0.86 0 0 0.86 0 1.92C0 2.98 0.86 3.86 1.92 3.86C2.98 3.86 3.84 2.98 3.84 1.92C3.84 0.86 2.98 0 1.92 0Z" fill="white"/>
                               </svg>                                                                       
                           </a>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4">
                   <div class="our-team__item">
                       <div class="our-team__item-media wow clip-a-z">
                           <img src="{{asset('Asset/decorVista/assets/imgs/our-team/team-3.jpg')}}" alt="image not found">
                       </div>
                       <div class="our-team__item__text">
                           <h6><a href="#">Daniel Jack</a></h6>
                           <span>Designer</span>
                       </div>

                       <div class="our-team__item__socail">
                           <a href="https://www.facebook.com/">
                               <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M5.19311 16V8.70218H7.55084L7.90457 5.85725H5.19311V4.04118C5.19311 3.21776 5.41238 2.65661 6.55063 2.65661L8 2.65599V0.111384C7.74935 0.0775563 6.88896 0 5.88756 0C3.79647 0 2.36488 1.32557 2.36488 3.75942V5.85725H0V8.70218H2.36488V16H5.19311Z" fill="white"/>
                               </svg>                                    
                           </a>
                           <a href="https://x.com/?lang=en">
                               <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M8.3319 5.92804L13.5437 0H12.3087L7.78327 5.14724L4.16883 0H0L5.46574 7.78354L0 14H1.2351L6.01406 8.56434L9.83117 14H14L8.3319 5.92804ZM6.64026 7.85211L6.08647 7.07705L1.68013 0.909771H3.57717L7.13314 5.88696L7.68693 6.66202L12.3093 13.1316H10.4122L6.64026 7.85211Z" fill="white"/>
                               </svg>
                           </a>
                           <a href="https://www.instagram.com/">
                               <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M12.334 4.66649C12.8863 4.66649 13.334 4.21878 13.334 3.66651C13.334 3.11424 12.8863 2.66654 12.334 2.66654C11.7817 2.66654 11.334 3.11424 11.334 3.66651C11.334 4.21878 11.7817 4.66649 12.334 4.66649Z" fill="white"/>
                                   <path d="M8.00002 3.9999C5.79041 3.9999 4.00002 5.79044 4.00002 7.9998C4.00002 10.2083 5.79041 12.0001 8.00002 12.0001C10.209 12.0001 12 10.2083 12 7.9998C12 5.79044 10.209 3.9999 8.00002 3.9999ZM8.00002 10.6667C6.5274 10.6667 5.33342 9.47278 5.33342 7.9998C5.33342 6.52683 6.5274 5.33327 8.00002 5.33327C9.47264 5.33327 10.6666 6.52683 10.6666 7.9998C10.6666 9.47278 9.47264 10.6667 8.00002 10.6667Z" fill="white"/>
                                   <path d="M12 0H4C1.8002 0 0 1.80015 0 3.9999V12.0001C0 14.1993 1.8002 16 4 16H12C14.1998 16 16 14.1993 16 12.0001V3.9999C16 1.80015 14.1998 0 12 0ZM14.6666 12.0001C14.6666 13.4701 13.4708 14.6666 12 14.6666H4C2.5298 14.6666 1.3334 13.4701 1.3334 12.0001V3.9999C1.3334 2.52955 2.5298 1.33337 4 1.33337H12C13.4708 1.33337 14.6666 2.52955 14.6666 3.9999V12.0001Z" fill="white"/>
                               </svg>                                    
                           </a>
                           <a href="https://bd.linkedin.com/">
                               <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M16 16V10.14C16 7.26 15.38 5.06 12.02 5.06C10.4 5.06 9.32 5.94 8.88 6.78H8.84V5.32H5.66V16H8.98V10.7C8.98 9.3 9.24 7.96 10.96 7.96C12.66 7.96 12.68 9.54 12.68 10.78V15.98H16V16Z" fill="white"/>
                                   <path d="M0.26 5.32H3.58V16H0.26V5.32Z" fill="white"/>
                                   <path d="M1.92 0C0.86 0 0 0.86 0 1.92C0 2.98 0.86 3.86 1.92 3.86C2.98 3.86 3.84 2.98 3.84 1.92C3.84 0.86 2.98 0 1.92 0Z" fill="white"/>
                               </svg>                                                                       
                           </a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- "our-team  area end -->

   <!-- "happy-customer  area start -->
   {{-- <section class="happy-customer section-space happy-customer__bottom-space" data-background="{{asset('Asset/decorVista/assets/imgs/testimonial/testimonial.jpg')}}">
       <div class="container">
           <div class="row">
               <div class="section__title-wrapper text-center mb-55 mb-xs-40">
                   <span class="section__subtitle justify-content-center">Testimonial</span>
                   <h2 class="section__title text-white mb-20 title-animation">Our Happy Customer</h2>
                   <p class="mb-0 font-weight-300">Which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.</p>
               </div>
           </div>
       </div>
   </section> --}}
   <!-- "happy-customer  area end -->

   <!-- "testimonial  area start -->
   {{-- <section class="testimonial testimonial__bottom-space">
       <div class="container">
           <div class="swiper testimonial__slider">
               <div class="swiper-wrapper">
                   <div class="swiper-slide ">
                       <div class="testimonial__item wow clip-a-z">
                           <div class="testimonial__item-wrapper mb-35">
                               <div class="testimonial__item__author">
                                   <div class="icon">
                                       <img src="{{asset('Asset/decorVista/assets/imgs/testimonial/qotetion.svg')}}" alt="image not found">
                                   </div>
                                   <img src="{{asset('Asset/decorVista/assets/imgs/testimonial/author-1.png')}}" alt="image not found">
                               </div>
                               <div class="testimonial__item__text">
                                   <h6>Aurther Maxwell</h6>
                                   <span> Soft business llc.</span>
                               </div>
                           </div>
               
                           <p class="mb-0">We are an architecture firm with a focus on beautiful but functional design. At its  heart, we believe design is about usability and these are the guiding principles for our work. Read our projects and process.</p>
               
                           <div class="testimonial__item-bottom">
                               <div class="testimonial__item__logo">
                                   <img src="{{asset('Asset/decorVista/assets/imgs/testimonial/logo.png')}}" alt="imgs not found">
                               </div>
               
                               <ul class="testimonial__item__rating">
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="swiper-slide ">
                       <div class="testimonial__item wow clip-a-z">
                           <div class="testimonial__item-wrapper mb-35">
                               <div class="testimonial__item__author">
                                   <div class="icon">
                                       <img src="{{asset('Asset/decorVista/assets/imgs/testimonial/qotetion.svg')}}" alt="image not found">
                                   </div>
                                   <img src="{{asset('Asset/decorVista/assets/imgs/testimonial/author-2.png')}}" alt="image not found">
                               </div>
                               <div class="testimonial__item__text">
                                   <h6>Helena Martine</h6>
                                   <span> Soft business llc.</span>
                               </div>
                           </div>
               
                           <p class="mb-0">We are an architecture firm with a focus on beautiful but functional design. At its  heart, we believe design is about usability and these are the guiding principles for our work. Read our projects and process.</p>
               
                           <div class="testimonial__item-bottom">
                               <div class="testimonial__item__logo">
                                   <img src="{{asset('Asset/decorVista/assets/imgs/testimonial/logo.png')}}" alt="imgs not found">
                               </div>
               
                               <ul class="testimonial__item__rating">
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="swiper-slide ">
                       <div class="testimonial__item wow clip-a-z">
                           <div class="testimonial__item-wrapper mb-35">
                               <div class="testimonial__item__author">
                                   <div class="icon">
                                       <img src="{{asset('Asset/decorVista/assets/imgs/testimonial/qotetion.svg')}}" alt="image not found">
                                   </div>
                                   <img src="{{asset('Asset/decorVista/assets/imgs/testimonial/author-3.png')}}" alt="image not found">
                               </div>
                               <div class="testimonial__item__text">
                                   <h6>Travis Head</h6>
                                   <span> Soft business llc.</span>
                               </div>
                           </div>
               
                           <p class="mb-0">We are an architecture firm with a focus on beautiful but functional design. At its  heart, we believe design is about usability and these are the guiding principles for our work. Read our projects and process.</p>
               
                           <div class="testimonial__item-bottom">
                               <div class="testimonial__item__logo">
                                   <img src="{{asset('Asset/decorVista/assets/imgs/testimonial/logo.png')}}" alt="imgs not found">
                               </div>
               
                               <ul class="testimonial__item__rating">
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section> {{-- <section class="testimonial testimonial__bottom-space">
       <div class="container">
           <div class="swiper testimonial__slider">
               <div class="swiper-wrapper">
                   <div class="swiper-slide ">
                       <div class="testimonial__item wow clip-a-z">
                           <div class="testimonial__item-wrapper mb-35">
                               <div class="testimonial__item__author">
                                   <div class="icon">
                                       <img src="{{asset('Asset/decorVista/assets/imgs/testimonial/qotetion.svg')}}" alt="image not found">
                                   </div>
                                   <img src="{{asset('Asset/decorVista/assets/imgs/testimonial/author-1.png')}}" alt="image not found">
                               </div>
                               <div class="testimonial__item__text">
                                   <h6>Aurther Maxwell</h6>
                                   <span> Soft business llc.</span>
                               </div>
                           </div>
               
                           <p class="mb-0">We are an architecture firm with a focus on beautiful but functional design. At its  heart, we believe design is about usability and these are the guiding principles for our work. Read our projects and process.</p>
               
                           <div class="testimonial__item-bottom">
                               <div class="testimonial__item__logo">
                                   <img src="{{asset('Asset/decorVista/assets/imgs/testimonial/logo.png')}}" alt="imgs not found">
                               </div>
               
                               <ul class="testimonial__item__rating">
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="swiper-slide ">
                       <div class="testimonial__item wow clip-a-z">
                           <div class="testimonial__item-wrapper mb-35">
                               <div class="testimonial__item__author">
                                   <div class="icon">
                                       <img src="{{asset('Asset/decorVista/assets/imgs/testimonial/qotetion.svg')}}" alt="image not found">
                                   </div>
                                   <img src="{{asset('Asset/decorVista/assets/imgs/testimonial/author-2.png')}}" alt="image not found">
                               </div>
                               <div class="testimonial__item__text">
                                   <h6>Helena Martine</h6>
                                   <span> Soft business llc.</span>
                               </div>
                           </div>
               
                           <p class="mb-0">We are an architecture firm with a focus on beautiful but functional design. At its  heart, we believe design is about usability and these are the guiding principles for our work. Read our projects and process.</p>
               
                           <div class="testimonial__item-bottom">
                               <div class="testimonial__item__logo">
                                   <img src="{{asset('Asset/decorVista/assets/imgs/testimonial/logo.png')}}" alt="imgs not found">
                               </div>
               
                               <ul class="testimonial__item__rating">
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="swiper-slide ">
                       <div class="testimonial__item wow clip-a-z">
                           <div class="testimonial__item-wrapper mb-35">
                               <div class="testimonial__item__author">
                                   <div class="icon">
                                       <img src="{{asset('Asset/decorVista/assets/imgs/testimonial/qotetion.svg')}}" alt="image not found">
                                   </div>
                                   <img src="{{asset('Asset/decorVista/assets/imgs/testimonial/author-3.png')}}" alt="image not found">
                               </div>
                               <div class="testimonial__item__text">
                                   <h6>Travis Head</h6>
                                   <span> Soft business llc.</span>
                               </div>
                           </div>
               
                           <p class="mb-0">We are an architecture firm with a focus on beautiful but functional design. At its  heart, we believe design is about usability and these are the guiding principles for our work. Read our projects and process.</p>
               
                           <div class="testimonial__item-bottom">
                               <div class="testimonial__item__logo">
                                   <img src="{{asset('Asset/decorVista/assets/imgs/testimonial/logo.png')}}" alt="imgs not found">
                               </div>
               
                               <ul class="testimonial__item__rating">
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                                   <li><img src="{{asset('Asset/decorVista/assets/imgs/testimonial/star.svg')}}" alt=""></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section> --}}
   <!-- "testimonial  area end -->

   <!-- brand area start -->
   <section class="brand brand__space">
       <div class="container">
           <div class="slider-brand">
               <div class="container">
                   <div class="rr-scroller" data-speed="slow">
                       <ul class="text-anim rr-scroller__inner">
                           <li><a href="#"><img src="{{asset('Asset/decorVista/assets/imgs/brand/brand-1.png')}}" alt="image not found"></a></li>
                           <li><a href="#"><img src="{{asset('Asset/decorVista/assets/imgs/brand/brand-2.png')}}" alt="image not found"></a></li>
                           <li><a href="#"><img src="{{asset('Asset/decorVista/assets/imgs/brand/brand-4.png')}}" alt="image not found"></a></li>
                           <li><a href="#"><img src="{{asset('Asset/decorVista/assets/imgs/brand/brand-5.png')}}" alt="image not found"></a></li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- brand area end -->

   <!-- blog area start -->
   <section class="blog section-space">
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
                   <div class="blog__item">
                       <a class="blog__item-media d-lg-block wow clip-a-z" href="#">
                        @if (!empty($blog->image))
                        <img src="{{ asset('uploads/Blog/large/' . $blog->image) }}" alt="image not found">
                        @else
                        <img src="{{ asset('Asset/Admin/img/default.png') }}" alt="image not found">

                            
                        @endif
                       </a>

                       <div class="blog__item__content">
                           <ul class="blog__item-meta d-flex flex-wrap mb-10">
                               <li>{{ \Carbon\Carbon::parse($blog->created_at)->format('M,d, Y') }} </li>
                               
                           </ul>
                           <h6><a href="#">{{ $blog->title }}</a></h6>
                       </div>
                   </div>
               </div>
            @endforeach
                
            @endif
              
               
           </div>
       </div>
   </section> 
   
   <!-- blog area start -->
</main>
<div style="margin-top: 140px " class="footer__top">
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
</div>

@endsection