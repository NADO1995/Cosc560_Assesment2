@extends('layouts.app')

@section('content')
<div class="container">

    <h2>Add Post</h2>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text"
                   name="title"
                   id="title"
                   class="form-control"
                   value="{{ old('title') }}">
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content"
                      id="content"
                      class="form-control"
                      rows="5">{{ old('content') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>

            <select name="category_id"
                    id="category_id"
                    class="form-select">

                <option value="">Select Category</option>

                @foreach($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label for="is_active" class="form-label">Status</label>

            <select name="is_active"
                    id="is_active"
                    class="form-select">

                <option value="Yes">Yes</option>
                <option value="No">No</option>

            </select>
        </div>

        <button type="submit" class="btn btn-primary">
            Save
        </button>

        <a href="{{ route('posts.index') }}" class="btn btn-secondary">
            Cancel
        </a>

    </form>

</div>
@endsection