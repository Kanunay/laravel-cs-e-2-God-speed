@extends('layouts.app')

@section('content')
<?php

// Assuming you have set up your database connection properly
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

<!DOCTYPE html>
<html>
<head>
    <title>Image Calculator</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom styles -->
    <style>
        .calculator-img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Image Calculator</h1>
        <div class="row">
            <?php foreach ($categories as $category): ?>
                <div class="col-md-3">
                    <div class="card mb-4">
                        <img class="card-img-top calculator-img" src="{{ asset('uploads/category/' . $category['image']) }}" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $category['description']; ?></h5>
                            <p class="card-text">Price: <?php echo $category['slug']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>






@endsection

