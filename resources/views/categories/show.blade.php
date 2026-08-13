@extends('layouts.app')

@section('content')
<div class="container">

    <h2>Category Details</h2>

    <div class="card">
        <div class="card-body">

            <p>
                <strong>ID:</strong>
                {{ $category->id }}
            </p>

            <p>
                <strong>Name:</strong>
                {{ $category->name }}
            </p>

            <p>
                <strong>Content:</strong>
                {{ $category->content }}
            </p>

            <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                Back
            </a>

        </div>
    </div>

</div>
@endsection