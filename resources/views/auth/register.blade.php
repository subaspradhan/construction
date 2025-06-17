
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
                            <a href="index.html">
                                <div class="logo">
                                    <img class="logo-size" src="{{asset('frontend/login/images/logo-black.svg')}}" alt="">
                                </div>
                            </a>
                        </div>
                        
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="E-mail Address" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <input class="form-control @error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="Password" required autocomplete="new-password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                            <div class="form-button d-flex">
                                <button id="submit" type="submit" class="btn btn-primary">Register</button>
                                <a href="/login" class="btn btn-outline-primary">Login</a>
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