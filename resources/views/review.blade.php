@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<body>

<div class="container m-5">
  <div id="user-info" class="row"></div>
</div>
{{-- Moving this script make the code not work? --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $.ajax({
    url: "https://randomuser.me/api/?results=12",
    dataType: "json",
    success: function(data) {
      var users = data.results;
      
      users.forEach(function(user) {
        var card = $('<div class="card col-md-4">');
        var cardBody = $('<div class="card-body">');
        
        var username = $('<div>').text('Username: ' + user.login.username);
        var phone = $('<div>').text('Phone: ' + user.phone);
        var city = $('<div>').text('City: ' + user.location.city);
        
        // Fetch the fact from the cat fact API
        $.ajax({
          url: "https://catfact.ninja/fact",
          dataType: "json",
          success: function(factData) {
            var comment = $('<div>').text('Comment: ' + factData.fact);
            cardBody.append(username, phone, city, comment);
          }
        });
        
        card.append(cardBody);
        $('#user-info').append(card);
      });
    }
  });
});
</script>


@endsection

