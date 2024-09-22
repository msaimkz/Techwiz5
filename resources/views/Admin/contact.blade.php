@extends('Admin.master')
@section('content')


<main id="main" class="main">

    @include('Message.message')

    <div class="pagetitle">
        <h1>contacts</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('Admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Contacts</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
              

                <div class="card">
                    <div class="card-body">


                        <!-- Table with stripped rows -->
                        <table class="table datatable" id="myTable">
                            <thead>
                                <tr>
                                    <th>
                                        <b>ID</b>
                                    </th>
                                    <th><b>name</b></th>
                                    <th>email</th>
                                    <th>subject</th>
                                    <th>message</th>
                                    

                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($contacts))

                                @foreach ($contacts as $contact )
                                <tr>
                                    <td>{{$contact->id}}</td>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->subject}}</td>
                                    <td>{{$contact->message}}</td>
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
function deleteContact(id) {
    var url = '{{route("Admin-Contact-delete","ID")}}';
    var newurl = url.replace('ID', id)
    if (confirm('Are You sure want to delete')) {
        $.ajax({
            url: newurl,
            type: 'delete',
            data: {},
            dataType: 'json',
            success: function(response) {
                if (response['status']) {
                    window.location.href = '{{url("Admin/Contact")}}'

                }
            }
        })
    }


}
@endsection
