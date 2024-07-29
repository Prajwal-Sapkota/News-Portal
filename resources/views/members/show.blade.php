@extends('master')

@section('content')
<div class="container mt-5">
    <h1>Member Details</h1>
    <div class="card mt-4">
        <div class="card-header">
            {{ $member->name }}
        </div>
        <div class="card-body">
            <p><strong>EID No:</strong> {{ $member->eid_no }}</p>
            <p><strong>Phone:</strong> {{ $member->phone }}</p>
            <p><strong>Email:</strong> {{ $member->email }}</p>
            <p><strong>Join Date:</strong> {{ $member->join_date }}</p>
            <p><strong>Description:</strong> {{ $member->description }}</p>
            @if($member->image)
                <p><strong>Image:</strong></p>
                <img src="{{ asset('storage/'.$member->image) }}" height="200">
            @endif
            <p><strong>Status:</strong> {{ $member->status ? 'Active' : 'Inactive' }}</p>
            <a href="{{ route('members.index') }}" class="btn btn-secondary mt-3">Back to List</a>
        </div>
    </div>
</div>
@endsection