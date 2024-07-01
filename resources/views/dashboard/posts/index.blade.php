@extends('layout.app')

@section('content')
    <div class="container" style="margin:4% auto">

        @if (session('success'))
            <div class="alert alert-success rounded" style="position:absolute;top:10px;right:30px;">{{ session('success') }}
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Posts</h1>
            <a class="btn btn-primary rounded" href="{{ route('posts.create') }}">Create New Post</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover rounded">
                <thead class="table-dark rounded">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category</th>
                        <th scope="col">Image</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="text-truncate" style="max-width: 150px;">
                                    {{ $post->name }}
                                </div>
                            </td>
                            <td>
                                <div class="text-truncate" style="max-width: 250px;">
                                    {{ $post->description }}
                                </div>
                            </td>
                            <td>{{ $post->category->name }}</td>
                            <td>
                                <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->name }}" class="rounded"
                                    style="width: 50px;height: 50px;object-fit:cover;">
                            </td>
                            <td>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm"
                                    title="View"><i class="fa-regular fa-eye"></i></a>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm"
                                    title="Edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete"
                                        onclick="return confirm('Are you sure you want to delete this post?')">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- Conditional pagination display --}}
        @if ($posts->count() >= 10)
            <div class="d-flex justify-content-center mt-4">
                {{ $posts->links('pagination::bootstrap-4') }}
            </div>
        @endif
    </div>
@endsection
