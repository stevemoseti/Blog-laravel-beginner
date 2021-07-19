@extends('layouts.app')

@section('content')
@include('admin.includes.errors')

<div class="card card-default">
    <div class="card-header">
       update category:{{ $category->name }}
    </div>
    <div class="card-body">
    <form action="{{ route('category.update',$category->id) }}" method="" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" value="{{ $category->name }}" class="form-control">
            </div>
            
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">update category</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection