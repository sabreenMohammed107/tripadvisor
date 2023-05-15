@extends('siteLayout.layout')

@section('content')
<style>
    #header {
        background: #000000;
    margin-bottom: 100px;
}
.navbar a{
    color: #DDD;
}
.review{
    border: 0;
    padding: 9px 25px;
    cursor: pointer;
    background: #14db91f7;
    color: #fff;
    transition: all 0.3s ease;
    outline: none;
    font-size: 14px;
    border-radius: 50px;
}
.review:hover{
    background: #e0072f;
    color: #FFF;
}
</style>
<section id="spaekers-details pt-5" style="margin-top: 200px;margin-bottom: 200px">
    <div class="container">
      <div class="section-header">
        <h2>Hotel Details</h2>
        <p>Simple information.</p>
      </div>

      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('uploads/hotels') }}/{{ $hotel->banner }}" alt="Speaker 1" class="img-fluid">
        </div>

        <div class="col-md-6">
          <div class="details">
            <h2>{{ $hotel->title }}</h2>
            <p>{{ $hotel->cost }}$</p>
            <div class="stars">
                @for ($i = 0; $i < 5; $i++)
                @if ($i < $hotel->avgRating())
                    <i class="bi bi-star-fill"></i>
                @else
                    <i class="bi bi-star"></i>
                @endif
                @endfor
            </div>
            <p>{{ count($hotel->review) }} Reviews</p>
            <p>{{ $hotel->address }}</p>
            <div class="social">
              <a href="{{ $hotel->youtube }}"><i class="bi bi-youtube"></i></a>
              <a href="{{ $hotel->facebook }}"><i class="bi bi-facebook"></i></a>
              <a href="{{ $hotel->instagram }}"><i class="bi bi-instagram"></i></a>
              <a href="{{ $hotel->linkedin }}"><i class="bi bi-linkedin"></i></a>
            </div>
            <p>{{ $hotel->trip_brief }}</p>
            @if (Auth::user() && Auth::user()->type == 'user')
            <button type="button" class="review" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            <i class="fa-solid fa-plus"></i>addComment
        </button>
        @else
            <li class="nav-item">

                <a href="{{ url('/user-login') }}" class="review" >addComment </a>

            </li>
        @endif



          </div>
        </div>

      </div>
    </div>

  </section>
</section>
<!-- rooms section -->
<section class="reviews container">
    <div class="review_heading">
        <h5> hotel review</h5>
        <!-- modal -->
        <!-- Button trigger modal -->
        {{-- @if (session()->get('SiteUser')) --}}

        {{-- @else --}}
            {{-- <a href="{{ route('siteLogin') }}" class="btn add_comment_button"> <i class="fa-solid fa-plus"></i> {{ __('links.addComment') }}</a> --}}
        {{-- @endif --}}


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ Url('/review/add') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">addComment</h5>
                            <input type="hidden" name="hotel_id" value="{{ $hotel->id }}" />
                            <button type="button"  class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="rating" id="rating_stars">
                                <i onclick="changeRate(1)" class="bi bi-star-fill rate_1"></i>
                                <i onclick="changeRate(2)" class="bi bi-star-fill rate_2"></i>
                                <i onclick="changeRate(3)" class="bi bi-star-fill rate_3"></i>
                                <i onclick="changeRate(4)" class="bi bi-star-fill rate_4"></i>
                                <i onclick="changeRate(5)" class="bi bi-star-fill rate_5"></i>
                                <input type="hidden" value="0" name="rate_val" />
                            </div>
                            <div class="form-floating comment_input">
                                <textarea class="form-control" name="review_text"
                                placeholder="Leave a comment here" id="floatingTextarea2"
                                    style="height: 100px"></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary comment_pop_btn">Add Comment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @foreach ($reviews as $rev)
        <div class="review_details">
            <img width="100" src="{{ asset('website_assets/assets/img/logo.png') }}" alt="profile picture ">

            <div class="review_info">
                <div class="heading">

                    <div class="rating">

                        @for ($i = 0; $i < $rev->review_stars; $i++)
                        <i class="bi bi-star-fill"></i>
                        @endfor
                        @for ($i = 5; $i > $rev->review_stars; $i--)
                        <i class="bi bi-star"></i>
                        @endfor
                    </div>
                </div>
                <p>
                    {{ $rev->review_text }}
                </p>
            </div>

        </div>
    @endforeach


</section>
<!--  ending page  -->
@if(count($amenities) > 0)
  <section id="amenities">
    <div class="amenities-container" ></div>
    <div class="untree_co--site-section">
      <div class="container">

        <div class="row justify-content-center text-center pt-0 pb-5">
          <div class="col-lg-6 section-heading" >
            <div class="text-center0"></div>
            <h3 class="text-center">Hotel Amenities</h3>
          </div>
        </div>

        <div class="row custom-row-02192 align-items-stretch">
            @foreach ($amenities as $ament)


          <div class="col-md-6 col-lg-4 mb-5"  >
            <div class="media-29191 text-center h-100">
              <div class="media-29191-icon">
                <img src="{{ asset('uploads/amenities') }}/{{ $ament->icon }}" alt="Image" class="img-fluid">
              </div>
              <h3>{{ $ament->title }}</h3>
              <p>{{ $ament->text }}</p>
            </div>
          </div>
          @endforeach


        </div>
      </div>
    </div>
  </section>
  @endif
@endsection
@section('adds_js')
<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>

<script>

function changeRate(value) {
    debugger;
    $('#rating_stars').children('i').each(function(i) {
        // if(i < value){
        //     this.removeClass("fa-regular");
        //     this.addClass("fa-solid");
        // }else{
        //     this.removeClass("fa-solid");
        //     this.addClass("fa-regular");
        // }
        console.log(this);

    });
    for (let index = 0; index < 5; index++) {
        if (index < value) {
            $(".rate_" + (index + 1)).removeClass("bi-star");
            $(".rate_" + (index + 1)).addClass("bi-star-fill");
        } else {
            $(".rate_" + (index + 1)).removeClass("bi-star-fill");
            $(".rate_" + (index + 1)).addClass("bi-star");
        }
        $("input[name=rate_val]").val(value);
    }
}
</script>
@endsection
