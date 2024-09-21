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
                        <h2 class="breadcrumb__title mb-15 mb-sm-10 mb-xs-5 color-white title-animation">Detail Page
                        </h2>

                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="{{ route('Front.index') }}">Home</a></span></li>
                                    <li class="active"><span>Detail Page</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area start  -->




    <section class="blog-details section-space">
        <div style="display: flex; align-items: center; padding: 0px 48px; " class="blog-details__content">
            <div class="blog-details__content">
                @php
                $img = productImages($product->id);
                @endphp

                @if (!empty($img))
                <img src="{{asset('uploads/product/large/'.$img->image)}}" style="height: 600px;" alt="image not found">
                @endif
            </div>

            <div style="padding-left: 44px" class="section__title-wrapper mb-45 mb-xs-40">
                <h2 class="section__title mb-25 title-animation">{{$product->name }}</h2>
                <h3 style="color: #906e50;">$120</h3>
                <p style="padding-top: 40px" class="mb-0">{{ $product->description}}</p>
                <button type="button" onclick="AddtoCart('{{$product->id}}')" style="margin-top: 40px" type="submit"
                    class="rr-btn">
                    <span class="btn-wrap">
                        <span class="text-one">Add to Cart
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 6H11" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M6 1L11 6L6 11" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span class="text-two">Add to cart
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 6H11" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M6 1L11 6L6 11" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </span>
                </button>
                <button type="button" style="margin-top: 40px" type="submit" class="rr-btn"
                    onclick="AddWishlist('{{$product->id}}')">
                    <span class="btn-wrap">
                        <span class="text-one">Add to Wishlist
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 6H11" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M6 1L11 6L6 11" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span class="text-two">Add to Wishlist
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 6H11" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M6 1L11 6L6 11" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </span>
                </button>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="comment-widget mt-50 mt-xs-60">
                        <h6 class="comment-widget__title">{{ $comments->count() }} Comments</h6>

                        @foreach ($comments as $comment)
                        <div class="comment-item d-flex align-items-start mb-30" id="comment-{{ $comment->id }}">
                            <div class="comment-item__img">
                               
                            </div>
                            <div class="comment-item__content">
                                <span class="name">{{ $comment->name }}</span>
                                <span class="date">{{ $comment->created_at->format('F j, Y, g:i a') }}</span>
                                <p>{{ $comment->comment }}</p>
                                

                                <!-- Reply Form -->
                                <div class="reply-form" id="reply-form-{{ $comment->id }}" style="display: none;">
                                    <form class="replyCommentForm" data-comment-id="{{ $comment->id }}">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                                        <div class="live-comment-widget__form-input">
                                            <label>Reply *</label>
                                            <textarea name="reply_comment" required></textarea>
                                            <button type="submit" class="rr-btn">Post Reply</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Display Replies -->
                        <div class="replies" id="replies-{{ $comment->id }}">
                            @foreach ($comment->replies as $reply)
                            <div class="comment-item d-flex align-items-start comment-item__reply mb-30">
                                <div class="comment-item__img">
                                    <img src="assets/imgs/blog-details/author-{{ $reply->user->id }}.png"
                                        alt="image not found">
                                </div>
                                <div class="comment-item__content">
                                    <span class="name">{{ $reply->name }}</span>
                                    <span class="date mb-10">{{ $reply->created_at->format('F j, Y, g:i a') }}</span>
                                    <p class="mb-20">{{ $reply->comment }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="live-comment-widget mt-80 mt-xs-60">
                    <h3 class="mb-10">Leave a Comment</h3>
                    <p>Your email address will not be published. Required fields are marked *</p>

                    @if (Auth::check())
                    <form action="{{ route('comments.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="live-comment-widget__form">
                            <div class="row g-20">
                                <div class="col-xl-6">
                                    <div class="live-comment-widget__form-input">
                                        <label>Name *</label>
                                        <input name="name" id="name" type="text" required>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="live-comment-widget__form-input">
                                        <label>Email *</label>
                                        <input name="email" id="email" type="email" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="live-comment-widget__form-input">
                                        <div class="validation__wrapper-up position-relative">
                                            <label>Comment *</label>
                                            <textarea name="comment" id="textarea" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="rr-btn">Post Comment</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    @else
                    <p>You must be <a href="{{ route('login') }}">logged in</a> to leave a comment.</p>
                    @endif
                </div>

            </div>
        </div>

        {{-- <div class="col-xl-4">
                    <div class="sidebar sidebar-rr-sticky">
                        <div class="sidebar__widget">
                            <h4 class="sidebar__widget-title">Search here</h4>
                            <div class="sidebar__widget-search">
                                <div class="search__bar">
                                    <input type="text" id="search" placeholder="Search">
                                    <button>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.22221 13.4444C10.6586 13.4444 13.4444 10.6586 13.4444 7.22221C13.4444 3.78578 10.6586 1 7.22221 1C3.78578 1 1 3.78578 1 7.22221C1 10.6586 3.78578 13.4444 7.22221 13.4444Z" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15.0005 15.0005L11.6172 11.6172" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                            
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__widget">
                            <h4 class="sidebar__widget-title">Category</h4>
                            <div class="sidebar__widget-category">
                                <a href="blog-details.html">Product Design <span>(02)</span></a>
                                <a href="blog-details.html">Mobile Solutions <span>(06)</span></a>
                                <a href="blog-details.html">Branding Design <span>(09)</span></a>
                                <a href="blog-details.html">Custom Solutions <span>(04)</span></a>
                                <a href="blog-details.html">Digital Marketing <span>(07)</span></a>
                            </div>
                        </div>
                        <div class="sidebar__widget">
                            <h4 class="sidebar__widget-title">Recent Posts</h4>
                            <div class="sidebar-post__wrapper">
                                <div class="sidebar__widget-post">
                                    <a href="blog-details.html" class="sidebar__widget-post__thum">
                                        <img src="assets/imgs/blog-details/post-1.jpg" class="img-fluid" alt="image not found">
                                    </a>
                                    <div class="sidebar__widget-post__content">
                                        <ul class="sidebar__widget-post__content-meta">
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15 8C15 11.864 11.864 15 8 15C4.136 15 1 11.864 1 8C1 4.136 4.136 1 8 1C11.864 1 15 4.136 15 8Z" stroke="#906E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M10.5962 10.2245L8.42623 8.92947C8.04823 8.70547 7.74023 8.16647 7.74023 7.72547V4.85547" stroke="#906E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                                    
                                                24 April 2023</li>
                                        </ul>
                                        <a href="blog-details.html">
                                            <h6 class="sidebar__widget-post__content-title">Architecture is a Visual Art, and the Buildings Speak For.</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="sidebar__widget-post">
                                    <a href="blog-details.html" class="sidebar__widget-post__thum">
                                        <img src="assets/imgs/blog-details/post-2.jpg" class="img-fluid" alt="image not found">
                                    </a>
                                    <div class="sidebar__widget-post__content">
                                        <ul class="sidebar__widget-post__content-meta">
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15 8C15 11.864 11.864 15 8 15C4.136 15 1 11.864 1 8C1 4.136 4.136 1 8 1C11.864 1 15 4.136 15 8Z" stroke="#906E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M10.5962 10.2245L8.42623 8.92947C8.04823 8.70547 7.74023 8.16647 7.74023 7.72547V4.85547" stroke="#906E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                                    
                                                24 April 2023</li>
                                        </ul>
                                        <a href="blog-details.html">
                                            <h6 class="sidebar__widget-post__content-title">Reimagine Your Living Space with Modern Interior Concepts</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="sidebar__widget-post">
                                    <a href="blog-details.html" class="sidebar__widget-post__thum">
                                        <img src="assets/imgs/blog-details/post-3.jpg" class="img-fluid" alt="image not found">
                                    </a>
                                    <div class="sidebar__widget-post__content">
                                        <ul class="sidebar__widget-post__content-meta">
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15 8C15 11.864 11.864 15 8 15C4.136 15 1 11.864 1 8C1 4.136 4.136 1 8 1C11.864 1 15 4.136 15 8Z" stroke="#906E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M10.5962 10.2245L8.42623 8.92947C8.04823 8.70547 7.74023 8.16647 7.74023 7.72547V4.85547" stroke="#906E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                                    
                                                24 April 2023</li>
                                        </ul>
                                        <a href="blog-details.html">
                                            <h6 class="sidebar__widget-post__content-title">Living Experience with Luxurious Interiors.</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="sidebar__widget">
                            <h4 class="sidebar__widget-title">Tags</h4>
                            <div class="sidebar__widget-tags">
                                <div class="tags">
                                <a href="blog-details.html">Branding</a>
                                <a href="blog-details.html">UX Design</a>
                                <a href="blog-details.html">Agency</a>
                                <a href="blog-details.html">Company</a>
                                <a href="blog-details.html">Web Design</a>
                                <a href="blog-details.html">Creative</a>
                                <a href="blog-details.html">Portfolio</a>
                                <a href="blog-details.html">Illustration</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
        </div>
        </div>
    </section>
</main>

@endsection

@section('js')
<script>
function AddtoCart(id) {

    $.ajax({
        url: '{{route("AddtoCart")}}',
        type: 'post',
        data: {
            id: id,

        },
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                window.location.href = "{{route('Front.cart')}}"
            } else {
                alert(response.msg)
            }
        },
    });
}

function AddWishlist(id) {
    $.ajax({
        url: '{{route("Store.Wishlist")}}',
        type: 'post',
        data: {
            id: id
        },
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                alert(response.msg)
            } else {
                alert(response.msg)
            }
        },
    });
}



