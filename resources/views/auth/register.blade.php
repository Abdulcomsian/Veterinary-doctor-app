<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{asset('assets/css/global.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/register.css')}}" />
    <title>Register</title>
  </head>
  <body>
    <header>
      <nav class="container profile-nav">
        <img src="/assets/images/logo.png" class="logo" alt="" />
      </nav>
    </header>
    <section class="section-register-form mt-3">
      <div class="container">
        <div class="auth-profile-layout registration-form">
          <header class="section-header">
            <h2 class="secondary-heading">Registration</h2>
            <p class="short-desc">Kindly fill in your details below to create an account</p>
          </header>
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-5">
              <label for="username" class="form-label">Username</label>
              <input type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus id="username" placeholder="Enter your username"/>
              @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="mb-5">
              <label for="phoneNumber" class="form-label">Phone Number</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" id="phoneNumber" placeholder="555-555-1234"/>
              @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="mb-5">
              <label for="email" class="form-label">Email Address</label>
              <input type="password" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="email" placeholder="Enter your email"/>
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
            </div>
            <div class="mb-5">
              <label for="password" class="form-label">Confirm Password</label>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
            <button type="submit" class="btn btn--purple btn--full">Register</button>
          </form>
          <div class="social-login">
            <div class="or-container">OR</div>
            <div class="btns-container mb-5">
              <button class="btn btn--google-login"><img src="{{asset('assets/images/flat-color-icons_google.svg')}}" alt="" />Google</button>
              <button class="btn btn--facebook-login"> <img src="{{asset('assets/images/facebook-icon.svg')}}" alt="" /> Facebook </button>
            </div>
            <p class="hasAcc-text">Already have an account? <a href="{{route('login')}}" class="link link--purple" >Login</a ></p>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
