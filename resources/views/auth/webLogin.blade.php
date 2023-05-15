@extends('siteLayout.layout')
@section('content')
<style>
    #header {
        background: #000000;
    margin-bottom: 100px;
}
    </style>
<section id="sign-in" class="section-with-bg" style="margin-top: 70px">
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


                            <form class="pt-5" action="{{ url('/save-user') }}" method="post">
                                @csrf
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="info@example.com">
                                <label for="email">Email Address</label>
                            </div>

                            <div class="form-floating">
                                <span class="password-show-toggle js-password-show-toggle"><span
                                        class="uil"></span></span>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Password">
                                <label for="password">Password</label>
                            </div>

                            {{-- <div class="d-flex justify-content-between">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="remember">
                                    <label for="remember" class="form-check-label">Keep me logged in</label>
                                </div>
                                <div><a href="#">Forgot password?</a></div>
                            </div> --}}

                            <div class="d-grid mb-4">
                                <button type="submit" class="btn btn-primary">Log in</button>
                            </div>

                           <div class="mb-2">Don’t have an account? <a href="{{ url('/user-register') }}">Sign up</a></div>

                            {{-- <div class="social-account-wrap">
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
                            </div> --}}

                        </form>
                    </div>
                </div>
            </div>

    </section>
        <!-- End Buy Ticket Section -->

@endsection
