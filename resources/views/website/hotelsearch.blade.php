@extends('siteLayout.layout')

@section('adds_css')
<link href="{{ asset('/website_assets/assets/css/variables.css')}}" rel="stylesheet" >
<link href="{{ asset('/website_assets/assets/css/main.css')}}" rel="stylesheet" >
@endsection
@section('content')
<style>
    #header {
        background: #000000;
    margin-bottom: 100px;
}
.navbar a{
    color: #DDD;
}
    </style>
<section id="search-result" class="search-result pt-5" style="margin-top: 80px">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h3 class="category-title">Search Results</h3>
          @foreach ($hotels as $hotel)
          <div class="d-md-flex post-entry-2 small-img">
            <a href="{{ url('/single-hotel/'.$hotel->id) }}" class="me-4 thumbnail">
              <img src="{{ asset('uploads/hotels') }}/{{ $hotel->banner }}" alt="" class="img-fluid">
            </a>
            <div>
              <div class="post-meta"><span class="date">Review</span> <span class="mx-1">•</span> <span>Save</span><span class="mx-1">•</span> <span>Share</span><div class="stars">
                @for ($i = 0; $i < 5; $i++)
                @if ($i < $hotel->avgRating())
                    <i class="bi bi-star-fill"></i>
                @else
                    <i class="bi bi-star"></i>
                @endif
            @endfor
              </div>
                <p>{{ $hotel->cost }}$</p>
                <p>{{ $hotel->address }}</p>
                </div>
              <h3><a href="{{ url('/single-hotel/'.$hotel->id) }}">{{ $hotel->title }}</a></h3>
              <p>{{ $hotel->trip_brief }}</p>

            </div>
          </div>
          @endforeach


          <!-- Paging -->
          <div class="text-start py-4">
            <div class="custom-pagination">
                <a class="prev" href="{{$hotels->previousPageUrl()}}"> &#10094;
                </a>
            @for ($i = 1; $i <= $hotels->lastPage(); $i++)
              <a href="{{ $hotels->url($i) }}" class="{{ $hotels->currentPage() == $i ? ' active' : '' }} ">{{ $i }}</a>
              @endfor

              <a class="next" href="{{$hotels->nextPageUrl()}}">
                &#10095;
            </a>
            </div>
          </div><!-- End Paging -->

        </div>


  </div></div></section>
@endsection
