@extends('layouts.app')

@section('content')




<!DOCTYPE html>
<html>
<head>
  <title>Ajax with Bootstrap Example</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <h1>Ajax with Bootstrap Example</h1>
  <div id="data-container"></div>
  <button id="load-data" class="btn btn-primary">Load Data</button>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
  $(document).ready(function() {
    // Event listener for the "Load Data" button
    $('#load-data').click(function() {
      // Make an Ajax request to randomuser.me API
      $.ajax({
        url: 'https://randomuser.me/api/',
        method: 'GET',
        dataType: 'json',
        success: function(response) {
          // Display the user data on the page
          var user = response.results[0];
          var dataContainer = $('#data-container');
          dataContainer.empty();

          var userDiv = $('<div class="user">');
          var name = $('<p>').text('Name: ' + user.name.first + ' ' + user.name.last);
          var email = $('<p>').text('Email: ' + user.email);
          var phone = $('<p>').text('Phone: ' + user.phone);
          userDiv.append(name, email, phone);

          // Make an Ajax request to catfact.ninja API
          $.ajax({
            url: 'https://catfact.ninja/fact',
            method: 'GET',
            dataType: 'json',
            success: function(response) {
              var comment = $('<p>').text('Comment: ' + response.fact);
              userDiv.append(comment);
            },
            error: function(xhr, status, error) {
              console.error(error);
            }
          });

          dataContainer.append(userDiv);
        },
        error: function(xhr, status, error) {
          console.error(error);
        }
      });
    });
  });
</script>

</body>
</html>

@endsection

