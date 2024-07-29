@extends('master')

@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title">News List</h5>
                        </div>
                        <div class="col-md-6" style="text-align: right;">
                            <h5 class="card-title">
                                <a class="btn btn-primary" href="{{ route('news.create') }}">Create</a>
                            </h5>
                        </div>
                    </div>
                    
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Published Date</th>
                                <th>Status</th>
                                <th width="250">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($news as $newsItem)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $newsItem->newsCategory->title }}</td>
                                <td>{{ $newsItem->title }}</td>
                                <td>{{ $newsItem->published_date }}</td>
                                <td>{{ $newsItem->status ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <div style="display: flex;">
                                        <a class="btn btn-primary" href="{{ route('news.edit', $newsItem->id) }}">Edit</a>&nbsp;
                                        <a class="btn btn-secondary" href="{{ route('news.show', $newsItem->id) }}">Show</a>&nbsp;
                                        <form method="POST" action="{{ route('news.destroy', $newsItem->id) }}" onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
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