$(document).ready(function() {
    // Show reply form
    $('.btn-reply').on('click', function() {
        const commentId = $(this).data('comment-id');
        $('#reply-form-' + commentId).toggle();
    });

    // Handle reply submission
    $('.replyCommentForm').on('submit', function(event) {
        event.preventDefault(); // Prevent default form submission
        const form = $(this);
        const commentId = form.data('comment-id');

        $.ajax({
            type: 'POST',
            url: '{{ route("comments.store") }}', // Update this to your route
            data: form.serialize(),
            success: function(response) {
                // Append the new reply to the replies section
                $('#replies-' + commentId).prepend(`
                    <div class="comment-item d-flex align-items-start comment-item__reply mb-30">
                        <div class="comment-item__img">
                            <img src="assets/imgs/blog-details/author-${response.user_id}.png" alt="image not found">
                        </div>
                        <div class="comment-item__content">
                            <span class="name">${response.name}</span>
                            <span class="date mb-10">${response.created_at}</span>
                            <p class="mb-20">${response.comment}</p>
                        </div>
                    </div>
                `);
                // Clear the reply form
                form[0].reset();
                $('#reply-form-' + commentId).hide();
            },
            error: function(xhr) {
                alert('Error: ' + xhr.responseText);
            }
        });
    });
});

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</script>


@endsection