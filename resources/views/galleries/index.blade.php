@extends('master')

@section('content')
<div class="container">
    <h1>Galleries</h1>
    <a href="{{ route('galleries.create') }}" class="btn btn-primary mb-3">Create Gallery</a>
    <div class="row">
        @foreach($galleries as $gallery)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div style="height: 200px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $gallery->image) }}" class="card-img-top" alt="{{ $gallery->caption }}">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $gallery->caption }}</h5>
                    <p class="card-text">Status: {{ $gallery->status ? 'Active' : 'Inactive' }}</p>
                    <a href="{{ route('galleries.show', $gallery->id) }}" class="btn btn-primary">View</a>
                    <a href="{{ route('galleries.edit', $gallery->id) }}" class="btn btn-secondary">Edit</a>
                    <form action="{{ route('galleries.destroy', $gallery->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this gallery?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection