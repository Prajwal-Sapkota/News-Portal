@extends('master')
@section('content')
<div class="container">
    <h1>Edit Gallery</h1>
    <form action="{{ route('galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="caption">Caption:</label>
            <input type="text" class="form-control" id="caption" name="caption" value="{{ $gallery->caption }}" required>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="checkbox" id="status" name="status" value="1" {{ $gallery->status ? 'checked' : '' }}>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection