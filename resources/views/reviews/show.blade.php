@extends('layouts.app')

@section('content')
<div class="container">
<!-- resources/views/reviews/show.blade.php -->
<h1>Show Review</h1>

<div>
    <strong>User ID:</strong> {{ $review->user_id }}
</div>

<div>
    <strong>Review Text:</strong> {{ $review->review_text }}
</div>

<a class="btn btn-primary" href="{{ route('reviews.index') }}">Back</a>

</div>

@endsection

