@extends('layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-body">
        <table class="table table-hover">
    <thead>
        <th>Categories</th>
        <th>Editing</th>
        <th>Deleting</th>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>
              {{ $category->name }}  
            </td>
            <td>
                <a href="{{ route('category.edit',$category->id) }}" class="btn btn-info btn-sm">Edit</a>
            </span>
            </td>
            <td>
                <a href="{{ route('category.destroy',$category->id) }}" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>


</table>
    </div>
</div>

@endsection