@extends('layout.app')

@section('content')
    <div class="container" style="margin:4% auto">
        <div class="d-flex justify-content-between mb-3">
            <h1>Category</h1>
            <a class="btn btn-primary mt-2" href="{{ route('category.create') }}">Create New Category</a>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered mt-4">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($category as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('category.show', $category->id) }}"><i class="fa-regular fa-eye"></i></a>
                            <a class="btn btn-warning" href="{{ route('category.edit', $category->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
