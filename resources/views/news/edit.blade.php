@extends('master')

@section('content')
<div class="container mt-5">
    <h1>Edit News</h1>
    <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data" class="mt-4">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $news->title }}" required>
        </div>
        <div class="form-group">
            <label for="news_category_id">Category:</label>
            <select class="form-control" id="news_category_id" name="news_category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $news->news_category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->title }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" required>{{ $news->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="published_date">Published Date:</label>
            <input type="date" class="form-control" id="published_date" name="published_date" value="{{ $news->published_date }}" required>
        </div>
        <div class="form-group">
            <label for="image">Images:</label>
            <div class="d-flex flex-wrap">
                @foreach ($galleries as $gallery)
                    <div class="form-check mr-2">
                        <img src="{{ asset('storage/' . $gallery->image) }}" height="50" class="mr-2" />
                        <input type="checkbox" class="form-check-input" id="image" name="image[]" value="{{ $gallery->id }}"
                            @if($news->galleries->contains($gallery)) checked @endif>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="status" name="status" {{ $news->status ? 'checked' : '' }}>
            <label class="form-check-label" for="status">Status</label>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
