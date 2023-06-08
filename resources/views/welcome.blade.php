@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/dashboard.rtl.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/java.js') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpBNwQ_OJCyelBifDl1xeXWmFmiwtrX10&callback=initMap"></script>

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<!-- Carousel wrapper -->
<div id="carouselVideoExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">

    <div class="carousel-inner">
      <div class="carousel-item active">
        <video class="container-fluid d-flex align-items-center justify-content-center vh-80" autoplay loop muted>
          <source src="{{ asset('uploads/category/foodph-1.mp4') }}" type="video/mp4" />
        </video>
      </div>
    </div>
      
    <section id="about" class="about my-4">
        <div class="container-fluid">
  
          <div class="row">
  
            <a href="{{ __('login') }}" class="col-lg-5 align-center img-fluid"><img style="width: 100%" src="{{ asset('uploads/category/foodph-4.png') }}" alt=""></a>
  
            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">
  
              <div class="content">
                <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
              </div>
  
            </div>
  
          </div>
  
        </div>
        {{-- API MAP need edit lol --}}
            <div class="container my-5">
              <a href="https://goo.gl/maps/D4XgbrxbkUN9yf196"><h1>Come and visit us (google map)</h1></a>
              <div id="map" class="w-100" style="height: 400px;"></div>
            </div>
            <script>
              function initMap() {
                var center = { lat: 10.429913, lng: 124.725496 };
                var map = new google.maps.Map(document.getElementById('map'), {center: center,zoom: 12});
                var marker = new google.maps.Marker({ position: center,map: map,title: 'Map Center'});
              }
            </script>
            <script alt="{{ asset('uploads/category/map.png') }}" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpBNwQ_OJCyelBifDl1xeXWmFmiwtrX10&callback=initMap" async defer  ></script>
      </section>
      <footer class="bg-dark text-white text-center py-3">
        <div class="container">
          <p>&copy; Copyright Something. All Rights Reserved </p>
        </div>
      </footer>
@endsection
