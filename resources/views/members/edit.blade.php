@extends('master')

@section('content')
<div class="container mt-5">
    <h1>Edit Member</h1>
    <form action="{{ route('members.update', $member->id) }}" method="POST" enctype="multipart/form-data" class="mt-4">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $member->name }}" required>
        </div>
        <div class="form-group">
            <label for="eid_no">EID No:</label>
            <input type="text" class="form-control" id="eid_no" name="eid_no" value="{{ $member->eid_no }}">
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $member->phone }}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $member->email }}">
        </div>
        <div class="form-group">
            <label for="join_date">Join Date:</label>
            <input type="date" class="form-control" id="join_date" name="join_date" value="{{ $member->join_date }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description">{{ $member->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control-file" id="image" name="image">
            @if($member->image)
                <img src="{{ asset('storage/'.$member->image) }}" height="100" class="mt-2">
            @endif
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="status" name="status" {{ $member->status ? 'checked' : '' }}>
            <label class="form-check-label" for="status">Active</label>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection