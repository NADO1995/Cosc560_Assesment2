@extends('layouts.app')

@section('content')
<div class="container">

    <h2>Edit Category</h2>

    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text"
                   name="name"
                   id="name"
                   class="form-control"
                   value="{{ $category->name }}">
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content"
                      id="content"
                      class="form-control"
                      rows="5">{{ $category->content }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            Update
        </button>

        <a href="{{ route('categories.index') }}" class="btn btn-secondary">
            Cancel
        </a>

    </form>

</div>
@endsection