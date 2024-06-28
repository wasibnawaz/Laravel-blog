@extends('layout.app')

@section('content')

    <body>
        <div class="container" style="margin:4% auto">

            @if (session('success'))
                <div class="alert alert-success"style="position:absolute;top:10px;right:30px;">{{ session('success') }}</div>
            @endif

            <div class="d-flex justify-content-between">
                <h1>Posts</h1>
                <a class="btn btn-primary mt-2" href="{{ route('posts.create') }}">Create New Posts</a>
            </div>

            <div class="table-responsive mt-4">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="col-3">
                                    <div style="height:75px; overflow:hidden;">
                                        {{ $post->name }}
                                    </div>
                                </td>
                                <td class="col-5">
                                    <div style="height:75px; overflow:hidden;">
                                        {{ $post->description }}
                                    </div>
                                </td>
                                <td class="col-1">{{ $post->category->name }}</td>
                                <td>
                                    <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->name }}"
                                        class="img-thumbnail" style="width: 70px;height: 70px;object-fit:cover">
                                </td>
                                <td>
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></a>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this post?')"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- {{ $posts->links('pagination::bootstrap-5') }} --}}
        </div>
    @endsection
