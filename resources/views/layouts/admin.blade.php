<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/global.css')}}" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"/>
    @yield('extra-css')
  </head>
  <body>
    <div class="dashboard-layout-wrapper">
        @include('components.dashboard-sidebar')
        @include('components.dashboard-nav')
        <div class="dashboard-main-content">
            @yield('main-content')
        </div>
        <script src="{{asset('assets/packages/jquery-3.7.1.min.js')}}"  crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>
    <!-- Custom Script  -->
        @yield('extra-js')
    </div>
  </body>
</html>