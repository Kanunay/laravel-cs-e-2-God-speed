<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
    <div class="container">
        <header class="navbar sticky-top flex-md-nowrap p-1">
            <a class="pd-0 margin-0" href="{{ url('/') }}">
                <img src="{{ asset('uploads/Titans-catering-logo2.png') }}" class="px-3 margin-0 " width="200px" height="60px" alt="">
            </a>
        
            <a class="navbar pd-0 margin-0" href="{{ url('/home') }}">
                <button class="btn btn-outline-danger btn-sm px-3 me-2">Home</button>
            </a>
        
            <a class="navbar pd-0 margin-0" href="{{ url('/order-now') }}">
                <button class="btn btn-outline-danger btn-sm px-3 me-2">Order now</button>
            </a>
                    
            <a class="navbar pd-0 margin-0" href="{{ url('/review') }}">
                <button class="btn btn-outline-danger btn-sm px-3 me-2">Reviews</button>
            </a>
            @guest
            <h1 hidden>Admin tools are hidden</h1>
            @else
            @php
             $value =Auth::user()->role_as;
            @endphp
            @if ($value == 0)
            {{-- <h2 type="hidden" >No permissions</h2> --}}
             @else
             <p class="px-1">Admin Tools:</p>
                    
             <a class="navbar pd-0 margin-0" href="{{ url('admin/category') }}">
                 <button class="btn btn-outline-danger btn-sm px-3 me-2">Products</button>
             </a>
                     
             <a class="navbar pd-0 margin-0" href="{{ url('admin/view-customer') }}">
                 <button class="btn btn-outline-danger btn-sm px-3 me-2">Users</button>
             </a>
            @endif
            @endguest

        </header>
        
        
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
            
        </button> --}}

        <div class=" navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span data-feather="users" class="align-text-bottom pb-1"></span>
                            {{ Auth::user()->name }} {{ Auth::user()->surname }} 
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
{{-- Database shortcut --}}
@php
$dbHost = 'localhost';
$dbName = 'laravel-cs';
$dbUser = 'root';
$dbPass = '';
@endphp

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>