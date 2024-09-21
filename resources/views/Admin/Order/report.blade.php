@extends('Admin.master')
@section('content')

<main id="main" class="main">

    @include('Message.message')

    <div class="pagetitle">
        <h1>Orders</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('Admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Orders</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="content-wrapper">
            @include("Message.message")
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid my-2">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Order: #12</h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{ route('Admin.order') }}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header pt-3">
                                    <div class="row invoice-info">
                                        <div class="col-sm-4 invoice-col">

                                            <h1 class="h5 mb-3">Shipping Address</h1>
                                            <address>
                                                <strong>Muhammad Saim</strong><br>
                                                Shah Faisal Town <br>
                                                sindh, 12345 Pakistan <br>
                                                Phone: 12345678910<br>
                                                Email: msaimkzms2008@gmail.com
                                            </address>
                                            <h1 class="h5 ">Shipping Date</h1>
                                            <address>



                                                n/a

                                                <br>
                                            </address>
                                        </div>




                                        <div class="col-sm-4 invoice-col">
                                            <b>Invoice #123</b><br>
                                            <br>
                                            <b>Order ID:</b> 123<br>
                                            <b>Total:</b> $200,00<br>
                                            <b>Status:</b>

                                            <span class="text-danger">Pending</span>

                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body table-responsive p-3">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th width="100">Price</th>
                                                <th width="100">Qty</th>
                                                <th width="100">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <tr>
                                                <td>Lamp</td>
                                                <td>$200</td>
                                                <td>1</td>
                                                <td>$200</td>
                                            </tr>


                                            <tr>
                                                <th colspan="3" class="text-right">Subtotal:</th>
                                                <td>$300</td>
                                            </tr>


                                            <tr>
                                                <th colspan="3" class="text-right">Grand Total:</th>
                                                <td>$400</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <form method="post" id="StatusForm" name="StatusForm">
                                <div class="card  py-3">
                                    <div class="card-body">
                                        <h2 class="h4 mb-3">Order Status</h2>
                                        <div class="mb-3">
                                            <select name="status" id="status" class="form-control">
                                                <option value="pending">Pending
                                                </option>
                                                <option value="shipped">Shipped
                                                </option>
                                                <option value="delivered">
                                                    Delivered
                                                </option>
                                                <option value="cancelled">
                                                    Cancelled
                                                </option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="shipping_date">Shipped Date</label>
                                            <input type="text" class="form-control" autocomplete="off"
                                                name="shipping_date" id="shipping_date">
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </section>
            <!-- /.content -->
        </div>
    </section>


</main><!-- End #main -->


@endsection