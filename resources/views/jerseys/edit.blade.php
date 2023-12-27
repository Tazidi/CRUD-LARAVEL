@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="my-4">Edit Jersey</h1>
            <a href="{{ route('jerseys.index') }}" class="btn btn-secondary">Back</a>
        </div>

        <form action="{{ route('jerseys.update', $jersey->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ $jersey->name }}" required>
            </div>
            <div class="form-group">
                <label for="club">Club:</label>
                <input type="text" name="club" class="form-control" value="{{ $jersey->club }}" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" name="price" class="form-control" value="{{ $jersey->price }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>

    <!-- Custom CSS for edit.blade.php -->
    <style>
        /* Add your custom styles for edit.blade.php here */
        .container {
            background-color: #f8f9fa; /* Example background color */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Box shadow for a box-like appearance */
            margin-top: 20px; /* Add some top margin for better spacing */
        }
    </style>
@endsection
