@extends('master');
@section('content')

<main>
    @include('Message.message')
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
                        <h2 class="breadcrumb__title mb-15 mb-sm-10 mb-xs-5 color-white title-animation">Checkout Page
                        </h2>

                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="{{route('Front.index')}}">Home</a></span></li>
                                    <li class="active"><span>Checkout Page</span></li>
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
                            <h2 id="checkout-title" class="nav-nigth">Shipping Address</h2>
                        </div>
                        <div class="card  border-0">
                            <div class="card-body checkout-form">
                                <div class="row checkout-input-container">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <input style="border: 1px solid black; outline: none; box-shadow: none;"
                                                type="text" name="first_name" id="first_name" class="form-control"
                                                placeholder="First Name" value="{{ ($Customers) ? $Customers->first_name : '' }}">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <input style="border: 1px solid black; outline: none; box-shadow: none;"
                                                type="text" name="last_name" id="last_name" class="form-control"
                                                placeholder="Last Name" value="{{ ($Customers) ? $Customers->last_name : '' }}">
                                            <p></p>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <input style="border: 1px solid black; outline: none; box-shadow: none;"
                                                type="text" name="email" id="email" class="form-control"
                                                placeholder="Email" value="{{ ($Customers) ? $Customers->email : '' }}">
                                            <p></p>
                                        </div>
                                    </div>



                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <textarea style="border: 1px solid black; outline: none; box-shadow: none;"
                                                name="address" id="address" cols="30" rows="3" placeholder="Address"
                                                class="form-control">{{ ($Customers) ? $Customers->address : '' }}</textarea>
                                            <p></p>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <input style="border: 1px solid black; outline: none; box-shadow: none;"
                                                type="text" name="apartment" id="apartment" class="form-control"
                                                placeholder="Apartment, suite, unit, etc. (optional)" value="{{ ($Customers) ? $Customers->apartment : '' }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <input style="border: 1px solid black; outline: none; box-shadow: none;"
                                                type="text" name="city" id="city" class="form-control"
                                                placeholder="City" value="{{ ($Customers) ? $Customers->city : '' }}">
                                            <p></p>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <input style="border: 1px solid black; outline: none; box-shadow: none;"
                                                type="text" name="state" id="state" class="form-control"
                                                placeholder="State" value="{{ ($Customers) ? $Customers->state : '' }}">
                                            <p></p>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <input style="border: 1px solid black; outline: none; box-shadow: none;"
                                                type="text" name="zip" id="zip" class="form-control" placeholder="Zip"
                                                value="{{ ($Customers) ? $Customers->zip : '' }}">
                                            <p></p>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <input style="border: 1px solid black; outline: none; box-shadow: none;"
                                                type="text" name="mobile" id="mobile" class="form-control"
                                                placeholder="Mobile No." value="{{ ($Customers) ? $Customers->mobile : '' }}">
                                            <p></p>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <textarea style="border: 1px solid black; outline: none; box-shadow: none;"
                                                name="order_notes" id="order_notes" cols="30" rows="2"
                                                placeholder="Order Notes (optional)" class="form-control"></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" id="checkout-col-2">
                        <div class="sub-title">
                            <h2 id="checkout-title" class="nav-nigth">Order Summery</h3>
                        </div>
                        <div class="card cart-summery">
                            <div class="card-body">
                                @foreach(Cart::content() as $item)
                                <div class="d-flex justify-content-between summery-end">
                                    <div class="h6 nav-nigth"><strong>{{ $item->name }} X {{ $item->qty }}</strong>
                                    </div>
                                    <div class="h5 nav-nigth"><strong>${{  $item->price * $item->qty }}</strong></div>
                                </div>
                                @endforeach




                                <div class="d-flex justify-content-between mt-2 summery-end">
                                    <div class="h6 nav-nigth"><strong>Total</strong></div>
                                    <div class="h5 nav-nigth"><strong
                                            id="grand-total">${{ Cart::subtotal(2,'.',',') }}</strong>
                                    </div>
                                </div>


                            </div>
                        </div>





                        <div class="pt-4">
                            <button style="padding: 19px 29px;font-size: 21px;margin-left: 119px;" type="submit"
                                class="rr-btn" id="pay">
                                <span class="btn-wrap">
                                    <span class="text-one">Pay Now
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 6H11" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M6 1L11 6L6 11" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="text-two">Pay Now
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


                    <!-- CREDIT CARD FORM ENDS HERE -->

                </div>
            </form>
        </div>
        </div>
    </section>
</main>
@endsection

@section('js')
<script>
$("#OrderForm").submit(function(event) {
    event.preventDefault()
    var element = $(this)
    $('#pay').prop('disabled', true)
    $.ajax({
        url: '{{route("Proceed")}}',
        type: 'post',
        data: element.serializeArray(),
        dataType: 'json',
        success: function(response) {
            $('#pay').prop('disabled', false)
            if (response.status == true) {


                window.location.href = "{{route('Front.cart') }}"


            } else {
                var error = response.errors
                if (error['first_name']) {
                    $('#first_name').addClass('is-invalid').siblings('p').addClass(
                            'invalid-feedback')
                        .html(error['first_name'])
                } else {
                    $('#first_name').removeClass('is-invalid').siblings('p').removeClass(
                        'invalid-feedback').html('')
                }

                if (error['last_name']) {
                    $('#last_name').addClass('is-invalid').siblings('p').addClass(
                            'invalid-feedback')
                        .html(error['last_name'])
                } else {
                    $('#last_name').removeClass('is-invalid').siblings('p').removeClass(
                        'invalid-feedback').html('')
                }

                if (error['email']) {
                    $('#email').addClass('is-invalid').siblings('p').addClass('invalid-feedback')
                        .html(error['email'])
                } else {
                    $('#email').removeClass('is-invalid').siblings('p').removeClass(
                        'invalid-feedback').html('')
                }

                

                if (error['address']) {
                    $('#address').addClass('is-invalid').siblings('p').addClass('invalid-feedback')
                        .html(error['address'])
                } else {
                    $('#address').removeClass('is-invalid').siblings('p').removeClass(
                        'invalid-feedback').html('')
                }

                if (error['city']) {
                    $('#city').addClass('is-invalid').siblings('p').addClass('invalid-feedback')
                        .html(error['city'])
                } else {
                    $('#city').removeClass('is-invalid').siblings('p').removeClass(
                        'invalid-feedback').html('')
                }

                if (error['state']) {
                    $('#state').addClass('is-invalid').siblings('p').addClass('invalid-feedback')
                        .html(error['state'])
                } else {
                    $('#state').removeClass('is-invalid').siblings('p').removeClass(
                        'invalid-feedback').html('')
                }

                if (error['zip']) {
                    $('#zip').addClass('is-invalid').siblings('p').addClass('invalid-feedback')
                        .html(error['zip'])
                } else {
                    $('#zip').removeClass('is-invalid').siblings('p').removeClass(
                        'invalid-feedback').html('')
                }

                if (error['mobile']) {
                    $('#mobile').addClass('is-invalid').siblings('p').addClass('invalid-feedback')
                        .html(error['mobile'])
                } else {
                    $('#mobile').removeClass('is-invalid').siblings('p').removeClass(
                        'invalid-feedback').html('')
                }



            }
        },
    })

})
</script>

@endsection