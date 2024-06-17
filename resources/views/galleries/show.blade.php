@extends('master')

@section('content')
<div class="container">
    <h1>Gallery Details</h1>
    <p>ID: {{ $gallery->id }}</p>
    <p>User: {{ $gallery->user->name }}</p>
    <p>Caption: {{ $gallery->caption }}</p>
    <p>Image: <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->caption }}"></p>
    <p>Status: {{ $gallery->status ? 'Active' : 'Inactive' }}</p>
    <a href="{{ route('galleries.index') }}" class="btn btn-primary">Back to List</a>
</div>
@endsection