<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#0061da">
    <meta name="theme-color" content="#1643a3">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- Title -->
    <title>Doctor Login</title>
    @include('Authority.layouts.head_css')
</head>

<body>
    <div class="login-img">
        <div id="global-loader"></div>
        <div class="page">
            <div class="page-single">
                <div class="container">
                    @if(Session::has('flash_message_error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{!!session('flash_message_error')!!}</strong>
                        </div>
                    @endif
                    @if(Session::has('flash_message_success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{!!session('flash_message_success')!!}</strong>
                        </div>
                    @endif
                    <div class="row authentication">
                        <div class="col col-login mx-auto">
                            <div class="text-center mb-6">
                                <img src="{{  asset('assets\images\brand\HOSPITAL.png')}}" class="h-8" alt="">
                            </div>
                            <form class="card" method="post" action="{{ url('/admin/doctor') }}">
                            	{{ csrf_field() }}
                                <div class="card-body p-6 ">
                                    <div class="card-title text-center">Login to your Account</div>
                                    <div class="input-icon form-group wrap-input">
                                        <span class="input-icon-addon search-icon">
                                            <i class="mdi mdi-account"></i>
                                        </span>
                                        <input type="email" class="form-control" placeholder="Email" name="email">
                                    </div>
                                    <div class="input-icon form-group wrap-input">
                                        <span class="input-icon-addon search-icon">
                                            <i class="zmdi zmdi-lock"></i>
                                        </span>
                                        <input type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password" name="password">
                                        <label class="form-label">
                                            <a href="forgot-password.html" class="float-right small">I forgot password</a>
                                        </label>
                                    </div>
                                    <div class="form-group mt-5">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label">Remember me</span>
                                        </label>
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                    </div>
                                    <div class="text-center text-muted mt-3">
                                        Don't have account yet? <a href="register.html">Sign up</a>
                                    </div>
                                    <div class="flex-c-m text-center mt-5">
                                        <a href="#" class="login100-social-item bg1">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#" class="login100-social-item bg2">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#" class="login100-social-item bg3">
                                            <i class="fa fa-google"></i>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard js -->
    @include('Authority.layouts.script')
</body>

</html>