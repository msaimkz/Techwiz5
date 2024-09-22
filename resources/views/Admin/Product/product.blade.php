@extends('Admin.master')
@section('content')


<main id="main" class="main">

    @include('Message.message')

    <div class="pagetitle">
        <h1>Products</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('Admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Products</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-3 d-flex justify-content-end">
                    <a href="{{ route('Admin.product.create') }}" class="btn btn-primary">Create Product</a>
                </div>

                <div class="card">
                    <div class="card-body">


                        <!-- Table with stripped rows -->
                        <table class="table datatable" id="myTable">
                            <thead>
                                <tr>
                                    <th>
                                        <b>ID</b>
                                    </th>
                                    <th><b>Name</b></th>
                                    <th>Brand</th>
                                    <th>Qaunity</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($products))

                                @foreach ($products as $product )
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->brand_name}}</td>
                                    <td>{{$product->qty}} left in stock</td>
                                    <td>${{$product->price}}/-</td>
                                    <td>
                                        @if($product->status == 1)
                                        <svg class="text-success-500 h-6 w-6 text-success" width="30px"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        @else
                                        <svg class="text-danger h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="30px"
                                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z">
                                            </path>
                                        </svg>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('Admin.product.edit',$product->id) }}" class="btn btn-success">
                                            <svg class="filament-link-icon w-4 h-4 mr-1" width="20px"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>

                                        <a href="javascript:void(0)" class="btn btn-danger" onclick="deleteProduct('{{$product->id}}')">
                                            <svg wire:loading.remove.delay="" wire:target=""
                                                class="filament-link-icon w-4 h-4 mr-1" width="20px"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path ath fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                      
                                    </td>
                                </tr>
                                @endforeach

                                @endif



                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->


@endsection


@section('js')
function deleteProduct(id) {
    var url = '{{route("Admin-product-delete","ID")}}';
    var newurl = url.replace('ID', id)
    if (confirm('Are You sure want to delete')) {
        $.ajax({
            url: newurl,
            type: 'delete',
            data: {},
            dataType: 'json',
            success: function(response) {
                if (response['status']) {
                    window.location.href = '{{route("Admin.product")}}'

                }
                else{
                    window.location.href = '{{route("Admin.product")}}'

                }
            }
        })
    }


}
@endsection