@extends('layout.app')

@section('content')
    <div class="container" style="margin: 4% auto">
        <div class="d-flex justify-content-between mb-3">
            <h1>Category</h1>
            <a class="btn btn-primary mt-2 rounded" href="{{ route('category.create') }}">Create New Category</a>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success rounded">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover rounded mt-4">
                <thead class="table-dark rounded">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col" width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <form action="{{ route('category.destroy', $category->id) }}" method="POST"
                                    style="display: inline-block;">
                                    <a class="btn btn-primary btn-sm rounded"
                                        href="{{ route('category.show', $category->id) }}" title="View">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                    <a class="btn btn-warning btn-sm rounded"
                                        href="{{ route('category.edit', $category->id) }}" title="Edit">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm rounded" title="Delete"
                                        onclick="return confirm('Are you sure you want to delete this category?')">
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
        {{-- @if (count($posts) >= 10)
            <div class="d-flex justify-content-center mt-4">
                {{ $posts->links() }}
            </div>
        @endif --}}
    </div>
@endsection
