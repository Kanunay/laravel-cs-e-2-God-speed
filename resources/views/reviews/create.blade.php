@extends('layouts.app')

@section('content')

<div class="container">
<!-- resources/views/reviews/create.blade.php -->
<h1>Create Review</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error:</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('reviews.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="user_id" hidden>User ID: LOL how did you manage to see this message? I love curry chicken</label>
        <input type="text" class="form-control" id="user_id" name="user_id" value="{{ Auth::user()->id }}" hidden required>
    </div>

    <div class="form-group">
        <label for="review_text">Review Text:</label>
        <textarea class="form-control" id="review_text" name="review_text" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-secondary" href="{{ route('reviews.index') }}">Cancel</a>
</form>

</div>

@endsection

