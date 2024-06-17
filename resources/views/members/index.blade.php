@extends('master')

@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title">Members</h5>
                        </div>
                        <div class="col-md-6" style="text-align: right;">
                            <h5 class="card-title">
                                <a class="btn btn-primary" href="{{ route('members.create') }}">Create</a>
                            </h5>
                        </div>
                    </div>
                    
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Name</th>
                                <th>EID No</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Join Date</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th width="250">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($members as $member)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $member->name }}</td>
                                <td>{{ $member->eid_no }}</td>
                                <td>{{ $member-> phone}}</td>
                                <td>{{ $member-> email}}</td>
                                <td>{{ $member-> join_date}}</td>
                                <td>{{ $member-> description}}</td>
                                <td>
                                    @if ($member->image)
                                        <img src="{{ asset('storage/'.$member->image) }}" height="50">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>
                                    <div style="display: flex;">
                                        <a class="btn btn-primary" href="{{ route('members.edit', $member->id) }}">Edit</a>&nbsp;
                                        <a class="btn btn-secondary" href="{{ route('members.show', $member->id) }}">Show</a>&nbsp;
                                        <form method="POST" action="{{ route('members.destroy', $member->id) }}" onsubmit="return confirm('Are you sure?')">
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
