@extends('Admin.master')
@section('content')


<main id="main" class="main">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create Gallery</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" id="GalleryForm" name="GalleryForm" action="" method="post">
                @csrf


                <div class="col-md-6">
                    <label for="subcategory_id" class="form-label">Sub Category</label>
                    <select id="subcategory_id" name="subcategory_id" class="form-select">
                        <option value="">Select a Sub Category</option>
                        @if (!empty($subCategories))
                        @foreach ($subCategories as $subcategory)
                        <option value="{{ $subcategory->id }}">{{$subcategory->name}}</option>

                        @endforeach

                        @endif
                    </select>
                    <span></span>
                </div>
                <div class="col-md-6">
                    <label for="status" class="form-label">Status</label>
                    <select id="status" name="status" class="form-select">
                        <option value="1">Active</option>
                        <option value="0">Block</option>
                    </select>
                    <span></span>
                </div>
                <div class="row">

                </div>

                <div class="col-md-6">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
                    <span></span>
                </div>
                <div class="col-md-6">
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

                </div>

                <div class="text-start">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="{{ route('Admin.gallery') }}" class="btn btn-secondary">Back</a>
                </div>
            </form><!-- End floating Labels Form -->

        </div>
    </div>

</main><!-- End #main -->


@endsection


@section('js')
$(document).ready(function() {


$('#GalleryForm').submit(function(event) {
$('button[type=submit]').prop('disabled', true)

event.preventDefault();
var element = $(this)

$.ajax({
url:'{{ route("Admin.gallery.store") }}',
type:'post',
data: element.serializeArray(),
dataType:'json',
success:function(response){
$('button[type=submit]').prop('disabled', false)

if(response.status == true){
window.location.href = "{{ route('Admin.gallery') }}"

$('#subcategory_id').removeClass('is-invalid').siblings('span').removeClass('invalid-feedback')
.html('')
$('#description').removeClass('is-invalid').siblings('span').removeClass('invalid-feedback')
.html('')

$('#category_id').removeClass('is-invalid').siblings('span').removeClass('invalid-feedback')
.html('')

}
else{
var error = response['errors']
if (error['subcategory_id']) {
$('#subcategory_id').addClass('is-invalid').siblings('span').addClass('invalid-feedback')
.html(error['subcategory_id'])
} else {
$('#subcategory_id').removeClass('is-invalid').siblings('span').removeClass(
'invalid-feedback').html('')
}
if (error['description']) {
$('#description').addClass('is-invalid').siblings('span').addClass('invalid-feedback')
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


Dropzone.autoDiscover = false;
const dropzone = $("#image").dropzone({
url: "{{route('Temp-image')}}",
maxFiles: 10,
paramName: 'image',
addRemoveLinks: true,
acceptedFiles: "image/jpeg,image/png,image/gif,image/webp",
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
},
success: function(file, response) {
var html = `<div class="col-md-3" id="row-image-${response.Image_id}">
    <div class="card">
        <input type="hidden" name="img_array[]" value="${response.Image_id}">
        <img src="${response.Image_path}" class="card-img-top" alt="..." width="100px">
        <div class="card-body p-4">
            <a href="javascript:viod(0)" onclick="deleteTempImg(${response.Image_id})" class="btn btn-danger">delete</a>
        </div>
    </div>
</div>`

$('#tempimage').append(html)
},
complete: function(file) {
this.removeFile(file)
}
});

function deleteTempImg(id) {
$('#row-image-' + id).remove();
}

@endsection