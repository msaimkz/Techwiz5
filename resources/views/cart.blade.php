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
                        <h2 class="breadcrumb__title mb-15 mb-sm-10 mb-xs-5 color-white title-animation">Cart Page</h2>

                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="{{url('/')}}">Home</a></span></li>
                                    <li class="active"><span>Cart Page</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area start  -->
<div style="margin-top: -50px; display: flex;min-height: 60vh;align-items: center;padding-inline: 30px;" class="cart-main-container">
    <div style="width: 100%;@media screen and (max-width: 991px) {.cart-row {display: flex;flex-direction: column;align-items: center;}#cart-items {width: 100vw;}#cart-price {width: 80vw;}}@media screen and (max-width: 550px) {tbody > tr > td:nth-child(1) > div > h2{font-size: 18px;}.cart-empty{font-size: 22px;}}" class="row cart-row">
        <div style="flex:0 0 auto;width:66.66667%" class="col-md-8" id="cart-items">
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch}@media (max-width: 575.98px){.table-responsive-sm{overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width: 767.98px){.table-responsive-md{overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width: 991.98px){.table-responsive-lg{overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width: 1199.98px){.table-responsive-xl{overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width: 1399.98px){.table-responsive-xxl{overflow-x:auto;-webkit-overflow-scrolling:touch}}" class="table-responsive">
                <table style="--bs-table-bg: rgba(0,0,0,0);--bs-table-striped-color: #525368;--bs-table-striped-bg: rgba(0,0,0,0.05);--bs-table-active-color: #525368;--bs-table-active-bg: rgba(0,0,0,0.1);--bs-table-hover-color: #525368;--bs-table-hover-bg: rgba(0,0,0,0.075);width:100%;margin-bottom:1rem;color:#525368;vertical-align:top;border-color:#dee2e6" class="table" id="cart">
                    <thead style="color: #FFF;" class="cart-thead cart-header">
                        <tr style="padding-inline-start: 40px;text-align: center;">
                            <th style="border: none; background: #685544; font-size: 23px;color: #fff;font-weight: 600;">Item</th>
                            <th style="border: none; background: #685544; font-size: 23px;color: #fff;font-weight: 600;">Price</th>
                            <th style="border: none; background: #685544; font-size: 23px;color: #fff;font-weight: 600;">Quantity</th>
                            <th style="border: none; background: #685544; font-size: 23px;color: #fff;font-weight: 600;">Total</th>
                            <th style="border: none; background: #685544; font-size: 23px;color: #fff;font-weight: 600;">Remove</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 28px;color: #000;font-weight: 400;" class="cart-tbody">
                        <tr>
                            <td>
                                <div class="d-flex align-items-center justify-content-start">
                                    <img style="margin-left: 23px;" src="{{asset('Asset/decorVista/assets/imgs/protfolio/protfolio-2.jpg')}}"
                                        width="60px">
                                                                    
                                    <h3 style="margin-left: 14px;" class="nav-nigth">interior</h3>
                                </div>
                            </td>
                            <td style="padding-top: 25px;font-weight: 600;" class="nav-nigth">$120</td>
                            <td>
                                {{-- <input style="padding-top: 36px;margin-left: 139px;color: black;padding-left: 8px;width: 89px;font-size: 24px;font-weight: 600;" type="number" min="1" value="1"> --}}
                                {{-- <div class="input-group quantity mx-auto" style="width: 100px;background-color: #0F4229;color: #fff;border: 2px solid #0F4229;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-minus p-2 pt-1 pb-1 sub gear-button"
                                            data-id="">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" style="display:block;width:100%;padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#525368;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;appearance:none;border-radius:4px;transition:border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;"
                                        class="form-control form-control-sm  border-0 text-center"
                                        value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-plus p-2 pt-1 pb-1 add gear-button"
                                            data-id="">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div> --}}
                                <div class="input-group quantity mx-auto" style="width: 100px; color: #fff; display: flex; align-items: center; justify-content: space-between;">
                                    <button class="btn btn-sm btn-minus p-2 pt-1 pb-1 sub gear-button" data-id="" style="background-color: #5d5044; color: #fff; border: none;height: 34px;">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                    
                                    <input type="text" style="width: 40px; color: #525368; background-color: #fff; border: none; border-radius: 4px;" 
                                           class="form-control form-control-sm" value="1">
                                    
                                    <button class="btn btn-sm btn-plus p-2 pt-1 pb-1 add gear-button" data-id="" style="background-color: #5d5044; color: #fff; border: none;height: 34px;">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                              
                            </td>
                            <td style="padding-top: 25px;font-weight: 600;" class="nav-nigth">
                               $150
                            </td>
                            <td>
                                <button style="margin-left: 61px; margin-top: 25px;" class="btn btn-sm btn-danger"><i style="font-size: 17px;" class="fa fa-times"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4 nigth-card" id="cart-price">
            <div class="card cart-summery pt-2">
                <div class="sub-title">
                    <h2 style="padding: 7px 13px;text-align: center;" class="nav-nigth">Cart Summery</h3>
                </div>
                <div style="margin-bottom: 16px;" class="card-body">
                    <div style="font-size: x-large;font-weight: 600;margin-bottom: 10px;margin-top: 10px;" class="d-flex justify-content-between pb-2  cart-summary">
                        <div class="nav-nigth">Subtotal</div>
                        <div class="nav-nigth">$160</div>
                    </div>
                    <div  style="font-size: x-large;font-weight: 600;" class="d-flex justify-content-between summery-end cart-summary">
                        <div class="nav-nigth">Total</div>
                        <div class="nav-nigth">$160</div>
                    </div>
                    <div class="pt-5 proceed-button">
                        <button style="background: #685544;color: white;padding: 10px 17px;font-size: 19px;font-weight: 500;margin-left: 140px;"><a href="#" onMouseOver="this.style.color='white'" class="gear-button">Proceed to Checkout</a></button>
                    </div>
                </div>
            </div>
        </div>
            {{-- <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="cart-empty">Your Cart Is Empty</h1>
                </div>
            </div>
        </div> --}}
     
    </div>
</div>
</main>
@endsection