@extends('layouts.app')

@section('content')
<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Posts</h2>

        <a href="{{ route('posts.create') }}" class="btn btn-primary">
            Add Post
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
                <th>Title</th>
                <th>Category</th>
                <th>User</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>

                    <td>{{ $post->title }}</td>

                    <td>{{ $post->category->name }}</td>

                    <td>{{ $post->user->name }}</td>

                    <td>{{ $post->is_active }}</td>

                    <td>
                        <a href="{{ route('posts.show', $post) }}"
                           class="btn btn-info btn-sm">
                            View
                        </a>

                        <a href="{{ route('posts.edit', $post) }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="{{ route('posts.destroy', $post) }}"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Are you sure you want to delete this post?')">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection