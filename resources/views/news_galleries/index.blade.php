@extends('master')

@section('content')
<div class="container mt-5">
    <h1>News Galleries</h1>
    @foreach($newsItems as $newsItem)
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">{{ $newsItem->title }}</h5>
                <p class="card-text"><strong>User:</strong> {{ $newsItem->user->name }}</p>
                <!-- Display images associated with the news gallery -->
                <div class="row">
                    @foreach($newsItem->galleries as $gallery)
                        <div class="col-md-3 mb-3">
                            <img src="{{ asset('storage/'.$gallery->image) }}" class="img-fluid" alt="Gallery Image">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection