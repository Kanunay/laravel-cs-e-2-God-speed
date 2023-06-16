

<nav class="navbar navbar-expand-md navbar-light bg-transparent shadow-sm">    
    
    <div class="container ">
        <header class="navbar  sticky-top  flex-md-nowrap p-1 ">
        <a class="navbar-brand bg-transparent pd-0 margin-0" href="{{ url('/') }}">
            Food&Drive
        </a>

        <a class="navbar pd-0 margin-0"  href="{{ url('/home') }}">
            <p class="px-1">Home</p>
        </a>

        <a class="navbar pd-0 margin-0"  href="{{ url('/order-now') }}">
            <p class="px-1">Order now</p>
        </a>
        <a class="navbar pd-0 margin-0"  href="{{ url('/review') }}">
            <p class="px-1">Reviews</p>
        </a>

        
        
        <p class="px-1">Admin Tools:</p>
        <a class="navbar pd-0 margin-0"  href="{{ url('admin/category') }}"> 
            <p class="px-1">Products</p>
        </a>
        <a class="navbar pd-0 margin-0"  href="{{ url('admin/view-customer') }}">
            <p class="px-1">Users</p>
        </a>

        
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