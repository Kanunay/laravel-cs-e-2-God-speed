@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Catalog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-4">
        <div class="row">
            @foreach($categories as $category)
                <div class="col-md-3">
                    <div class="card mb-4">
                        <img class="card-img-top" src="/uploads/category/{{ $category->image }}" alt="{{ $category->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->name }}</h5>
                            <p class="card-text">{{ $category->description }}</p>
                            <p class="card-text">Price: <span id="price-{{ $category->id }}">{{ $category->price }}</span></p>
                            <button class="btn btn-primary add-to-cart" data-id="{{ $category->id }}">Add to Cart</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Sticky footer -->
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    Total Price: <span id="total-price">0</span>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var totalPrice = 0;

            // Event handler for add to cart button
            $('.add-to-cart').click(function() {
                var categoryId = $(this).data('id');
                var price = parseFloat($('#price-' + categoryId).text());

                // Update total price
                totalPrice += price;
                $('#total-price').text(totalPrice.toFixed(2));
            });
        });
    </script>
</body>
</html>


@endsection

