@extends('layouts.master')

@section('title', 'Category')
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
                            <td><img src="{{ asset('uploads/category/' . $item->image) }}" width="50%" height="50%" alt="image"></td>
                            <td>{{ $item->status == '1' ? 'Hidden' : 'Shown' }}</td>
                            <td>
                                <a href="{{ url('admin/edit-category/'.$item->id) }}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <button class="btn btn-danger" onclick="showConfirmationModal('{{ url('admin/delete-category/'.$item->id) }}')">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmationModalLabel">Delete Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this category?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a id="deleteLink" href="#" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript to handle confirmation modal -->
<script>
    function showConfirmationModal(deleteUrl) {
        var deleteLink = document.getElementById('deleteLink');
        deleteLink.href = deleteUrl;
        $('#deleteConfirmationModal').modal('show');
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
