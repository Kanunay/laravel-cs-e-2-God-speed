@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
  <title>Confirmation Button Example</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <form id="myForm" action="submit.php" method="post">
    <!-- form fields -->

    <button type="button" class="btn btn-primary" onclick="confirmSubmit()">Submit</button>
  </form>

  <!-- Include jQuery and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    function confirmSubmit() {
      if (confirm("Are you sure you want to submit the form?")) {
        document.getElementById("myForm").submit();
      }
    }
  </script>
</body>
</html>


@endsection