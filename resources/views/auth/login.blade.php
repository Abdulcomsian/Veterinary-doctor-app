<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{asset('assets/css/global.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}" />
    <title>Document</title>
  </head>
  <body>
    <header>
      <nav class="container profile-nav">
        <img src="{{asset('assets/images/logo.png')}}" class="logo" alt="" />
      </nav>
    </header>

<section class="section-login-form mt-3">
      <div class="container">
        <div class="auth-profile-layout login-form">
          <header class="section-header">
            <h2 class="secondary-heading">Log In</h2>
            <p class="short-desc">
              Kindly fill in your details below to create an account
            </p>
          </header>
          <form  method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-5">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="Enter your email"  value="{{ old('email') }}" required autocomplete="email" autofocus/>
              @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
              @enderror
            </div>
            <div class="mb-5">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" placeholder="**************"/>
              @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
             <div class="row">
                <div class="col-md-6 mt-3">
                    <div class="form-check h5">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label ms-2 mt-2" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                 <div class="col-6">
                     @if (Route::has('password.request'))
                       <a class="link link--purple link-forgot-pass" href="{{ route('password.request') }}">
                           {{ __('Forgot Your Password?') }}
                       </a>
                     @endif
                 </div>
             </div>
             </div>
            <button type="submit" class="btn btn--purple btn--full mb-5">{{ __('Login') }}</button>
           
          </form>
          <div class="social-login">
            <div class="or-container">OR</div>
            <div class="btns-container mb-5">
              <a href="{{route('googleLogin')}}" class="btn btn--google-login"> <img src="/assets/images/flat-color-icons_google.svg" alt="" />Google</a>
              <a href="{{route('facebookLogin')}}"  class="btn btn--facebook-login"><img src="/assets/images/facebook-icon.svg" class="me-1" alt=""/>Facebook</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    </body>
</html>
