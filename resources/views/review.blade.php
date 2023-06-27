@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-danger my-2" href="{{ route('reviews.index') }}">Review Data</a>
    <a class="btn btn-success my-2" href="{{ route('reviews.create') }}">Create New Review</a>
<?php
$dbHost = 'localhost';
$dbName = 'laravel-cs';
$dbUser = 'root';
$dbPass = '';

// Connect to the database
$pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

// Fetch data from the "reviews" table
$query = $pdo->query("SELECT * FROM reviews");
$reviews = $query->fetchAll(PDO::FETCH_ASSOC);

// Fetch data from the API
$apiData = file_get_contents('https://reqres.in/api/users?fbclid=IwAR2vWrYc6epZ7zYKX6O0vRPkBkJNhNAwpB2ZlagH9OGMPM95eLkqJ3cHWhI');
$apiData = json_decode($apiData, true);

// Display the reviews with additional data
foreach ($reviews as $review) {
    echo '<div class="container border">';
    
    // Display the avatar
    $avatar = $apiData['data'][$review['user_id']]['avatar'];
    echo '<img src="' . $avatar . '" alt="Avatar">';
    
    // Display the first name
    $firstName = $apiData['data'][$review['user_id']]['first_name'];
    echo '<p>' . $firstName . '</p>';
    
    // Display the review text
    echo '<p>' . $review['review_text'] . '</p>';
    
    echo '</div>';
}
?>
</div>
@endsection

