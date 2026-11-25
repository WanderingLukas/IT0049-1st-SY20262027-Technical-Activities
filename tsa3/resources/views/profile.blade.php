
@extends('layouts.app')

@section('title', 'Developer Profile')

@section('content')
<div class="card shadow-sm border-0 mx-auto" style="max-width: 650px;">
    <div class="card-body p-4">
        <h1 class="fw-bold mb-4">User Profile</h1>

        @if($user)
            <div class="mb-3">
                <strong>Username:</strong>
                <p>{{ $user->username }}</p>
            </div>

            <div class="mb-3">
                <strong>Full Name:</strong>
                <p>{{ $user->full_name }}</p>
            </div>

            <div class="mb-3">
                <strong>Email Address:</strong>
                <p>{{ $user->email }}</p>
            </div>
        @else
            <div class="alert alert-warning">
                No user profile found.
            </div>
        @endif
    </div>
</div>
@endsection
