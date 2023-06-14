@extends('layouts.master')

@section('tittle','Category')
@section('content')

<div class="container-fluid px-4">
    
    <div class="card mt-4">
        <div class="card-header">
                <h1 class="py-2 mx-2">Products 
                    <a href="{{ 'add-category' }}" class="btn btn-primary btn-l float-end py-3">Add product</a>
                </h1>
        </div>

        <div class="card-body">
            @if (session('message'))
                 <div class="alert alert-success">{{ session('message') }}</div>
             @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td> 
                            <td>{{ $item->slug }}</td>                           
                            <td><img src="{{ asset('uploads/category/' . $item->image) }}" width="50%" height="50%" alt="image">
                            </td>
                            <td>{{ $item->status == '1' ? 'Hidden':'Shown'}}</td>
                            <td>
                                <a href="{{ url('admin/edit-category/'.$item->id) }}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <a href="{{ url('admin/delete-category/'.$item->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            

        </div>
    </div>


</div>



@endsection