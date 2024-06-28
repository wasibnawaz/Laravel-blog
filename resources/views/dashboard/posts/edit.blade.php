@extends('layout.app')

@section('content')
    <div class="container" style="margin:4% auto">
        <h2>Edit Post</h2>
        <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $post->name) }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $post->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Current Image</label><br>
                <img src="{{ asset('images/' . $post->image) }}" class="img-fluid" alt="{{ $post->name }}" style="width:100%;height:500px;object-fit:cover"><br><br>
                <label for="new_image" class="form-label">Choose New Image (Optional)</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-control" id="category" name="category_id" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
