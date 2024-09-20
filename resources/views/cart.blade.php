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
                        <h2 class="breadcrumb__title mb-15 mb-sm-10 mb-xs-5 color-white title-animation">Cart Page</h2>

                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="{{route('Front.index')}}">Home</a></span></li>
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
    <div style="margin-top: -50px; display: flex;min-height: 60vh;align-items: center;padding-inline: 30px;"
        class="cart-main-container">
        @if (Cart::count() > 0)

        <div style="width: 100%;@media screen and (max-width: 991px) {.cart-row {display: flex;flex-direction: column;align-items: center;}#cart-items {width: 100vw;}#cart-price {width: 80vw;}}@media screen and (max-width: 550px) {tbody > tr > td:nth-child(1) > div > h2{font-size: 18px;}.cart-empty{font-size: 22px;}}"
            class="row cart-row">
            <div style="flex:0 0 auto;width:66.66667%" class="col-md-8" id="cart-items">
                <div style="overflow-x:auto;-webkit-overflow-scrolling:touch}@media (max-width: 575.98px){.table-responsive-sm{overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width: 767.98px){.table-responsive-md{overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width: 991.98px){.table-responsive-lg{overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width: 1199.98px){.table-responsive-xl{overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width: 1399.98px){.table-responsive-xxl{overflow-x:auto;-webkit-overflow-scrolling:touch}}"
                    class="table-responsive">
                    <table
                        style="--bs-table-bg: rgba(0,0,0,0);--bs-table-striped-color: #525368;--bs-table-striped-bg: rgba(0,0,0,0.05);--bs-table-active-color: #525368;--bs-table-active-bg: rgba(0,0,0,0.1);--bs-table-hover-color: #525368;--bs-table-hover-bg: rgba(0,0,0,0.075);width:100%;margin-bottom:1rem;color:#525368;vertical-align:top;border-color:#dee2e6"
                        class="table" id="cart">
                        <thead style="color: #FFF;" class="cart-thead cart-header">
                            <tr style="padding-inline-start: 40px;text-align: center;">
                                <th
                                    style="border: none; background: #685544; font-size: 23px;color: #fff;font-weight: 600;">
                                    Item</th>
                                <th
                                    style="border: none; background: #685544; font-size: 23px;color: #fff;font-weight: 600;">
                                    Price</th>
                                <th
                                    style="border: none; background: #685544; font-size: 23px;color: #fff;font-weight: 600;">
                                    Quantity</th>
                                <th
                                    style="border: none; background: #685544; font-size: 23px;color: #fff;font-weight: 600;">
                                    Total</th>
                                <th
                                    style="border: none; background: #685544; font-size: 23px;color: #fff;font-weight: 600;">
                                    Remove</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 28px;color: #000;font-weight: 400;" class="cart-tbody">
                            @foreach($cartItems as $cartItem)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center justify-content-start">
                                        @if(!empty($cartItem->options->productImage->image))
                                        <img src="{{asset('uploads/product/small/'.$cartItem->options->productImage->image)}}"
                                            width="60px">
                                        @else
                                        <img src="{{asset('asset/front/img/service-4.jpg')}}" width="60px">
                                        @endif

                                        <h3 style="margin-left: 14px;" class="nav-nigth">{{ $cartItem->name }}</h3>
                                    </div>
                                </td>
                                <td style="padding-top: 25px;font-weight: 600;" class="nav-nigth" id = "price-{{ $cartItem->rowId }}">
                                    ${{ $cartItem->price }}</td>
                                <td>

                                    <div class="input-group quantity mx-auto"
                                        style="width: 100px; color: #fff; display: flex; align-items: center; justify-content: space-between;">
                                        <button class="btn btn-sm btn-minus p-2 pt-1 pb-1 sub gear-button"
                                            data-id="{{$cartItem->rowId}}"
                                            style="background-color: #5d5044; color: #fff; border: none;height: 34px;">
                                            <i class="fa fa-minus"></i>
                                        </button>

                                        <input type="text"
                                            style="width: 40px; color: #525368; background-color: #fff; border: none; border-radius: 4px;"
                                            class="form-control form-control-sm" id = "qty-{{ $cartItem->rowId }}" value="{{ $cartItem->qty }}">

                                        <button class="btn btn-sm btn-plus p-2 pt-1 pb-1 add gear-button"
                                            data-id="{{$cartItem->rowId}}"
                                            style="background-color: #5d5044; color: #fff; border: none;height: 34px;">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>

                                </td>
                                <td style="padding-top: 25px;font-weight: 600;" id = "total-{{ $cartItem->rowId }}" class="nav-nigth">
                                    ${{$cartItem->price * $cartItem->qty}}
                                </td>
                                <td>
                                    <button style="margin-left: 61px; margin-top: 25px;" 
                                        class="btn btn-sm btn-danger" onclick="DeleteCart('{{$cartItem->rowId}}')"><i style="font-size: 17px;"
                                            class="fa fa-times"></i></button>
                                </td>
                            </tr>
                            @endforeach
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
                        <div style="font-size: x-large;font-weight: 600;margin-bottom: 10px;margin-top: 10px;"
                            class="d-flex justify-content-between pb-2  cart-summary">
                            <div class="nav-nigth">Subtotal</div>
                            <div class="nav-nigth subtotal">${{Cart::subtotal()}}</div>
                        </div>
                        <div style="font-size: x-large;font-weight: 600;"
                            class="d-flex justify-content-between summery-end cart-summary">
                            <div class="nav-nigth ">Total</div>
                            <div class="nav-nigth subtotal">${{Cart::subtotal()}}</div>
                        </div>
                        <div class="pt-5 proceed-button">
                            <button
                                style="background: #685544;color: white;padding: 10px 17px;font-size: 19px;font-weight: 500;margin-left: 140px;"><a
                                    href="#" onMouseOver="this.style.color='white'" class="gear-button">Proceed to
                                    Checkout</a></button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        @else
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="cart-empty">Your Cart Is Empty</h1>
                </div>
            </div>
        </div>
        @endif

    </div>
