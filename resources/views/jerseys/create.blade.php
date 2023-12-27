@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="my-4">Tambah Jersey Baru</h1>
            <a href="{{ route('jerseys.index') }}" class="btn btn-secondary">Back</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('jerseys.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="club">Club:</label>
                <input type="text" name="club" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">USD</span>
                    </div>
                    <input type="number" name="price" class="form-control" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

    <!-- Custom CSS for create.blade.php -->
    <style>
        /* Add your custom styles for create.blade.php here */
        .container {
            background-color: #f8f9fa; /* Example background color */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Box shadow for a box-like appearance */
        }
    </style>
@endsection
