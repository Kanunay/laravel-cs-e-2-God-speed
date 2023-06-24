@extends('layouts.app')

@section('content')
<?php
$dbHost = 'localhost';
$dbName = 'laravel-cs';
$dbUser = 'root';
$dbPass = '';

try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Fetch data from the "categories" table
$query = $pdo->query("SELECT name, image, description, slug FROM categories");
$categories = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<title>Order Now</title>
<!-- Include Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- Custom styles -->
<style>
    .calculator-img {
        max-width: 100px;
        max-height: 100px;
    }
    .sidebar {
        background-color: #f8f9fa;
        min-height: 100vh;
        padding: 20px;
    }
    .selected-categories {
        list-style: none;
        padding: 0;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            @guest
            <h2 class="py-2">Ordering as a guest! Please <a href="{{ route('login') }}">login</a> to access your account.</h2>
            @else
            <h2 class="py-2">Ordering as a User!</h2>
            @endguest

            <div class="row">
                @foreach ($categories as $category)
                <div class="col-md-3">
                    <div class="card mb-4">
                        <img class="card-img-top calculator-img" src="{{ asset('uploads/category/' . $category['image']) }}" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category['name'] }}</h5>
                            <p class="card-text">Description: {{ $category['description'] }}</p>
                            <p class="card-text">Price: {{ $category['slug'] }}</p>
                            <button class="btn btn-primary add-to-cart" data-price="{{ $category['slug'] }}">Add to Cart</button>
                            <div class="units">Units: 0</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="sticky-top">
                <h4 class="mt-3 text-bg-info" >Shopping Basket</h4>
                <button class="fixed-right btn navbar-light  lighten-4" type="button" data-toggle="collapse" data-target="#sidebar-collapse" aria-expanded="false" aria-controls="sidebar-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>  
                <div class=" fixed-right collapse " id="sidebar-collapse">
                    <ul class="list-group selected-categories" id="selected-categories"></ul>
                </div>
            </div>
        </div>
    </div>
    

    <div class="sticky-footer bg-light py-3">
        <div class="container">
            <h4 class="fixed-bottom container bg-light py-2">Total Price: $<span id="total-price">0</span></h4>
        </div>
    </div>
</div>

<!-- Include jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        // Initialize the total price
        var totalPrice = 0;

        // Handle add to cart button click
        $('.add-to-cart').click(function() {
            var price = parseFloat($(this).data('price'));
            var units = parseInt($(this).siblings('.units').text().trim().substring(7));
            units += 1;
            $(this).siblings('.units').text('Units: ' + units);
            totalPrice += price;
            $('#total-price').text(totalPrice.toFixed(2));

            var category = $(this).siblings('.card-title').text();
            $('#selected-categories').append('<li>' + category + '</li>');
        });
    });
</script>

@endsection
