@extends('master')

@section('content')
<div class="container mt-5">
    <h1>News Details</h1>
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">{{ $news->title }}</h5>
            <p class="card-text"><strong>Category:</strong> {{ $news->newscategory->title ?? 'N/A' }}</p>
            <p class="card-text"><strong>Description:</strong> {{ $news->description }}</p>
            <p class="card-text"><strong>Published Date:</strong> {{ $news->published_date }}</p>
            <p class="mt-3"><strong>Images:</strong></p>
            <div class="row">
                @foreach($news->galleries as $gallery)
                    <div class="col-md-3 mb-3">
                        <img src="{{ asset('storage/' . $gallery->image) }}" class="img-fluid" alt="Gallery Image">
                    </div>
                @endforeach
            </div>
            <p class="mt-3"><strong>Status:</strong> {{ $news->status ? 'Active' : 'Inactive' }}</p>
            <a href="{{ route('news.index') }}" class="btn btn-secondary mt-3">Back to List</a>
        </div>
    </div>
</div>
@endsection