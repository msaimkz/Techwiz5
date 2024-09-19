@extends('Admin.master')
@section('content')


<main id="main" class="main">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit User</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" id="UserForm" name="UserForm" action="{{ route('admin.users.update', $user->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" placeholder="Name" required>
                        <span></span>
                        <label for="name">Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" name="email" placeholder="email" value="{{ $user->email }}" required>
                        <span></span>
                        <label for="email">email</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="numeric" class="form-control" id="contact" name="contact" placeholder="Contact" value="{{ $user->contact }}" required>
                        <span></span>
                        <label for="contact">Contact</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password"  required>
                        <span></span>
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"  placeholder=" Confirm Password" required>
                        <span></span>
                        <label for="password_confirmation">Confirm Password</label>
                    </div>
                </div>

            

            

                <div class="text-start">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </form><!-- End floating Labels Form -->

        </div>
    </div>

</main><!-- End #main -->


@endsection