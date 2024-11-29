@extends('layout')

@section('page-content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <!-- Book Title -->
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">{{ $book->title }}</h4>
                </div>

                <!-- Book Details -->
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong>Author:</strong> {{ $book->author }}
                        </li>
                        <li class="list-group-item">
                            <strong>ISBN:</strong> {{ $book->isbn }}
                        </li>
                        <li class="list-group-item">
                            <strong>Stock:</strong> {{ $book->stock }} copies
                        </li>
                        <li class="list-group-item">
                            <strong>Price:</strong> ${{ number_format($book->price, 2) }}
                        </li>
                    </ul>
                </div>

                <!-- Action Buttons -->
                <div class="card-footer text-center">
                    <a href="{{ route('books.index') }}" class="btn btn-secondary btn-sm">Back to List</a>
                    <a href="#" class="btn btn-success btn-sm">Edit Book</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection