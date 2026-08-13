@extends('layouts.app')

@section('content')
<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Categories</h2>

        <a href="{{ route('categories.create') }}" class="btn btn-primary">
            Add Category
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->content }}</td>
                    <td>
                        <a href="{{ route('categories.show', $category) }}"
                           class="btn btn-info btn-sm">
                            View
                        </a>

                        <a href="{{ route('categories.edit', $category) }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="{{ route('categories.destroy', $category) }}"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Are you sure you want to delete this category?')">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection