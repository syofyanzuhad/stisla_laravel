<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title', 'Stisla Laravel') &mdash; {{ env('APP_NAME') }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset("assets/modules/jqvmap/dist/jqvmap.min.css")}}">
  <link rel="stylesheet" href="{{asset("assets/modules/weather-icon/css/weather-icons.min.css")}}">
  <link rel="stylesheet" href="{{asset("assets/modules/weather-icon/css/weather-icons-wind.min.css")}}">
  <link rel="stylesheet" href="{{asset("assets/modules/summernote/summernote-bs4.css")}}">

<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css')}}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        @include('admin.partials.topnav')
      </nav>
      <div class="main-sidebar">
        @include('admin.partials.sidebar')
      </div>

      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
      </div>
      <footer class="main-footer">
        @include('admin.partials.footer')
      </footer>
    </div>
  </div>

  <script src="{{ route('js.dynamic') }}"></script>
  <script src="{{ asset('js/app.js') }}?{{ uniqid() }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('assets/js/stisla.js') }}"></script>
  <script src="{{ asset('assets/js/scripts.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{asset("assets/modules/simple-weather/jquery.simpleWeather.min.js")}}"></script>
    <script src="{{asset("assets/modules/chart.min.js")}}"></script>
    <script src="{{asset("assets/modules/jqvmap/dist/jquery.vmap.min.js")}}"></script>
    <script src="{{asset("assets/modules/jqvmap/dist/maps/jquery.vmap.world.js")}}"></script>
    <script src="{{asset("assets/modules/summernote/summernote-bs4.js")}}"></script>
    <script src="{{asset("assets/modules/chocolat/dist/js/jquery.chocolat.min.js")}}"></script>
  
    <!-- Page Specific JS File -->
    <script src="{{asset("assets/js/page/index-0.js")}}"></script>
  @yield('scripts')
</body>
</html>
