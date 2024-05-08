<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/global.css')}}" />
    @yield('extra-css')
  </head>
  <body>
    <header>
      <nav class="container profile-nav d-flex justify-content-between">
        <img src="/assets/images/logo.png" class="logo" alt="" />
        <div class="user-name-box" >
            {{Str::of(auth()->user()->name)->explode(' ')->map(function ($word) { return Str::upper(Str::substr($word, 0, 1)); })->implode('');}}
            <div class="header-dropdown-menu d-none" aria-labelledby="dropdownMenuButton">
                <a class="header-dropdown-menu-item" href="{{ route('logout') }}">Logout</a>               
            </div>
        </div>
      </nav>
    </header>
   @yield('main-content')
   <script src="{{asset('assets/packages/jquery-3.7.1.min.js')}}"  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    @include('js/common-script')
    @yield('extra-js')
  </body>
</html>
