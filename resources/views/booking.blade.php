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
                        <h2 class="breadcrumb__title mb-15 mb-sm-10 mb-xs-5 color-white title-animation">booking</h2>

                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="index.html">Home</a></span></li>
                                    <li class="active"><span>Booking</span></li>
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
            <form action="" method="post" id="BookingForm" name="BookingForm">
                <div class="row" id="checkout-row">
                    <div class="col-md-8" id="checkout-col-1">
                        <div class="sub-title">
                            {{-- <h2 style="color: #5a4a3d; margin-bottom: 10px" id="checkout-title" class="nav-nigth">Booking</h2> --}}
                        </div>
                        <div class="card  border-0">
                            <div class="card-body checkout-form">
                                <div class="row checkout-input-container">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <input style="border: 1px solid black; outline: none; box-shadow: none;"
                                                type="text" name="first_name" id="first_name" class="form-control"
                                                placeholder="Name" value="{{ $user->name }}" required>
                                            <p></p>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <input style="border: 1px solid black; outline: none; box-shadow: none;"
                                                type="text" name="email" id="email" class="form-control"
                                                placeholder="Email" value="{{ $user->email }}" required>
                                            <p></p>
                                        </div>
                                    </div>



                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <input style="border: 1px solid black; outline: none; box-shadow: none;"
                                                type="text" name="mobile" id="mobile" class="form-control"
                                                placeholder="Mobile" value="{{ $user->contact }}" required>
                                            <p></p>
                                        </div>
                                    </div>




                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <select name="day" id="day" class="form-select" data-id="{{ $user_id }}"
                                                style="border: 1px solid black; outline: none; box-shadow: none;"
                                                >
                                                <option value="" selected disabed>Select Days</option>
                                                @foreach ($consaltations as $consultation)
                                                <option value="{{ $consultation->days }}" style="color:black;">
                                                    {{ $consultation->days }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>





                                </div>



                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <select name="time" id="time" class="form-select"
                                            style="border: 1px solid black; outline: none; box-shadow: none;" >
                                            <option value="" selected disabed>Select Slots</option>
                                        </select>
                                        <p></p>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <textarea style="border: 1px solid black; outline: none; box-shadow: none;"
                                            name="address" id="address" cols="30" rows="3" placeholder="Address"
                                            class="form-control"></textarea>
                                        <p></p>
                                    </div>
                                </div>






                                <div class="pt-4">
                                    <button style="padding: 19px 29px;font-size: 21px;" type="submit" class="rr-btn">
                                        <span class="btn-wrap">
                                            <span class="text-one">Book Now
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 6H11" stroke="white" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M6 1L11 6L6 11" stroke="white" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            <span class="text-two">Book Now
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 6H11" stroke="white" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
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


@section('js')

<script>
$('#day').change(function() {

    $.ajax({
        url: '{{ route("Front.designer.booking.time") }}',
        type: 'post',
        data: {
            days: $(this).val(),
            id: $(this).data('id'),
        },
        dataType: 'json',
        success: function(response) {
            let cid = JSON.parse(response.timeSlots.id);
            let data = JSON.parse(response.timeSlots.time);
            document.querySelector("#time").innerHTML =
                `<option value="" selected disabed>Select Slots</option>`;
            for (let i = 0; i < data.length; i++) {
                document.querySelector("#time").innerHTML += `
                    <option value="${cid}">${data[i]}</option>
                `
            }
        },

    })
})

$('#BookingForm').submit(function(elem) {
    $('button[type=submit]').prop('disabled', false)

    elem.preventDefault();
    var element = $(this)

    $.ajax({
        url: '{{ route("Front.designer.booking.store") }}',
        type: 'post',
        data: element.serializeArray(),
        dataType: 'json',
        success: function(response) {
            $('button[type=submit]').prop('disabled', true)

            if (response.status == true) {
                window.location.href = "{{ route('Admin.product') }}"

                $('#address').removeClass('is-invalid').siblings('p').removeClass(
                        'invalid-feedback')
                    .html('')
                $('#time').removeClass('is-invalid').siblings('p').removeClass(
                        'invalid-feedback')
                    .html('')
                    $('#day').removeClass('is-invalid').siblings('p').removeClass(
                        'invalid-feedback')
                    .html('')
            } else {
                var error = response['errors']
                if (error['address']) {
                    $('#address').addClass('is-invalid').siblings('p').addClass('invalid-feedback')
                        .html(error['address'])
                } else {
                    $('#address').removeClass('is-invalid').siblings('p').removeClass(
                        'invalid-feedback').html('')
                }

                if (error['time']) {
                    $('#time').addClass('is-invalid').siblings('p').addClass('invalid-feedback')
                        .html(error['time'])
                } else {
                    $('#time').removeClass('is-invalid').siblings('p').removeClass(
                        'invalid-feedback').html('')
                }

                if (error['day']) {
                    $('#day').addClass('is-invalid').siblings('p').addClass('invalid-feedback')
                        .html(error['day'])
                } else {
                    $('#day').removeClass('is-invalid').siblings('p').removeClass(
                        'invalid-feedback').html('')
                }

            }
        }
    })

})
</script>

@endsection