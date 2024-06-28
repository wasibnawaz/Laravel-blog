@extends('layout.app')

@section('content')
    <div class="container" style="margin:4% auto">
        <h2>Settings</h2>

        <p class="mt-3">Brand Name: &nbsp; {{ $setting->brand_name }}</p>
        <p class="mt-2">Favicon: &nbsp;&nbsp;&nbsp;
            @if ($setting->favicon)
                <img src="{{ $favicon_url }}" alt="favicon" style="height:50px;width:50px;border-radius:50%;object-fit:cover">
            @endif
        </p>

        <a href="{{ route('setting.edit', $setting->id) }}" class="btn btn-primary mt-3">Edit Settings</a>
    </div>
@endsection
