@extends('master')
@section('content')
<div class="container">
    <h1 class="mt-5">User Details</h1>
    <div class="card mt-4">
        <div class="card-body">
            <p class="card-text">ID: {{ $user->id }}</p>
            <p class="card-text">Name: {{ $user->name }}</p>
            <p class="card-text">Email: {{ $user->email }}</p>
            <p class="card-text">Phone: {{ $user->phone }}</p>
            <div class="text-center">
                <img src="{{ asset('storage/' . $user->image) }}" class="img-fluid rounded mt-3" alt="{{ $user->name }}">
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('users.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection