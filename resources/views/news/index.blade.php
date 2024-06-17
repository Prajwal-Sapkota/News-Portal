@extends('master')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>News</h1>
        <a class="btn btn-primary" href="{{ route('news.create') }}">Create News</a>
    </div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>S.N.</th>
                <th>Title</th>
                <th>Category</th>
                <th>Published Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $newsItem)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $newsItem->title }}</td>
                    <td>{{ $newsItem->newsCategory->title ?? 'N/A'}}</td>
                    <td>{{ $newsItem->published_date }}</td>
                    <td>{{ $newsItem->status ? 'Active' : 'Inactive' }}</td>
                    <td class="d-flex">
                        <a class="btn btn-secondary mr-2" href="{{ route('news.show', $newsItem->id) }}">Show</a>
                        <a class="btn btn-primary mr-2" href="{{ route('news.edit', $newsItem->id) }}">Edit</a>
                        <form method="POST" action="{{ route('news.destroy', $newsItem->id) }}" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
