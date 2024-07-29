@extends('master')

@section('content')
<div class="container mt-5">
    <h1>Create News</h1>
    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="news_category_id">Category:</label>
            <select class="form-control" id="news_category_id" name="news_category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="published_date">Published Date:</label>
            <input type="date" class="form-control" id="published_date" name="published_date" required>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            @foreach ($galleries as $gallery)
            <img src="{{asset('storage/'.$gallery->image)}}" height='50'/>
            <input type="checkbox"  id="image" name="image[]" value="{{$gallery->id}}"> 
            @endforeach
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="status" name="status">
            <label class="form-check-label" for="status">Active</label>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
