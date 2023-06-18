<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('tittle')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/java.js') }}">
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>

<div class="container-fluid">
    
    <div class="row">
        {{-- Navbar stuff --}}
    @include('layouts.inc.admin-navbar')
    {{-- Navbar-Side stuff --}}
    {{-- @php
    $value =Auth::user()->role_as;
    @endphp

    @if ($value == 0)
     <h2 type="hidden" >No permissions</h2>
    @else
    @include('layouts.inc.admin-sidebar')
     @endif --}}
    
    {{-- {{ Auth::user()->role_as == 1 ? 'admin-navbar' : 'admin-navbar' }} --}}

    {{-- @include('layouts.inc.admin-sidebar') --}}
    {{-- {{ Auth::user()->surname }}   --}}
        


        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @yield('content')
            
        </main>

        
    </div>
    
    
</div>


    <script src="{{ asset('assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/java.js') }}"></script>
    
</body>
</html>