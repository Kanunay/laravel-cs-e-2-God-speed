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
$query = $pdo->query("SELECT image, description, slug FROM categories");
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
    </style>

    <div class="container">
    @guest
    <h2 class="py-2">Ordering as guest! Please <a href="{{ route('login') }}">login</a> to access your account.</h2>
    @else
    <h2 class="py-2">Ordering as User!</h2>
    @endguest

        <div class="row">

            <?php foreach ($categories as $category): ?>
                <div class="col-md-3">
                    <div class="card mb-4">
                        <img class="card-img-top calculator-img" src="{{ asset('uploads/category/' . $category['image']) }}" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $category['description']; ?></h5>
                            <p class="card-text">Price: <?php echo $category['slug']; ?></p>
                            <button class="btn btn-primary add-to-cart" data-price="<?php echo $category['slug']; ?>">Add to Cart</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            
        </div>
        <div class="sticky-footer bg-light py-3">
            <div class="container">
                <h4>Total Price: <span id="total-price">0</span></h4>
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
                var price = $(this).data('price');
                totalPrice += parseFloat(price);
                $('#total-price').text(totalPrice.toFixed(2));
            });
        });
    </script>
</body>
</html>







@endsection

