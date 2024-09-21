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
                    <h2 class="breadcrumb__title mb-15 mb-sm-10 mb-xs-5 color-white title-animation">booking</h2>

                    <div class="breadcrumb__menu">
                        <nav>
                            <ul>
                                <li><span><a href="index.html">Home</a></span></li>
                                <li  class="active"><span>Booking</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb area start  -->



<section style="padding: 46px 0px;margin-top: 45px;" class="section-9 pt-4">
    <div class="container">
        <form action="" method="post" id="OrderForm" name="OrderForm">
            <div class="row" id="checkout-row">
                <div class="col-md-8" id="checkout-col-1">
                    <div class="sub-title">
                        {{-- <h2 style="color: #5a4a3d; margin-bottom: 10px" id="checkout-title" class="nav-nigth">Booking</h2> --}}
                    </div>
                    <div class="card  border-0">
                        <div class="card-body checkout-form">
                            <div class="row checkout-input-container">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input style="border: 1px solid black; outline: none; box-shadow: none;" type="text" name="first_name" id="first_name" class="form-control"
                                            placeholder="First Name"
                                            value="">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input style="border: 1px solid black; outline: none; box-shadow: none;" type="text" name="last_name" id="last_name" class="form-control"
                                            placeholder="Last Name"
                                            value="">
                                        <p></p>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <input style="border: 1px solid black; outline: none; box-shadow: none;" type="text" name="email" id="email" class="form-control"
                                            placeholder="Email" value="">
                                        <p></p>
                                    </div>
                                </div>



                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <textarea style="border: 1px solid black; outline: none; box-shadow: none;" name="address" id="address" cols="30" rows="3"
                                            placeholder="Address"
                                            class="form-control"></textarea>
                                        <p></p>
                                    </div>
                                </div>

                              
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <textarea style="border: 1px solid black; outline: none; box-shadow: none;" name="address" id="address" cols="30" rows="3"
                                            placeholder="Appointment"
                                            class="form-control"></textarea>
                                        <p></p>
                                    </div>
                                </div>
                               
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <input style="border: 1px solid black; outline: none; box-shadow: none;" type="text" name="mobile" id="mobile" class="form-control"
                                            placeholder="City"
                                            value="">
                                        <p></p>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <textarea style="border: 1px solid black; outline: none; box-shadow: none;" name="order_notes" id="order_notes" cols="30" rows="2"
                                            placeholder="Mobile No." class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="pt-4">
                                    <button style="padding: 19px 29px;font-size: 21px;" type="submit" class="rr-btn">
                                        <span class="btn-wrap">
                                            <span class="text-one">Book Now
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 6H11" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6 1L11 6L6 11" stroke="white" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            <span class="text-two">Book Now
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 6H11" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6 1L11 6L6 11" stroke="white" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </span>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- CREDIT CARD FORM ENDS HERE -->

            </div>
        </form>
    </div>
    </div>
</section>
</main>
@endsection