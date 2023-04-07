<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>Register | Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Coderthemes" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app-creative-dark.min.css') }}" rel="stylesheet" type="text/css">

</head>

<body class="authentication-bg pb-0" data-layout-config='{"darkMode":false}'>

<div class="auth-fluid" style="background: url('{{asset('/images/hero_bg_1.jpg')}}') center !important">
    <!--Auth fluid left content -->
    <div class="auth-fluid-form-box">
        <div class="align-items-center d-flex h-100">
            <div class="card-body">

                <!-- title-->
                <h4 class="mt-0">Free Sign Up</h4>
                <p class="text-muted mb-4">Don't have an account? Create your account, it takes less than a minute</p>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- form -->
                <form action="{{route('registering')}}" method="post">
                    @csrf
                    @guest
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input class="form-control" type="text" id="name" placeholder="Enter your name" required
                                   name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input class="form-control" type="email" id="email" required
                                   placeholder="Enter your email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" required id="password"
                                   placeholder="Enter your password" name="password">
                        </div>
                    @endguest

                    @auth
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input class="form-control" type="text" id="name" placeholder="Enter your name" disabled
                                   name="name" value="{{auth()->user()->name}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input class="form-control" type="email" id="email" disabled
                                   placeholder="Enter your email" name="email" value="{{auth()->user()->email}}">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" required id="password"
                                   placeholder="Enter your password" name="password">
                        </div>
                    @endauth

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                            <label class="custom-control-label" for="checkbox-signup">I accept <a
                                    href="javascript: void(0);" class="text-muted">Terms and Conditions</a></label>
                        </div>
                    </div>
                    <div class="form-group mb-0 text-center">
                        <button class="btn btn-primary btn-block" type="submit"><i class="mdi mdi-account-circle"></i>
                            Sign Up
                        </button>
                    </div>
                </form>
                <!-- end form-->

                <!-- Footer-->
                <footer class="footer footer-alt">
                    <p class="text-muted">Already have account? <a href="{{route('login')}}" class="text-muted ml-1"><b>Log
                                In</b></a></p>
                </footer>

            </div> <!-- end .card-body -->
        </div> <!-- end .align-items-center.d-flex.h-100-->
    </div>
    <!-- end auth-fluid-form-box-->

</div>
<!-- end auth-fluid-->

<!-- bundle -->
<script src="{{ asset('js/vendor.min.js') }}"></script>
<script src="{{ asset('js/app.min.js') }}"></script>

</body>

</html>
