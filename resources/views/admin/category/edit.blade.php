@extends('layouts.master')

@section('tittle','Category')
@section('content')

    <div class="card mt-4">
            <div class="card-header">
                <h4 class="">Edit Category</h4>
            </div>
        <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
            @endif
            
            <form action="{{ url('admin/update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="">Category Name</label>
                    <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                </div>
                {{-- not use for now --}}
                <div class="mb-3" hidden="hidden" >
                    <label for="">Slug</label>
                    <input type="text" name="slug" value="{{ $category->slug }}"  class="form-control" value="ignore"> 
                </div>

                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea type="text" name="description" rows="5" class="form-control">{{ $category->description }}"</textarea>
                </div>
                
                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control" value="no image">
                </div>
                {{-- not use for now --}}
                <H6 hidden="hidden">SEO Tags</H6>
                <div class="mb-3" hidden="hidden">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" value="{{ $category->meta_title }}" class="form-control">
                </div>
                {{-- not use for now --}}
                <div class="mb-3" hidden="hidden">
                    <label for="">Meta Description</label>
                    <textarea type="text" name="meta_description" row="3" class="form-control" >{{ $category->meta_description }}</textarea>
                </div>
                {{-- not use for now --}}
                <div class="mb-3" hidden="hidden">
                    <label for="">Meta Keywords</label>
                    <textarea type="text" name="meta_keyword" row="3" class="form-control" >{{ $category->meta_keyword }}</textarea >
                </div>
                
                <h6 hidden="hidden">Status Mode</h6>
                <div class="row" >

                    <div class="col-md-3 mb-3">
                        <label for="">Status (making it hidden or not)</label>
                        <input type="checkbox" name="status" {{ $category->status == '1' ? 'checked':'' }}/>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="" hidden="hidden">Navbar Status</label>
                        <input hidden="hidden" type="checkbox" name="nav_status" {{ $category->nav_status == '1' ? 'checked':'' }}/>
                    </div>

                    <div class="col-md-6" >
                        <button type="submit" class="btn btn-primary">Update Category</button>
                    </div>
                </div>

            </form>

        </div>
    </div>

</div>



@endsection