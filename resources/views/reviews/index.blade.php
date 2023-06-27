@extends('layouts.app')

@section('content')
<!-- resources/views/reviews/index.blade.php -->

@guest
            <h2 class="py-2 container">Can't review until,<a href="{{ route('login') }}">login</a> to access your account.</h2>
            @else
            <div class="container">
                <h1>Review Data</h1>
                <a class="btn btn-success " href="{{ route('reviews.create') }}">Create New Review</a>
                
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                
                <table class="table">
                    
                    <tr>
                        <th>ID</th>
                        <th>User ID</th>
                        <th>Review Text</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($reviews as $review)
                        <tr>
                            <td>{{ $review->id }}</td>
                            <td>{{ $review->user_id }}</td>
                            <td>{{ $review->review_text }}</td>
                            <td>
                                <form action="{{ route('reviews.destroy', $review->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('reviews.show', $review->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('reviews.edit', $review->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
                </div>
            @endguest


@endsection

