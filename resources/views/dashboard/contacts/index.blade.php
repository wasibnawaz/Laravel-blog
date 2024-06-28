@extends('layout.app')

@section('content')
    <div class="container" style="margin: 4% auto">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Contacts</h1>
            <a href="{{ route('contacts.create') }}" class="btn btn-primary rounded">Create New Contact</a>
        </div>

        @if (count($contacts) > 0)
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover rounded">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>
                                    <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info btn-sm rounded"
                                        title="View">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                    <a href="{{ route('contacts.edit', $contact->id) }}"
                                        class="btn btn-primary btn-sm rounded" title="Edit">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST"
                                        style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm rounded" title="Delete"
                                            onclick="return confirm('Are you sure you want to delete this contact?')">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- Conditional pagination display --}}
                @if (count($posts) >= 10)
                    <div class="d-flex justify-content-center mt-4">
                        {{ $posts->links() }}
                    </div>
                @endif
            </div>
        @else
            <div class="alert alert-warning rounded">
                <p>No contacts found.</p>
            </div>
        @endif
    </div>
@endsection
