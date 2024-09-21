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
                        <h2 class="breadcrumb__title mb-15 mb-sm-10 mb-xs-5 color-white title-animation">My Orders</h2>

                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="{{ route('Front.index') }}">Home</a></span></li>
                                    <li class="active"><span>My Orders</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area start  -->
    <section class=" section-11 ">
        <div class="container  mt-5">
            <div class="row order-row">
                <div class="col-md-9">
                    <div style="margin-bottom: 30px;" class="card order-card">
                        <div class="card-header">
                            <h2 style="color: #5e5246;padding: 10px 10px;" class="Order-title mb-0 pt-2 pb-2 nav-nigth">
                                My Orders</h2>
                        </div>
                        <div class="card-body p-4">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead
                                        style=" background-color: #23b24c; color: #fff;background-color: green;border-bottom: 2px solid #000;"
                                        class="order-thead">
                                        <tr style="  padding-inline-start: 40px;">
                                            <th
                                                style="background: #5d4836; font-size: 23px;color: #fff;font-weight: 600;">
                                                Orders #</th>
                                            <th
                                                style="background: #5d4836; font-size: 23px;color: #fff;font-weight: 600;">
                                                Date Purchased</th>
                                            <th
                                                style="background: #5d4836; font-size: 23px;color: #fff;font-weight: 600;">
                                                Status</th>
                                            <th
                                                style="background: #5d4836; font-size: 23px;color: #fff;font-weight: 600;">
                                                Total</th>
                                            <th
                                                style="background: #5d4836; font-size: 23px;color: #fff;font-weight: 600;">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="order-tbody">
                                        @if (!empty($orders))

                                        @foreach($orders as $order)
                                        <tr>
                                            <td style="ont-size: 23px;color: #000;font-weight: 400;">
                                                <a class="nav-nigth" href="#">{{ $order->id }}</a>
                                            </td>
                                            <td class="nav-nigth">
                                                {{ \Carbon\Carbon::parse($order->created_at)->format('d M ,Y') }}</td>
                                            <td>
                                                @if($order->delivery_status == 'pending')
                                                <span class="badge bg-danger">Pending</span>
                                                @elseif($order->delivery_status == 'shipped')
                                                <span class="badge bg-info">Shipped</span>
                                                @elseif($order->delivery_status == 'delivered')
                                                <span class="badge bg-success">Delivered</span>
                                                @else
                                                <span class="badge bg-danger">Cancelled</span>
                                                @endif
                                            </td>
                                            <td class="nav-nigth">${{number_format($order->grand_total,2)}}</td>
                                            <td class="nav-nigth">
                                                <button
                                                    style="background: #685544;color: white;padding: 10px 17px;font-size: 19px;font-weight: 500;"><a
                                                        href="{{ route('Front.chekout') }}"
                                                        onMouseOver="this.style.color='white'"
                                                        class="gear-button">View More</a></button>
                                            </td>
                                        </tr>

                                        @endforeach

                                        @endif



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection