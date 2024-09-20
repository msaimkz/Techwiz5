@extends('master');
@section('content')

<main>
    <!-- Breadcrumb area start  -->
    <div style="margin-top: -29px"
        class="breadcrumb__area header__background-color breadcrumb__header-up breadcrumb-space overly overflow-hidden">
        <div class="breadcrumb__background"
            data-background="{{asset('Asset/decorVista/assets/imgs/breadcrumb/page-header-1.png')}}"></div>
        <div class="container">
            <div class="breadcrumb__bg-left"></div>
            <div class="breadcrumb__bg-right"></div>
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div style="margin-top: 100px;" class="breadcrumb__content text-center">
                        <h2 class="breadcrumb__title mb-15 mb-sm-10 mb-xs-5 color-white title-animation">Gallery</h2>

                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="{{route('Front.index')}}">Home</a></span></li>
                                    <li class="active"><span>Gallery</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area start  -->

    <section class="protfolio section-space__top">
        <div class="container">
            {{-- <div class="protfolio__tab masonary-menu">
                <button data-filter="*" class="active">All </button>
                <button data-filter=".architecture">architecture</button>
                <button data-filter=".commercial">Commercial</button>
                <button data-filter=".corporate">Corporate</button>
                <button data-filter=".interior">Interior</button>
                <button data-filter=".residential">Residential</button>
            </div> --}}

            <div class="protfolio__item-wrapper">
                <div class="row grid mb-minus-30">
                    @if (!empty('$galleries'))
                    @foreach ($galleries as $gallery )
                    @php
                    $img = $gallery->images->first()
                    @endphp
                    <div class="col-lg-4 col-sm-6 grid-item corporate interior">
                        <div class="protfolio__item">
                            <div class="protfolio__item-media ">
                                @if (!empty($img->image))
                                <img src="{{ asset('uploads/gallery/large/' . $img->image) }}"
                                class="img-fluid" alt="image not found">
                                @endif
                                
                            </div>
                            @if (!empty($gallery->images))
                            @foreach ($gallery->images as $Galleryimage )
                                <a href="{{ asset('uploads/gallery/small/' . $Galleryimage->image) }}"
                            @endforeach
                                
                            @endif
                            
                                class="protfolio__item-icon popup-image">
                                <svg width="54" height="54" viewBox="0 0 54 54" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27 2V52" stroke="white" stroke-width="4" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M2 27H52" stroke="white" stroke-width="4" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                            <div class="protfolio__item-text">

                               
                                <h6>{{ $gallery->subcategory->name }}</h6>

                            </div>
                        </div>
                    </div>
                    @endforeach

                    @endif

                   
                </div>
    </section>

    <!-- brand area start -->
    <section class="brand section-space has--transparent">
        <div class="container">
            <div class="slider-brand">
                <div class="container">
                    <div class="rr-scroller" data-speed="slow">
                        <ul class="text-anim rr-scroller__inner">
                            <li><a href="#"><img src="{{asset('Asset/decorVista/assets/imgs/brand-2/brand-1.png')}}"
                                        alt="image not found"></a></li>
                            <li><a href="#"><img src="{{asset('Asset/decorVista/assets/imgs/brand-2/brand-2.png')}}"
                                        alt="image not found"></a></li>
                            <li><a href="#"><img src="{{asset('Asset/decorVista/assets/imgs/brand-2/brand-4.png')}}"
                                        alt="image not found"></a></li>
                            <li><a href="#"><img src="{{asset('Asset/decorVista/assets/imgs/brand-2/brand-1.png')}}"
                                        alt="image not found"></a></li>
                            <li><a href="#"><img src="{{asset('Asset/decorVista/assets/imgs/brand-2/brand-2.png')}}"
                                        alt="image not found"></a></li>
                            <li><a href="#"><img src="{{asset('Asset/decorVista/assets/imgs/brand-2/brand-4.png')}}"
                                        alt="image not found"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- brand area end -->
</main>

@endsection