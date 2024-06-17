@extends('master')

@section('content')
<div class="container mt-5">
    <h1>News Category Details</h1>
    <div class="card mt-4">
        <div class="card-body">
            <h2 class="card-title">{{ $newsCategory->title }}</h2>
            <p class="card-text"><strong>Description:</strong> {{ $newsCategory->description }}</p>
            @if ($newsCategory->image)
                <div class="mb-3">
                    <img src="{{ asset('storage/'.$newsCategory->image) }}" class="img-fluid">
                </div>
            @endif
            <p class="card-text"><strong>Status:</strong> {{ $newsCategory->status ? 'Active' : 'Inactive' }}</p>
            <a href="{{ route('news-categories.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection
