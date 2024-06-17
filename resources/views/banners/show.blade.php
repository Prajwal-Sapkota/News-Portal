@extends('master')

@section('content')
<div class="container mt-5">
    <h1>Banner Details</h1>
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">{{ $banner->title }}</h5>
            <p class="card-text">{{ $banner->description }}</p>
            @if($banner->image)
                <div class="mt-3">
                    <img src="{{ asset('storage/'.$banner->image) }}" height="200">
                </div>
            @endif
            <p class="mt-3">Status: {{ $banner->status ? 'Active' : 'Inactive' }}</p>
            <a href="{{ route('banners.index') }}" class="btn btn-secondary mt-3">Back to List</a>
        </div>
    </div>
</div>
@endsection