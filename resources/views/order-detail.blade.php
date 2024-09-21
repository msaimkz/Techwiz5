@extends('master');
@section('content')
    <main>
        <!-- Breadcrumb area start  -->
        <div style="margin-top: -29px"
            class="breadcrumb__area header__background-color breadcrumb__header-up breadcrumb-space overly overflow-hidden">
            <div class="breadcrumb__background"
                data-background="{{ asset('Asset/decorVista/assets/imgs/breadcrumb/page-header-1.png') }}"></div>
            <div class="container">
                <div class="breadcrumb__bg-left"></div>
                <div class="breadcrumb__bg-right"></div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-12">
                        <div style="margin-top: 100px;" class="breadcrumb__content text-center">
                            <h2 class="breadcrumb__title mb-15 mb-sm-10 mb-xs-5 color-white title-animation">Order Details
                            </h2>

                            <div class="breadcrumb__menu">
                                <nav>
                                    <ul>
                                        <li><span><a href="index.html">Home</a></span></li>
                                        <li class="active"><span>Order Details</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area start  -->
        <div class="order-button">
            <a href="#" class="download-pdf-button gear-button">Download PDF</a>
        </div>
        <section style=" font-family:'jost', sans-serif;position: relative;" class=" section-11 Order-detail-container">
            <div class="container  mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div style="border-bottom: 2px solid #fff;" class="card-header nigth-card-header">
                                <h2 style="color: #685642;" class=" mb-0 pt-2 pb-2 Order-detail-title nav-nigth">My Orders
                                </h2>
                            </div>

                            <div class="card-body pb-0 ">
                                <!-- Info -->
                                <div class="card card-sm">
                                    <div class="card-body  mb-3">
                                        <div class="row">
                                            <div class="col-6 col-lg-3 order-detail-top">
                                                <!-- Heading -->
                                                <h6 class="nav-nigth">Order No:</h6>
                                                <!-- Text -->
                                                <p class="mb-lg-0 nav-nigth">
                                                    1
                                                </p>
                                            </div>
                                            <div class="col-6 col-lg-3 order-detail-top">
                                                <!-- Heading -->
                                                <h6 class="nav-nigth">Shipped date:</h6>
                                                <!-- Text -->
                                                <p class="mb-lg-0 nav-nigth">
                                                    <time datetime="2019-10-01" class="nav-nigth">n/a</time>
                                                </p>
                                            </div>
                                            <div class="col-6 col-lg-3 order-detail-top">
                                                <!-- Heading -->
                                                <h6 class="nav-nigth">Status:</h6>
                                                <!-- Text -->
                                                <p class="mb-0">

                                                    <span class="badge bg-danger">Pending</span>
                                                    {{--             
                                            <span class="badge bg-info">Shipped</span>
                                  
                                            <span class="badge bg-success">Delivered</span>
                                          
                                            <span class="badge bg-danger">Cancelled</span> --}}

                                                </p>
                                            </div>
                                            <div class="col-6 col-lg-3 order-detail-top">
                                                <!-- Heading -->
                                                <h6 class="nav-nigth">Order Amount:</h6>
                                                <!-- Text -->
                                                <p class="mb-0 nav-nigth">$120</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer p-3">

                                <!-- Heading -->
                                <h6 style="font-size: 28px; font-family: 'DM Sans';color: 5e5348"
                                    class="mb-7 order-main-title mt-4 nav-nigth">Order Items 1</h6>

                                <!-- Divider -->
                                <hr class="my-3">

                                <!-- List group -->
                                <ul>
                                    <li style="position:relative;display:block;padding:.5rem 1rem;color:#212529;background-color:#fff;border:1px solid rgba(0,0,0,0.125)"
                                        class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-4 col-md-3 col-xl-2">
                                                <!-- Image -->
                                                <a href="product.html"><img
                                                        src="{{ asset('Asset/decorVista/assets/imgs/blog-2/blog-1.jpg') }}"
                                                        alt="..." class="img-fluid order-img">
                                                </a>
                                            </div>
                                            <div class="col">
                                                <!-- Title -->
                                                <p class="mb-4 fs-sm fw-bold order-text">
                                                    <a class="text-body nav-nigth" href="product.html">Interior x
                                                        1</a>
                                                    <br>
                                                    <span class="text-muted nav-nigth">$450.00</span>
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="card card-lg mb-5 mt-3">
                            <div class="card-body">
                                <!-- Heading -->
                                <h6 style="font-size: 28px; font-family: 'DM Sans';color5e5348"
                                    class="mt-0 mb-3 order-main-title nav-nigth">Order Total</h6>
                                <!-- Divider -->
                                <hr class="my-3">
                                <!-- List group -->
                                <ul style="line-height: 46px;">
                                    <li style="font-size: 23px;" class="list-group-item d-flex order-sub-title">
                                        <span class="nav-nigth">Subtotal</span>
                                        <span class="ms-auto nav-nigth">$450</span>
                                    </li>
                                    <!-- Divider -->
                                    <hr class="my-3">
                                    <li style="font-size: 23px;" class="list-group-item d-flex order-sub-title">
                                        <span class="nav-nigth">Discount</span>
                                        <span class="ms-auto nav-nigth">$120</span>
                                    </li>
                                    <!-- Divider -->
                                    <hr class="my-3">
                                    <li style="font-size: 23px;" class="list-group-item d-flex order-sub-title">
                                        <span class="nav-nigth">Shipping</span>
                                        <span class="ms-auto nav-nigth">$150</span>
                                    </li>
                                    <!-- Divider -->
                                    <hr class="my-1">
                                    <li style="font-size: 23px;"
                                        class="list-group-item d-flex order-sub-title fs-lg fw-bold">
                                        <span class="nav-nigth">Total</span>
                                        <span class="ms-auto nav-nigth">$150</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="order-button">
        <a href="javascript:void(0)" onclick="CancelOrder('{{$order->id}}')" class="download-cancel-button gear-button">Cancel Order</a>
    </div> --}}

        </section>
    </main>
@endsection
