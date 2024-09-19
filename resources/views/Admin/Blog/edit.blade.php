@extends('Admin.master')
@section('content')


<main id="main" class="main">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create Blog</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" id="BlogForm" name="BlogForm" action="" method="post">
                @csrf

                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Blog Title"
                            value="{{ $blog->title }}">
                        <span></span>
                        <label for="name">Title</label>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="slug" name="slug" readonly placeholder="Slug"
                            value="{{ $blog->slug }}">
                        <span></span>
                        <label for="slug">Slug</label>
                    </div>
                </div>




                <div class="col-md-4">
                    <label for="status" class="form-label">Status</label>
                    <select id="status" name="status" class="form-control">
                        <option value="1" {{ ($blog->status == 1 ) ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ ($blog->status == 0 ) ? 'selected' : '' }}>Block</option>
                    </select>
                    <span></span>
                </div>
                <div class="col-md-6">
                    <label for="description" class="form-label">Short Description</label>
                    <textarea name="short_description" id="short_description" cols="30" rows="5"
                        class="form-control">{{ $blog->short_description }}</textarea>
                    <span></span>
                </div>
                <div class="col-md-6">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" cols="30" rows="5"
                        class="form-control">{{ $blog->short_description }}</textarea>
                    <span></span>
                </div>
                <div class="col-md-8">
                    <input type="hidden" id="image_id" name="image_id">
                    <div class="card mb-3">
                        <div class="card-body pt-4">
                            <h2 class="h4 mb-3">Media</h2>
                            <div id="image" class="dropzone dz-clickable p-4">
                                <div class="dz-message needsclick">
                                    <br>Drop files here or click to upload.<br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" id="tempimage">
                    @if(!empty($blog->image))
                    <div class="col-md-3">
                        <div class="card">
                            <input type="hidden" name="img_array" value="{{$blog->id}}">
                            <img src="{{asset('uploads/Blog/small/'.$blog->image)}}" class="card-img-top"
                                alt="...">
                        </div>
                    </div>
                    @endif
                </div>
                <div class="text-start">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('Admin.Blog') }}" class="btn btn-secondary">Back</a>
                </div>
            </form><!-- End floating Labels Form -->

        </div>
    </div>

</main><!-- End #main -->


@endsection
@section('js')
$(document).ready(function() {


$('#BlogForm').submit(function(event) {
event.preventDefault();
var element = $(this)

$.ajax({
url:'{{ route("Admin.Blog.update",$blog->id) }}',
type:'post',
data: element.serializeArray(),
dataType:'json',
success:function(response){

if(response.status == true){
window.location.href = "{{ route('Admin.Blog') }}"

$('#title').removeClass('is-invalid').siblings('span').removeClass('invalid-feedback')
.html('')
$('#slug').removeClass('is-invalid').siblings('span').removeClass('invalid-feedback')
.html('')
$('#description').removeClass('is-invalid').siblings('span').removeClass('invalid-feedback')
.html('')

}
else{
var error = response['errors']
if (error['title']) {
$('#title').addClass('is-invalid').siblings('span').addClass('invalid-feedback')
.html(error['title'])
} else {
$('#title').removeClass('is-invalid').siblings('span').removeClass(
'invalid-feedback').html('')
}
if (error['slug']) {
$('#slug').addClass('is-invalid').siblings('span').addClass('invalid-feedback')
.html(error['slug'])
} else {
$('#slug').removeClass('is-invalid').siblings('span').removeClass(
'invalid-feedback').html('')
}
if (error['description']) {
$('#slug').addClass('is-invalid').siblings('span').addClass('invalid-feedback')
.html(error['description'])
} else {
$('#description').removeClass('is-invalid').siblings('span').removeClass(
'invalid-feedback').html('')
}
}

},
})
});
});

$('#title').change(function() {
var element = $(this).val();
$('button[type=submit]').prop('disabled', true)
$.ajax({
url: '{{route("GetSlug")}}',
type: 'get',
data: {
title: element
},
dataType: 'json',
success: function(respose) {
$('button[type=submit]').prop('disabled', false)
$('#slug').val(respose['slug']);
}
})
})


Dropzone.autoDiscover = false;
const dropzone = $("#image").dropzone({
    init: function() {
        this.on('addedfile', function(file) {
            if (this.files.length > 1) {
                this.removeFile(this.files[0]);
            }
        });
    },
    url: "{{ route('Temp-image') }}",
    maxFiles: 4, // Maximum files to allow
    paramName: 'image',
    addRemoveLinks: true,
    acceptedFiles: "image/jpeg,image/png,image/gif,image/webp",
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function(file, response) {
        $("#image_id").val(response.Image_id)
    },
   
});
@endsection