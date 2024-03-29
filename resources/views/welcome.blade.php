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
<body class="bg-dark">
  


<!-- Carousel wrapper -->
<div id="carouselVideoExample" class="carousel slide carousel-fade rounded" data-mdb-ride="carousel">

    <div class="carousel-inner rounded">
      <div class="carousel-item active rounded">
        <video class="container-fluid d-flex align-items-center justify-content-center vh-80 rounded" autoplay loop muted>
          <source class="hover-overlay   rounded" src="{{ asset('uploads/category/foodph-3.mp4') }}" type="video/mp4" />
          
        </video>
      </div>
    </div>

    

    <section id="about" class="about my-4">
        <div class="container-fluid bg-light my-5">
  
          <div class="row">
            <div class="col-lg-5 align-items-center">
                <a href="{{ __('login') }}" class="d-block">

                  {{-- Using --}}
                  {{-- https://web.postman.co --}}
                  {{-- https://unsplash.com --}}

                  <img class="img-fluid hover-overlay ripple shadow-1-strong rounded" src="https://images.unsplash.com/photo-1576402187878-974f70c890a5?ixid=M3w0NjczMjJ8MHwxfHNlYXJjaHwxfHxmb29kc3xlbnwwfHx8fDE2ODc4Nzk5MzJ8MA&ixlib=rb-4.0.3" class="img-fluid" alt="API Image">
                  
                </a>
            </div>
            <div class="col-lg-7">
                <div class="d-flex flex-column justify-content-center h-100" >
                    <div class="content">
                      <a href="{{ __('login') }}" class="d-block">
                        <h3 class="mb-4 text-danger btn btn-outline-warning"  ><strong >Order Now</strong></h3>
                      </a>
                        <h1>Get In Touch</h1>
                        <p class="mb-4">
                            We are a catering company that handles orders ranging from landline to cell, and now even digital ordering.
                        </p>
                        <p class="fst-italic mb-4">
                            Our Motto: To feel is to live and dine to thrive.
                        </p>
                        <ul class="list-unstyled">
                            <li><i class="bx bx-check-double me-2"></i> Cell#: 0949 208 0969</li>
                            <li><i class="bx bx-check-double me-2"></i> Address: Hilongos Leyte, Lamac</li>
                            <li><i class="bx bx-check-double me-2"></i> Email: philipelizaga72@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>













          
                  {{-- API MAP need edit lol --}}
                  <div class="container my-1 p-5 bg-light d-flex justify-content-center align-items-center ">
                    <div class="text-center bg-dark">
                        <a href="https://goo.gl/maps/D4XgbrxbkUN9yf196" class="text-decoration-none btn btn-outline  rounded   btn-sm px-2">
                            <h1 class="mb-4 text-light rounded">Come and visit us (Google Maps)</h1>
                        </a>
                        <div class="rounded" id="map" style="height: 400px; width: 100%;"></div>
                    </div>
                </div>
          </div>
                

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
      <footer class="bg-dark text-white text-center py-0">
        <div class="container">
          <p>&copy; Copyright 2023 something for finals. All Rights Reserved </p>
          <p>Created by Adrian Elizaga BSIT 3</p>
        </div>
      </footer>
</body>
@endsection
