@extends('layouts.navbar')

@section('content')

<div class="card shadow col-md-6 mx-auto">
    <div class="card-body text-center">
        <h3 class="mb-3">User Profile</h3>
        <p><strong>ID:</strong> {{ $id }}</p>
        <p><strong>Name:</strong> {{ $name }}</p>
    </div>
</div>

@endsection