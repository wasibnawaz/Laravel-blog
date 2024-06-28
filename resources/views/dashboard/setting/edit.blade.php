@extends('layout.app')

@section('content')
    <div class="container" style="margin:4% auto">
        <h2>Edit setting</h2>
        <form method="POST" action="{{ route('setting.update') }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="brand_name" class="form-label">Brand Name</label>
                <input type="text" class="form-control" id="brand_name" name="brand_name"
                    value="{{ old('brand_name', $setting->brand_name) }}" required>
            </div>

            <div class="mb-3">
                <label for="favicon" class="form-label">Favicon</label>
                <input type="file" class="form-control" id="favicon" name="favicon" accept="image/*">
                @if ($setting->favicon)
                    <img src="{{ asset('images/' . $setting->favicon) }}" alt="Favicon" class="mt-3
                    "
                        style="height:50px;width:50px;border-radius:50%;object-fit:cover">
                @endif
                @error('favicon')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}

            <button type="submit" class="btn btn-primary">Update setting</button>
        </form>
    </div>
@endsection
