@extends('layouts.master')

@section('tittle','Foods&Drive')
@section('content')

@php
// Database configuration
$host = 'localhost';
$dbName = 'laravel-cs';
$username = 'root';
$password = '';

try {
    // Connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $username, $password);

    // Prepare and execute the query
    $query = "SELECT name, surname, role_as FROM users";
    $statement = $pdo->query($query);

    // Fetch all the results
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);

    // Display the names, surnames, and roles
    echo "<div class='container'>";
    echo "<h2 class='h4 mb-3'>Names, Surnames, and Roles:</h2>";
    echo "<ul class='list-group'>";
    foreach ($results as $result) {
        echo "<li class='list-group-item'>";
        echo "<span class='name'>" . $result['name'] . "</span>";
        echo "<span class='separator'> | </span>";
        echo "<span class='surname'>" . $result['surname'] . "</span>";
        echo "<span class='separator'> | </span>";
        $role = $result['role_as'] == 1 ? 'Admin' : 'User';
        echo "<span class='role'>" . $role . "</span>";
        echo "</li>";
    }
    echo "</ul>";
    echo "</div>";
} catch (PDOException $e) {
    // Display an error message if there's an exception
    echo "Error: " . $e->getMessage();
}

@endphp

@endsection