@extends('master')

@section('content')
    <div class="container">
        <h1>News Categories</h1>
        <a href="{{ route('news-categories.create') }}" class="btn btn-primary mb-2">Create New Category</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($newsCategories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        @if($category->image)
                            <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->title }}" style="max-width: 100px;">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>{{ $category->status ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <a href="{{ route('news-categories.show', $category->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('news-categories.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('news-categories.destroy', $category->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
