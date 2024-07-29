@extends('master')

@section('content')
<div class="container">
    <h1 class="mt-5">Edit Testimonial</h1>
    <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data" class="mt-4">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $testimonial->name }}" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $testimonial->phone }}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $testimonial->email }}">
        </div>
        <div class="form-group">
            <label for="company_name">Company Name:</label>
            <input type="text" class="form-control" id="company_name" name="company_name" value="{{ $testimonial->company_name }}">
        </div>
        <div class="form-group">
            <label for="position">Position:</label>
            <input type="text" class="form-control" id="position" name="position" value="{{ $testimonial->position }}">
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea name="message" class="form-control" required>{{ $testimonial->message }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="status" name="status" {{ $testimonial->status ? 'checked' : '' }}>
            <label class="form-check-label" for="status">Status</label>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
