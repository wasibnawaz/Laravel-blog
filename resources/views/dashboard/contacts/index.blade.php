@extends('layout.app')

@section('content')

    <div class="container" style="margin:4% auto">
        <div class="d-flex justify-content-between">
            <h1>Contacts</h1>
            <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">Create New Contact</a>
        </div>

        @if (count($contacts) > 0)
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
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
                                <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info"><i class="fa-regular fa-eye"></i></a>
                                <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i></a>
                                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST"
                                    style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No contacts found.</p>
        @endif
    </div>
@endsection