</main>
@endsection
@section('js')
<script>
$('.add').click(function() {

    var qtyElement = $(this).prev();
    var qtyValue = parseInt(qtyElement.val());
    if (qtyValue < 100) {

        qtyElement.val(qtyValue + 1);
        var rowid = $(this).data("id");
        var qty = qtyElement.val();
        UpdateCart(rowid, qty)
    }
});
$('.sub').click(function() {
    var qtyElement = $(this).next();
    var qtyValue = parseInt(qtyElement.val());
    console.log(qtyValue)
    if (qtyValue > 1) {
        qtyElement.val(qtyValue - 1);
        var rowid = $(this).data("id");
        var qty = qtyElement.val();
        UpdateCart(rowid, qty)
    }
});


function UpdateCart(rowid, qty) {

    $.ajax({
        url: '{{route("Update.Cart")}}',
        type: 'post',
        data: {
            rowid: rowid,
            qty: qty,

        },
        dataType: 'json',
        success: function(response) {

          var  item = response.cartitem;
    

           $(`#price-${item.rowId}`).html('$' + item.price)
           $(`#qty-${item.rowId}`).val(item.qty)
           $(`#total-${item.rowId}`).html('$' + item.price * item.qty)
           $(`.subtotal`).html('$' + response.subTotal)
           
        },

    })

}

function DeleteCart(rowid) {
    if (confirm("Are You Want to Delete")) {
        $.ajax({
            url: '{{route("Delete.Cart")}}',
            type: 'post',
            data: {
                rowid: rowid,
            },
            dataType: 'json',
            success: function(response) {
                window.location.href = "{{route('Front.cart')}}"
            },

        })

    }

}
</script>

@endsection