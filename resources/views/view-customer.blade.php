@extends('layouts.master')

@section('tittle','Foods&Drive')
@section('content')

@php
$value =Auth::user()->role_as;
@endphp

@if ($value == 0)
    <h1>You have no permission to view lol</h1>
@elseif ($value == 1)
@php
$host = 'localhost';
$dbName = 'laravel-cs';
$username = 'root';
$password = '';
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $username, $password);
    $query = "SELECT name, surname, role_as FROM users";
    $statement = $pdo->query($query);
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<div class='container'>";
    echo "<h2 class='h4 mb-3'>Names, Surnames, and Roles:</h2>";
    
    foreach ($results as $result) {
        echo "<div class='names'>";
        echo "<span class='name'>" . $result['name'] . "</span>";
        echo "<span class='separator'> | </span>";
        echo "<span class='surname'>" . $result['surname'] . "</span>";
        echo "<h3 class='role'>" . ($result['role_as'] == 1 ? 'Admin' : 'User') . "</h3>";
        echo "</div>";
    }
    
    echo "</div>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
@endphp
@else
    <h1>You have no permission to view lol</h1>
@endif

@endsection