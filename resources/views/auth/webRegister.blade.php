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
            <h2>Sign up</h2>
            <p>Create your account in seconds. </p>
        </div>

        <form class="pt-5" action="{{ url('/save-register') }}" method="post">
            @csrf

                <div class="form-floating">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Full Name">
                    <label for="name">Full Name</label>
                </div>

                <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="email" placeholder="info@example.com">
                    <label for="email">Email Address</label>
                </div>

                <div class="form-floating">
                    <span class="password-show-toggle js-password-show-toggle"><span class="uil"></span></span>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label for="remember" class="form-check-label">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
                    </div>
                </div>

                <div class="d-grid mb-4">
                    <button type="submit" class="btn btn-primary">Create an account</button>
                </div>

                <div class="mb-2">Already a member? <a href="{{ url('/user-login') }}">Log in</a></div>

                {{-- <div class="social-account-wrap">
                    <h4 class="mb-4"><span>or continue with</span></h4>
                    <ul class="list-unstyled social-account d-flex justify-content-between">
                        <li><a href="#"><img src="assets/img/icon-google.svg" alt="Google logo"></a></li>
                        <li><a href="#"><img src="assets/img/icon-facebook.svg" alt="Facebook logo"></a></li>
                        <li><a href="#"><img src="assets/img/icon-apple.svg" alt="Apple logo"></a></li>
                        <li><a href="#"><img src="assets/img/icon-twitter.svg" alt="Twitter logo"></a></li>
                    </ul>
                </div> --}}

            </form>
        </div>


</section>
@endsection
