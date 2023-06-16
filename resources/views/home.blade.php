@extends('layouts.master')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/dashboard.rtl.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/java.js') }}">

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

@vite(['resources/sass/app.scss', 'resources/js/app.js'])
 


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @php
                        $role_as_lol = Auth::user()->role_as; 
                    @endphp

                    @if ($role_as_lol  == 1)
                    {{ __('Welcome back administrator') }}
                    @else
                    {{ __('You are logged in!') }}
                    @endif                  
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


<script src="{{ asset('assets/js/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/java.js') }}"></script>
