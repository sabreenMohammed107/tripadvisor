<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- facebook meta tags -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Trip Advisor - Online hub for booking  trourism trips" />
    <meta property="og:description"
        content="Trip Advisor providing you online planning  your  next vacations and  booking trips around the world" />
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    <link rel="canonical" href="{{ url()->current() }}" />

    <meta property="og:url" content="https://Trip-Advisorcom/" />
    <meta property="og:image" content="./images/homePage/logo.webp" />
    <meta property="og:image:alt" content="Trip Advisor - Online hub for booking  trourism trips" />
    <meta property="og:site_name" content="Trip-Advisor.com" />
    <!-- twitter meta tags -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="Trip-Advisor.com">
    <meta name="twitter:creator" content="Trip-Advisor.com">
    <meta name="twitter:title" content="Trip Advisor - Online hub for booking  trourism trips" />
    <meta name="twitter:description"
        content="Trip Advisor providing you online planning  your  next vacations and  booking trips around the world " />
    <meta name="twitter:url" content="https://Trip-Advisor.travel/" />
    <meta name="twitter:image" content="/images/homePage/logo.webp" />
    <meta property="twitter:image:alt" content="Trip Advisor - Online hub for booking  trourism trips" />
    <!-- general meta tags  -->
    <meta name="canonical_tag" content="https://Trip-Advisor.travel/" />
    <meta name="title" content="Trip Advisor - Online hub for booking  trourism trips" />
    <meta name="description"
        content="Trip Advisor providing you online planning  your  next vacations and  booking trips around the world" />
    <meta name="image" content="/images/homePage/logo.webp" />
    <meta property="image:alt" content="Trip Advisor - Online hub for booking  trourism trips" />
    <meta name="keywords"
        content="hotels tours transfer visa contact trip destination adults child nights checkin room explore adventure experience offers travel packages agents acitivties hotel  transfer honemoon safari pharonic newsletter   " />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicons -->
    <link href="{{ asset('/website_assets/assets/img/favicon.jpg')}}" rel="icon">
    <link href="{{ asset('/website_assets/assets/img/apple-touch-icon.jpg')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/website_assets/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('/website_assets/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/website_assets/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('/website_assets/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/website_assets/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('/website_assets/assets/css/style.css')}}" rel="stylesheet">
    @yield('adds_css')
    <!-- =======================================================
  * Template Name: TheEvent - v4.10.0
  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .bsubmit {
    background: #14db91f7;
    border: 0;
    padding: 10px 40px;
    color: #fff;
    transition: 0.4s;
    border-radius: 50px;
    cursor: pointer;
}
.bsubmit:hover {
    background: #e0072f;
}
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center ">
        <div class="container-fluid container-xxl d-flex align-items-center">

            <div id="logo" class="me-auto">
                <!-- Uncomment below if you prefer to use a text logo -->
                <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
                <a href="index.html" class="scrollto"><img src="{{ asset('website_assets/assets/img/logo.png') }}" alt="" title=""></a>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto " href="{{ url('/') }}#hero">Home</a></li>
                    {{-- <li><a class="nav-link scrollto" href="{{ url('/') }}#venue">Trips</a></li> --}}
                    <li><a class="nav-link scrollto" href="{{ url('/') }}#hotels">Hotels</a></li>
                    {{-- <li><a class="nav-link scrollto" href="#amenities">Amenities</a></li> --}}
                    <li><a class="nav-link scrollto" href="{{ url('/') }}#about">About Us</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('/') }}#faq">FAQ</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('/') }}#gallery">Gallery</a></li>

                    <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
          </ul>
        </li> -->
                    <li><a class="nav-link scrollto" href="{{ url('/') }}#contact">Contact Us</a></li>
                    @if (Auth::user() && Auth::user()->type == 'user')
                    <li><a class="nav-link scrollto" href="{{ url('/') }}">welcome {{ Auth::user()->name ?? ''}}</a></li>
                    @endif
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            @if (Auth::user() && Auth::user()->type == 'user')

            <a href="" class="sign-in scrollto" href="{{ route('user-logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" >Logout</a>
  <form id="logout-form" action="{{ route('user-logout') }}" method="POST"
  style="display: none;">
  @csrf
</form>
        @else
            <li class="nav-item">

                <a href="{{ url('/user-login') }}" class="sign-in scrollto">Sign In</a>

            </li>
        @endif
            {{-- <a class="sign-in scrollto" href="#sign-in">Sign In/Sign Up</a> --}}

        </div>
    </header><!-- End Header -->

    @yield("content")

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <img src="{{ asset('/website_assets/assets/img/logo.png')}}" alt="Trip Advisor">
                        <p>{{ $company->overview }}</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}#hero">Home</a></li>
                            {{-- <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}#venue">Trips</a></li> --}}
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}#hotels">Hotels</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}#testimonials">Testmonials</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}#about">About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}#faq">FAQ</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}#gallery">Gallery</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}#contact">Contact us</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            {{ $company->address }}
                            <br>
                            <strong>Phone:</strong>{{ $company->phone }}<br>
                            <strong>Email:</strong> {{ $company->email }}<br>
                        </p>

                        <div class="social-links">
                            <a href="{{ $company->youtube }}" class="twitter"><i class="bi bi-youtube"></i></a>
                            <a href="{{ $company->facebook }}" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="{{ $company->instagram }}" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="{{ $company->google_plus }}" class="google-plus"><i class="bi bi-google"></i></a>
                            <a href="{{ $company->linkedin }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Tripadvisor</strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
      -->
                Designed by <a href="https://bootstrapmade.com/">true trip Team</a>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/website_assets/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('/website_assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('/website_assets/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('/website_assets/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('/website_assets/assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/website_assets/assets/js/main.js')}}"></script>
    <script src="{{ asset('/website_assets/assets/js/script.js')}}"></script>
    <script src="{{ asset('/website_assets/assets/js/sugestions.js')}}"></script>
    @yield("adds_js")
</body>

</html>
