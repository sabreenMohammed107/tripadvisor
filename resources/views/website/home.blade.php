@extends('siteLayout.layout')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos-delay="100">
            <h1 class="mb-4 pb-0"><span>{{ $company->title }}</span> </h1>
            <p class="mb-4 pb-0">{{ $company->subtitle }}</p>
            <a href="https://youtu.be/F1os31eQABg" class="glightbox play-btn mb-4"></a>
            <a href="{{ url('/') }}#about" class="about-btn scrollto">About true trip</a>
            <!--search-->
            <form action="{{ route('search') }}" method="GET">
            <div class="wrapper">
                <div class="search-input">
                    <input type="text" name="search" placeholder="Search by hotel name..">

                        <input type="submit" name="" value="search">

                        <div class="autocom-box">
                            <!-- here list are inserted from javascript -->
                        </div>
                        <div class="icon"><i class="fas fa-search"></i></div>
                </div>
            </div>
            </form>
        </div>


    </section><!-- End Hero Section -->

    {{-- <div class="tm-section tm-bg-img" id="tm-section-1">
        <div class="tm-bg-white ie-container-width-fix-2">
            <div class="container ie-h-align-center-fix">
                <div class="row">
                    <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
                        <form action="index.html" method="get" class="tm-search-form tm-section-pad-2">
                            <div class="form-row tm-search-form-row">
                                <div class="form-group tm-form-element tm-form-element-100">
                                    <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>
                                    <input name="city" type="text" class="form-control" id="inputCity"
                                        placeholder="Type your destination...">
                                </div>
                                <div class="form-group tm-form-element tm-form-element-50">
                                    <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                    <input name="check-in" type="text" class="form-control" id="inputCheckIn"
                                        placeholder="Check In">
                                </div>
                                <div class="form-group tm-form-element tm-form-element-50">
                                    <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                    <input name="check-out" type="text" class="form-control" id="inputCheckOut"
                                        placeholder="Check Out">
                                </div>
                            </div>
                            <div class="form-row tm-search-form-row">
                                <div class="form-group tm-form-element tm-form-element-2">
                                    <select name="adult" class="form-control tm-select" id="adult">
                                        <option value="">Adult</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <i class="fa fa-2x fa-user tm-form-element-icon"></i>
                                </div>
                                <div class="form-group tm-form-element tm-form-element-2">
                                    <select name="children" class="form-control tm-select" id="children">
                                        <option value="">Children</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <i class="fa fa-user tm-form-element-icon tm-form-element-icon-small"></i>
                                </div>
                                <div class="form-group tm-form-element tm-form-element-2">
                                    <select name="room" class="form-control tm-select" id="room">
                                        <option value="">Room</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <select name="room" class="form-control tm-select" id="room">
                                        <option value="">suites</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <i class="fa fa-2x fa-bed tm-form-element-icon"></i>
                                </div>
                                <div class="form-group tm-form-element tm-form-element-2">
                                    <button type="submit" class="btn btn-primary tm-btn-search">Check
                                        Availability</button>
                                </div>
                            </div>
                            <div class="form-row clearfix pl-2 pr-2 tm-fx-col-xs">
                                <p class="tm-margin-b-0">A Best Place To Enjoy Your Life.</p>
                                <a href="#"
                                    class="ie-10-ml-auto ml-auto mt-1 tm-font-semibold tm-color-primary">Need Help?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ======= Speakers Section ======= -->
    <section id="speakers">
        {{-- <div class="container">
            <div class="section-header">
                <h2>popular trips</h2>
                <p>WE GIVE YOU GUIDENCE</p>
            </div>

            <div class="row">
                @foreach ($trips as $trip)
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker" data-aos-delay="100">
                            <img src=" {{ asset('uploads/trips') }}/{{ $trip->banner }}" alt="Speaker 1"
                                class="img-fluid">
                            <div class="details">
                                <h3><a href="speaker-details.html">{{ $trip->title }}</a></h3>
                                <p>{{ $trip->cost }}$</p>
                                <p>{{ \Carbon\Carbon::parse($trip->trip_date)->isoFormat('MMM Do YYYY') }}</p>
                                <div class="stars">
                                    @for ($i = 0; $i < 5; $i++)
                                        @if ($i < $trip->avgRating())
                                            <i class="bi bi-star-fill"></i>
                                        @else
                                            <i class="bi bi-star"></i>
                                        @endif
                                    @endfor

                                </div>
                                <p>{{ count($trip->review) }} Reviews</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
 --}}




        <div class="untree_co--site-section" id="testimonials">
            <div class="container">

                <div class="row justify-content-center text-center pt-0 pb-5">
                    <div class="col-lg-6 section-heading">
                        <div class="text-center0"></div>
                        <h3 class="text-center">Testimonials</h3>
                    </div>
                </div>

                <h10>
                    <p>What our <span>users </span>say <span>about us </span>and our interface</p>
                </h10>

                <div class="row custom-row-02192 align-items-stretch">
                    @foreach ($testimonials as $testimonial)
                        <div class="col-md-6 col-lg-4 mb-5">
                            <div class="media-29191 text-center h-100">
                                <h3>{{ $testimonial->title }}</h3>
                                <p>{{ $testimonial->overview }}</p>
                                <div class="media-29191-icon">
                                    <img src="{{ asset('/website_assets/assets/img/Amenities/person-fill.svg') }}"
                                        alt="Image" class="img-fluid">
                                    {{ $testimonial->user->name ?? '' }}
                                </div>
                            </div>
                        </div>
                    @endforeach




                </div>
            </div>
        </div>
    </section>


    <!-- End Speakers Section -->




    <main id="main">




        <!-- ======= Venue Section ======= -->
        <section id="venue">

            <div class="container-fluid">

                <div class="section-header">
                    <h2>true trip</h2>
                    <p>true trip location info and gallery</p>
                </div>

                <div class="row g-0">
                    <div class="col-lg-6 venue-map">
                        <iframe src="{{ $company->google_map }}" width="600" height="450" style="border:0;"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="col-lg-6 venue-info">
                        <div class="row justify-content-center">
                            <div class="col-11 col-lg-8 position-relative">
                                <h3>{{ $company->address }}</h3>
                                <p>Find What You Need At true trip, The Biggest Travel Site In The World.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container-fluid venue-gallery-container" data-aos-delay="100">
                <div class="row g-0">

                    <div class="col-lg-3 col-md-4">
                        <div class="venue-gallery">
                            <a href="assets/img/venue-gallery/1.jpeg" class="glightbox" data-gall="venue-gallery">
                                <img src="assets/img/venue-gallery/1.jpeg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="venue-gallery">
                            <a href="assets/img/venue-gallery/2.jpeg" class="glightbox" data-gall="venue-gallery">
                                <img src="assets/img/venue-gallery/2.jpeg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="venue-gallery">
                            <a href="assets/img/venue-gallery/3.jpeg" class="glightbox" data-gall="venue-gallery">
                                <img src="assets/img/venue-gallery/3.jpeg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="venue-gallery">
                            <a href="assets/img/venue-gallery/4.jpeg" class="glightbox" data-gall="venue-gallery">
                                <img src="assets/img/venue-gallery/4.jpeg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="venue-gallery">
                            <a href="assets/img/venue-gallery/5.jpeg" class="glightbox" data-gall="venue-gallery">
                                <img src="assets/img/venue-gallery/5.jpeg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="venue-gallery">
                            <a href="assets/img/venue-gallery/6.jpeg" class="glightbox" data-gall="venue-gallery">
                                <img src="assets/img/venue-gallery/6.jpeg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="venue-gallery">
                            <a href="assets/img/venue-gallery/7.jpeg" class="glightbox" data-gall="venue-gallery">
                                <img src="assets/img/venue-gallery/7.jpeg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="venue-gallery">
                            <a href="assets/img/venue-gallery/8.jpeg" class="glightbox" data-gall="venue-gallery">
                                <img src="assets/img/venue-gallery/8.jpeg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </section><!-- End Venue Section -->



        <!-- ======= Hotels Section ======= -->
        <section id="hotels" class="section-with-bg">

            <div class="container">
                <div class="section-header">
                    <h2>All Hotels</h2>
                    <p>Her are some nearby hotels</p>
                </div>

                <div class="row" data-aos-delay="100">
@foreach ($hotels as $hotel)
<div class="col-lg-4 col-md-6">
    <div class="hotel">
        <div class="hotel-img">
            <img src="{{ asset('uploads/hotels') }}/{{ $hotel->banner }}"
                alt="Hotel 1" class="img-fluid">
        </div>
        <h3><a href="{{ url('/single-hotel/'.$hotel->id) }}">{{ $hotel->title }}</a></h3>
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
        <P>{{ count($hotel->review) }} Reviews</P>
        <p>{{ $hotel->address }}</p>
        {{-- <form name="comment" method="post" action="comment.php" onSubmit="return validation()">
            <table width="500" border="0" cellspacing="3" cellpadding="3"
                style="margin:auto;">
                <tr>
                    <td align="right" id="one"></td>
                    <td>
                        <textarea name="message" id="tmessageid"></textarea>
                    </td>
                </tr>
                <tr>
                    <td align="right" id="one"></td>
                    <td><input type="submit" name="submit" id="submit" value="Comment">
                    </td>
                </tr>
            </table>
        </form> --}}
    </div>
</div>
@endforeach



                </div>
            </div>


        </section><!-- End Hotels Section -->

        {{-- <section id="amenities">
        <div class="amenities-container" data-aos="zoom-in" data-aos-delay="100"></div>
        <div class="untree_co--site-section">
            <div class="container">

                <div class="row justify-content-center text-center pt-0 pb-5">
                    <div class="col-lg-6 section-heading" >
                        <div class="text-center0"></div>
                        <h3 class="text-center">Hotel Amenities</h3>
                    </div>
                </div>

                <div class="row custom-row-02192 align-items-stretch">
                    <div class="col-md-6 col-lg-4 mb-5"  data-aos-delay="100">
                        <div class="media-29191 text-center h-100">
                            <div class="media-29191-icon">
                                <img src="assets/img/Amenities/parking.svg" alt="Image" class="img-fluid">
                            </div>
                            <h3>Free Self-Parking</h3>
                            <p>The parking system allows parking services to be used also by the public without
                                limiting hotel guests in any way. The system is able to monitor the occupancy of car
                                parks and via a screen placed at the entrance.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-5"  data-aos-delay="200">
                        <div class="media-29191 text-center h-100">
                            <div class="media-29191-icon">
                                <img src="assets/img/Amenities/internet.svg" alt="Image" class="img-fluid">
                            </div>
                            <h3>High speed Internet</h3>
                            <p>High Speed Internet Access & Hospitality WiFi Custom-designed to Match Your Needs.
                                Hotel Internet Services provides cutting-edge, robust high speed internet.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5"  data-aos-delay="100">
                        <div class="media-29191 text-center h-100">
                            <div class="media-29191-icon">
                                <img src="assets/img/Amenities/wifi.svg" alt="Image" class="img-fluid">
                            </div>
                            <h3>Complimentary WiFi in public areas</h3>
                            <p>The free and fast WiFi enabled guests to work from the hotel, meaning they didn't
                                need to leave and spend money at the coffee shop, when they could stay and work from
                                their hotel room.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-5"  data-aos-delay="200">
                        <div class="media-29191 text-center h-100">
                            <div class="media-29191-icon">
                                <img src="assets/img/Amenities/elevator.svg" alt="Image" class="img-fluid">
                            </div>
                            <h3>Elevators</h3>
                            <p>The cabin space of the elevator can accommodate a number of rules from here. The
                                advantages of other panoramic elevators are the quality and strength of the machine
                                in order to bear the burden of materials in the elevator industry and the relatively
                                large number of passengers inside the shopping malls.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-5"  data-aos-delay="100">
                        <div class="media-29191 text-center h-100">
                            <div class="media-29191-icon">
                                <img src="assets/img/Amenities/partners.svg" alt="Image" class="img-fluid">
                            </div>

                            <h3>Meeting rooms</h3>
                            <p>Meeting rooms are not just about the actual room where the meeting takes place.
                                Having ancillary spaces such as a foyer that can be used as a reception area, an
                                open area, garden or terrace which can be used to serve light snacks and drinks
                                during breaks, and even a cloakroom can be such an added advantage.
                                Especially so if your meeting is long or runs over multiple days, like a conference.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5"  data-aos-delay="200">
                        <div class="media-29191 text-center h-100">
                            <div class="media-29191-icon">
                                <img src="assets/img/Amenities/washing-machine.svg" alt="Image"
                                    class="img-fluid">
                            </div>
                            <h3>Laundry and Valet service</h3>
                            <p>Valet service is performed by the valet who is assigned for collecting soiled linen
                                and returning clean linen to the valet service area for sorting, tagging.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}

        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="text-center" style="z-index: 99;">About Us</div>
                    <div class="col-lg-6" style="z-index: 99;">
                        <h2>What we are?</h2>
                        <p>T{{ $company->what_we_are }}</p>
                    </div>
                    <div class="col-lg-3" style="z-index: 99;">
                        <h3>Where</h3>
                        <p>{{ $company->where }}</p>
                    </div>
                    <div class="col-lg-3" style="z-index: 99;">
                        <h3>When</h3>
                        <p>{{ $company->when }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="text-center" style="z-index: 99; ">WE GIVE YOU GUIDENCE</div>

                    <div class="col-lg-4 col-md-6" style="z-index: 99; ">
                        <div class="hotel">
                            <div class="hotel-img">
                                <img src="{{ asset('uploads/guidences') }}/{{ $guidences[0]->image }}"
                                    alt="Hotel 1" class="img-fluid">
                            </div>
                            <P>{{ $guidences[0]->text }}</P>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" style="z-index: 99; ">
                        <p>{{ $guidences[1]->text }}</p>
                        <div class="hotel" style="z-index: 99; ">
                            <div class="hotel-img">
                                <img src="{{ asset('uploads/guidences') }}/{{ $guidences[1]->image }}"
                                    alt="Hotel 2" class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" style="z-index: 99; ">
                        <div class="hotel">
                            <div class="hotel-img">
                                <img src="{{ asset('uploads/guidences') }}/{{ $guidences[2]->image }}"
                                    alt="Hotel 3" class="img-fluid">
                            </div>
                            <p>{{ $guidences[2]->text }}.</p>
                        </div>
                    </div>








        </section><!-- End About Section -->


        <!-- =======  F.A.Q Section ======= -->
        <section id="faq">

            <div class="container">

                <div class="section-header">
                    <h2>FAQ </h2>
                </div>

                <div class="row justify-content-center" data-aos-delay="100">
                    <div class="col-lg-9">

                        <ul class="faq-list">
                            @foreach ($faqs as $faq)
                                <li>
                                    <div data-bs-toggle="collapse" class="collapsed question"
                                        href="#faq{{ $faq->id }}">{{ $faq->question }} ?<i
                                            class="bi bi-chevron-down icon-show"></i><i
                                            class="bi bi-chevron-up icon-close"></i></div>
                                    <div id="faq{{ $faq->id }}" class="collapse" data-bs-parent=".faq-list">
                                        <p>
                                            {{ $faq->answer }}.
                                        </p>
                                    </div>
                                </li>
                            @endforeach


                        </ul>

                    </div>
                </div>

            </div>

        </section><!-- End  F.A.Q Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery">

            <div class="container">
                <div class="section-header">
                    <h2>Gallery</h2>
                    <p>Check our gallery from the recent events</p>
                </div>
            </div>

            <div class="gallery-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    @foreach ($galleries as $gallery)
                    <div class="swiper-slide"><a href="{{ asset('uploads/galleries') }}/{{ $gallery->image }}" class="gallery-lightbox"><img
                        src="{{ asset('uploads/galleries') }}/{{ $gallery->image }}" class="img-fluid" alt=""></a></div>
                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </section><!-- End Gallery Section -->

        <!-- ======= Subscribe Section ======= -->
        <section id="subscribe">
            <div class="container" >
                <div class="section-header">
                    <h2>KEEP IN TOUCH</h2>
                    <p>ITS TIME FOR <span>ADVENTURES</span> & EXPERIENCES.</p>
                    @if(Session::has('flash_success'))

                    <div class="alert alert-success alert-dismissible fade show" role="alert"

                    <strong ><i class="fa fa-check-circle"></i> {{session('message')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>

                @endif
                </div>

                <form action="{{url('/sendNewsLetter')}}" method="POST">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-10 d-flex">
                            <input type="email" name="email" class="form-control" style="z-index: 999" placeholder="Enter your Email">
                            <button type="submit" style="z-index: 999" class="ms-2">Subscribe</button>
                            <label for="email"></label>
                        </div>
                    </div>
                </form>

            </div>
        </section><!-- End Subscribe Section -->

        <!-- ======= .sign-in Section ======= -->
        {{-- <section id="sign-in" class="section-with-bg">
        <div class="container" >

            <div class="section-header">
                <h2>Sign In</h2>
                <p>If you already have account </p>
            </div>

            <div class="site-wrap d-md-flex align-items-stretch">
                <div class="bg-img" style="background-image: url(assets/img/img-bg-1.jpg)"></div>
                <div class="form-wrap">
                    <div class="form-inner">
                        <h1 class="title">Login</h1>
                        <p class="caption mb-4">Please enter your login details to sign in.</p>

                        <form action="#" class="pt-3">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email"
                                    placeholder="info@example.com">
                                <label for="email">Email Address</label>
                            </div>

                            <div class="form-floating">
                                <span class="password-show-toggle js-password-show-toggle"><span
                                        class="uil"></span></span>
                                <input type="password" class="form-control" id="password"
                                    placeholder="Password">
                                <label for="password">Password</label>
                            </div>

                            <div class="d-flex justify-content-between">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="remember">
                                    <label for="remember" class="form-check-label">Keep me logged in</label>
                                </div>
                                <div><a href="#">Forgot password?</a></div>
                            </div>

                            <div class="d-grid mb-4">
                                <button type="submit" class="btn btn-primary">Log in</button>
                            </div>

                            <div class="mb-2">Don’t have an account? <a href="signup.html">Sign up</a></div>

                            <div class="social-account-wrap">
                                <h4 class="mb-4"><span>or continue with</span></h4>
                                <ul class="list-unstyled social-account d-flex justify-content-between">
                                    <li><a href="#"><img src="assets/img/icon-google.svg"
                                                alt="Google logo"></a></li>
                                    <li><a href="#"><img src="assets/img/icon-facebook.svg"
                                                alt="Facebook logo"></a></li>
                                    <li><a href="#"><img src="assets/img/icon-apple.svg"
                                                alt="Apple logo"></a></li>
                                    <li><a href="#"><img src="assets/img/icon-twitter.svg"
                                                alt="Twitter logo"></a></li>
                                </ul>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

    </section> --}}
        <!-- End Buy Ticket Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="section-bg">

            <div class="container">

                <div class="section-header">
                    <h2>Contact Us</h2>
                    <p>You can contact us through the following steps.</p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <address>{{ $company->address }}</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="bi bi-phone"></i>
                            <h3>Phone Number</h3>
                            <p><a href="tel:+155895548855">{{ $company->phone }}</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@example.com">{{ $company->email }}</a></p>
                        </div>
                    </div>

                </div>
                @if(Session::has('flash_success'))

                <div class="alert alert-success alert-dismissible fade show" role="alert"

                <strong ><i class="fa fa-check-circle"></i> {{session('flash_success')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

            @endif
                <div class="form">


                    <form action="{{ route('contact.store') }}" method="post" role="form" class="">

                            @csrf
                              <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="form-group col-md-6 mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="number" class="form-control" name="phone" id="subject"
                                placeholder="Phone" required>
                        </div>
                        {{-- <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" required>
                        </div> --}}
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        {{-- <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div> --}}
                        <div class="text-center mt-2"><button class="bsubmit" type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
