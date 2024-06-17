@extends('master')

@section('content')
<div class="container mt-5">
    <h1>Testimonial Details</h1>
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">{{ $testimonial->name }}</h5>
            <p class="card-text"><strong>Company Name:</strong> {{ $testimonial->company_name }}</p>
            <p class="card-text"><strong>Position:</strong> {{ $testimonial->position }}</p>
            <p class="card-text"><strong>Message:</strong> {{ $testimonial->message }}</p>
            <p class="card-text"><strong>Phone:</strong> {{ $testimonial->phone }}</p>
            <p class="card-text"><strong>Email:</strong> {{ $testimonial->email }}</p>
            @if($testimonial->image)
                <div class="mt-3">
                    <img src="{{ asset('storage/'.$testimonial->image) }}" height="200">
                </div>
            @endif
            <p class="mt-3"><strong>Status:</strong> {{ $testimonial->status ? 'Active' : 'Inactive' }}</p>
            <a href="{{ route('testimonials.index') }}" class="btn btn-secondary mt-3">Back to List</a>
        </div>
    </div>
</div>
@endsection