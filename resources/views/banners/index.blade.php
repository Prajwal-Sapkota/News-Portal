@extends('master')

@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title">Banners</h5>
                        </div>
                        <div class="col-md-6" style="text-align: right;">
                            <h5 class="card-title">
                                <a class="btn btn-primary" href="{{ route('banners.create') }}">Create</a>
                            </h5>
                        </div>
                    </div>
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th width="250">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($banners as $banner)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $banner->title }}</td>
                                <td>{{ $banner->description }}</td>
                                <td>
                                    @if($banner->image)
                                        <img src="{{ asset('storage/' . $banner->image) }}" height="50" alt="{{ $banner->title }}">
                                    @endif
                                </td>
                                <td>{{ $banner->status ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <div style="display: flex;">
                                        <a class="btn btn-primary" href="{{ route('banners.edit', $banner->id) }}">Edit</a>&nbsp;
                                        <a class="btn btn-secondary" href="{{ route('banners.show', $banner->id) }}">Show</a>&nbsp;
                                        <form method="POST" action="{{ route('banners.destroy', $banner->id) }}" onsubmit="return confirm('Are you sure?')">
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
