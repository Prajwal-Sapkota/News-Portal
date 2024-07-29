<!-- resources/views/testimonials/index.blade.php -->
@extends('master')

@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title">Testimonials</h5>
                        </div>
                        <div class="col-md-6" style="text-align: right;">
                            <h5 class="card-title">
                                <a class="btn btn-primary" href="{{ route('testimonials.create') }}">Create Testimonial</a>
                            </h5>
                        </div>
                    </div>
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Company Name</th>
                                <th>Position</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th width="250">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($testimonials as $testimonial)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $testimonial->name }}</td>
                                <td>{{ $testimonial->company_name }}</td>
                                <td>{{ $testimonial->position }}</td>
                                <td>{{ $testimonial->message }}</td>
                                <td>{{ $testimonial->status ? 'Active' : 'Inactive' }}</td>
                                <td>{{ $testimonial->user->name}}</td>
                                <td>
                                    <div style="display: flex;">
                                        <a class="btn btn-primary" href="{{ route('testimonials.edit', $testimonial->id) }}">Edit</a>&nbsp;
                                        <a class="btn btn-secondary" href="{{ route('testimonials.show', $testimonial->id) }}">Show</a>&nbsp;
                                        <form method="POST" action="{{ route('testimonials.destroy', $testimonial->id) }}" onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
