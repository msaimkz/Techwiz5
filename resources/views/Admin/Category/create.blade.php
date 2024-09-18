@extends('Admin.master')
@section('content')


<main id="main" class="main">

<div class="card">
            <div class="card-body">
              <h5 class="card-title">Create Category</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3">
    
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    <label for="name">Name</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="slug" name="slug" readonly placeholder="Slug">
                    <label for="slug">Slug</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    <label for="name">Name</label>
                  </div>
                </div>
               
               
                <div class="text-start">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>

</main><!-- End #main -->


@endsection