@extends('layouts.app')

@section('content')
<div class="container">
<!-- resources/views/reviews/edit.blade.php -->
<h1>Edit Review</h1>

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

<form action="{{ route('reviews.update', $review->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="user_id">User ID:</label>
        <input type="text" class="form-control" id="user_id" name="user_id" value="{{ Auth::user()->id }}" hidden required>
    </div>

    <div class="form-group">
        <label for="review_text">Review Text:</label>
        <textarea class="form-control" id="review_text" name="review_text" required>{{ $review->review_text }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a class="btn btn-secondary" href="{{ route('reviews.index') }}">Cancel</a>
</form>

</div>

@endsection

