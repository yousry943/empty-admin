<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset("frontend/assets/img/easy-admin.png")}}" type="image/png">
    <title>{{ config('app.name') }} | Login</title>

    <!-- Scripts -->
	  <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale()=='ar')
    <style>
      body{
        direction: rtl;
      }
    </style>
    @else
    <style>
      body{
        direction: ltr;
      }
    </style>
    @endif
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->

    <!-- Page content -->
    <div class="container mx-0 mw-100">
      <div class="row justify-content-center">

        <div class="col-lg-6 col-md-6 mt-5">
          <div class="text-center mt-5">
            <img class="mt-5 img-fluid"src="{{ asset("frontend/assets/img/easy-admin.png")}}" alt="">
          </div>
          <div class="mt-0 mx-5 mb-5">
            <div class=" px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                {{-- <h1>{{ config('app.name') }} | Login</h1> --}}
              </div>
              <form method="POST" action="{{ route('dashboard.login') }}" aria-label="{{ __('Login') }}">
                @csrf
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class=""><i class="ni ni-email-83"></i></span>
                    </div>
                    <input id="email" type="email" placeholder="{{ __('Dashboard.Email') }}" class="form-control @error('email') is-invalid @enderror"
                      name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class=""><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input id="password" type="password" placeholder="{{ __('Dashboard.Password') }}" class="form-control @error('password') is-invalid @enderror"
                      name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" type="checkbox" name="remember" id="customCheckLogin"
                    {{ old('remember') ? 'checked' : '' }}>
                  <label class="custom-control-label" for="customCheckLogin">
                    <span class="text-muted">{{ __('Dashboard.Remember me') }}</span>
                  </label>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Dashboard.Login') }}
                  </button>

                  @if (Route::has('dashboard.password.request'))
                  <a class="btn btn-link float-right" href="{{ route('dashboard.password.request') }}">
                    {{ __('Dashboard.Forgot Your Password?') }}
                  </a>
                  @endif
                </div>
              </form>
            </div>
          </div>
        </div>


        <div class="col-lg-6 col-md-6  d-none d-sm-block " id="imgdiv" style="min-height: 100vh; background-position: center; background-size: cover; background-repeat: no-repeat; ">
        </div>
      </div>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      var urls = ['{{ asset('frontend/assets/img/bg1.jpg')}}', '{{ asset('frontend/assets/img/bg2.jpg')}}'];

      var cout = 1;
      $('#imgdiv').css('background-image', 'url("' + urls[0] + '")');
      setInterval(function() {
        $('#imgdiv').css('background-image', 'url("' + urls[cout] + '")');
        cout == urls.length-1 ? cout = 0 : cout++;
      }, 3000);

    });
  </script>
</body>

</html>