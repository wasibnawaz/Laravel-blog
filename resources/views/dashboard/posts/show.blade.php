@extends('layout.app')

@section('content')
    <div class="container" style="margin:4% auto">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">{{ $post->name }}</h5>
            </div>
            <div class="card-body">
                <p><strong>Description:</strong> {{ $post->description }}</p>
                <p><strong>Category:</strong> {{ $post->category->name }}</p>
                <p><strong>Image:</strong></p>
                <img src="{{ asset('images/' . $post->image) }}" class="img-fluid" alt="{{ $post->name }}" style="width:100%;height:500px;object-fit:cover">
            </div>
        </div>
    </div>
@endsection
