
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/login/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/login/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/login/css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/login/css/iofrm-theme33.css')}}">
</head>
<body style="overflow:hidden;">
    <div class="form-body">
        <div class="iofrm-layout">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="{{asset('frontend/login/images/graphic10.svg')}}" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items with-bg">
                        <div class="website-logo-inside logo-normal">
                            <a href="/">
                                <div class="">
                                    <img class="logo-size" src="{{asset('frontend/assets/img/logo.png')}}" alt="">
                                </div>
                            </a>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                             @csrf
                            <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" placeholder="E-mail Address"  value="{{ old('email') }}" required autocomplete="email" autofocus>
                             @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required autocomplete="current-password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link p-0" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-button d-flex">
                                <button id="submit" type="submit" class="btn btn-primary">Login</button>
                                <!-- <a href="/register" class="btn btn-outline-primary">Create account</a> -->
                            </div>
                        </form>
                        <!-- <div class="other-links">
                            <span>Or login with</span><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-google"></i></a><a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{asset('frontend/login/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/login/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/login/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/login/js/main.js')}}"></script>
</body>

</html>
