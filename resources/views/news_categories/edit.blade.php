@extends('master')

@section('content')
<div class="container mt-5">
    <h1>Edit News Category</h1>
    <form action="{{ route('news-categories.update', $newsCategory->id) }}" method="POST" enctype="multipart/form-data" class="mt-4">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $newsCategory->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description">{{ $newsCategory->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control-file" id="image" name="image">
            @if ($newsCategory->image)
                <img src="{{ asset('storage/'.$newsCategory->image) }}" height="100" class="mt-2">
            @endif
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="status" name="status" {{ $newsCategory->status ? 'checked' : '' }}>
            <label class="form-check-label" for="status">Active</label>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
