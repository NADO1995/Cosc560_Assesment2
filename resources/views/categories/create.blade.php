@extends('layouts.app')

@section('content')
<div class="container">

    <h2>Add Category</h2>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text"
                   name="name"
                   id="name"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content"
                      id="content"
                      class="form-control"
                      rows="5"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            Save
        </button>

        <a href="{{ route('categories.index') }}" class="btn btn-secondary">
            Cancel
        </a>
    </form>

</div>
@endsection