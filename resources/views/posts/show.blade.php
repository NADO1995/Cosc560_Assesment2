@extends('layouts.app')

@section('content')
<div class="container">

    <h2>Post Details</h2>

    <div class="card">
        <div class="card-body">

            <p>
                <strong>ID:</strong>
                {{ $post->id }}
            </p>

            <p>
                <strong>Title:</strong>
                {{ $post->title }}
            </p>

            <p>
                <strong>Content:</strong>
                {{ $post->content }}
            </p>

            <p>
                <strong>Category:</strong>
                {{ $post->category->name }}
            </p>

            <p>
                <strong>User:</strong>
                {{ $post->user->name }}
            </p>

            <p>
                <strong>Status:</strong>
                {{ $post->is_active }}
            </p>

            <a href="{{ route('posts.index') }}" class="btn btn-secondary">
                Back
            </a>

        </div>
    </div>

</div>
@endsection