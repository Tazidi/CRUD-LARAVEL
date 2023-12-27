<!-- resources/views/jerseys/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">List Jersey</h1>
        <a href="{{ route('jerseys.create') }}" class="btn btn-primary mb-3">Add New Jersey</a>

        <div class="row">
            @foreach ($jerseys as $jersey)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $jersey->name }}</h5>
                            <p class="card-text">Club: {{ $jersey->club }}</p>
                            <p class="card-text">Price: ${{ $jersey->price }}</p>
                            <a href="{{ route('jerseys.edit', $jersey->id) }}" class="btn btn-outline-dark btn-sm">Edit</a>
                            <form action="{{ route('jerseys.destroy', $jersey->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you Sure?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
