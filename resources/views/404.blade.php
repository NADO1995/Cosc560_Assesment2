@extends('layouts.app')

@section('content')
<div class="container text-center">

    <h1 class="display-4">404</h1>

    <h2>Page Not Found</h2>

    <p class="mt-3">
        The page you are looking for does not exist.
    </p>

    <a href="{{ url('/admin') }}" class="btn btn-primary mt-2">
        Back to Admin
    </a>

</div>
@endsection