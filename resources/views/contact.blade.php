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
                    <div style="margin-top: 100px;" class="breadcrumb__content text-center">
                        <h2 class="breadcrumb__title mb-15 mb-sm-10 mb-xs-5 color-white title-animation">Contact Us</h2>

                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="{{url('/')}}">Home</a></span></li>
                                    <li class="active"><span>Contact Us</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area start  -->

    <!-- "error  area start -->
    <section class="contact-us section-space">
        <div class="container">
            <div class="row mb-minus-30">
                <div class="col-md-6 col-lg-4">
                    <div class="contact-us__info-item">
                        <div class="contact-us__icon">
                            <img src="{{asset('Asset/decorVista/assets/imgs/contact-us/location.svg')}}" alt="image not found">
                        </div>
                        <div class="contact-us__text">
                            <h6>Visit our office</h6>
                            <a href="#">93X Hilgard Ave, Los Angeles, CA 900XX, United States.</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="contact-us__info-item">
                        <div class="contact-us__icon">
                            <img src="{{asset('Asset/decorVista/assets/imgs/contact-us/email.svg')}}" alt="image not found">
                        </div>
                        <div class="contact-us__text">
                            <h6>email address</h6>
                            <a href="mailto:example@exdosstudio.com">example@exdosstudio.com</a>
                            <a href="mailto:info@exdosstudio.com">info@exdosstudio.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="contact-us__info-item">
                        <div class="contact-us__icon">
                            <img src="{{asset('Asset/decorVista/assets/imgs/contact-us/phone.svg')}}" alt="image not found">
                        </div>
                        <div class="contact-us__text">
                            <h6>Phone number</h6>
                            <a href="tel:123534352555">+1-2353-4352-555</a>
                            <a href="tel:01541258360">01 (541) 258 360</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- "error  area end -->

    <section class="contact section-space__bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact__from">
                        <h4 class="title-animation mb-10">Get in touch</h4>
                        <p>Select layout follower boolean editor flows. Scrolling variant move font group variant layout device share.</p>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="contact__form-input">
                                    <input name="name" id="lname" type="text" placeholder="Name">
                                    <span></span>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact__form-input">
                                    <input name="email" id="email" type="email" placeholder="Email">
                                    <span></span>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="contact__form-input">
                                    <input name="number" id="number" type="number" placeholder="Phone">
                                    <span></span>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="contact__form-input-select d-flex flex-column">
                                    <select name="subject" id="subject" style="display: none;">
                                        <option value="">Subject</option>
                                        <option value="order">Event Order</option>
                                        <option value="objection">Objection</option>
                                    </select>
                                    <span></span>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="contact__form-input">
                                    <div class="validation__wrapper-up position-relative">
                                        <textarea name="textarea" id="textarea" placeholder="Type Your Message" class=""></textarea>
                                        <span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="rr-btn">
                                        <span class="btn-wrap">
                                            <span class="text-one">Send
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 6H11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6 1L11 6L6 11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>
                                            <span class="text-two">Send
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 6H11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6 1L11 6L6 11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>
                                        </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14600.157880481716!2d90.35107202273903!3d23.81719545680701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c12c1b289e39%3A0x8d3bdfb80d3ebe88!2sRd%20No.%204%2C%20Dhaka%201216!5e0!3m2!1sen!2sbd!4v1701837409513!5m2!1sen!2sbd" width="100%" height="555" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

       
      


</main>
 {{-- <div class="footer__top">
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
        </div>  --}}
@endsection