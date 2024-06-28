@extends('layout.app')

@section('content')
    <div class="container mt-5">
        <h2>Show Category</h2>

        <div class="card">
            <div class="card-header">
                <h3>{{ $category->name }}</h3>
            </div>
            <div class="card-body">
                <p>Created at: {{ $category->created_at }}</p>
                <p>Updated at: {{ $category->updated_at }}</p>
            </div>
        </div>

        <a class="btn btn-primary mt-3" href="{{ route('category.index') }}">Back</a>
    </div>
@endsection
