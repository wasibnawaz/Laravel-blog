@extends('layout.app')

@section('content')
<div class="container" style="margin:4% auto">
    <h1>Contact Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $contact->name }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $contact->email }}</p>
            <p class="card-text"><strong>Phone:</strong> {{ $contact->phone }}</p>
            <p class="card-text"><strong>Message:</strong> {{ $contact->message }}</p>
        </div>
    </div>
    <a href="{{ route('contacts.index') }}" class="btn btn-primary mt-3">Back to Contacts</a>
</div>
@endsection
