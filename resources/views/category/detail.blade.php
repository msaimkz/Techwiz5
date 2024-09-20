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
                        <h2 class="breadcrumb__title mb-15 mb-sm-10 mb-xs-5 color-white title-animation">
                            {{ $category->name }}</h2>

                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="{{route('Front.index')}}">Home</a></span></li>
                                    <li class="active"><span>{{ $category->name }}</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area start  -->

    <section class="our-featured-service background-gay  section-space">
        <div class="1">
            <div class="container">
                <div class="row mb-minus-30">
                    @if (!empty($galleries))
                    @foreach ($galleries as $gallery)
                    @php
                    $img = $gallery->images->first()
                    @endphp
                    <div class=" col-md-6 col-lg-4 col-xl-3">
                        <div class="our-featured-service__item">
                            <div class="our-featured-service__media wow clip-a-z">
                                @if (!empty($img))
                                <img src="{{ asset('uploads/gallery/large/' . $img->image) }}"
                                alt="image not found">
                                @endif
                                
                            </div>
                            <div class="our-featured-service__content">
                                <div class="our-featured-service__text">
                                    <h6 class="title-animation">{{ $gallery->subcategory->name }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @endif



                </div>
            </div>
        </div>


        </div>


    </section>


 
</main>

@endsection