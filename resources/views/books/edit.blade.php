@extends('layout')

@section('page-content')
<h2>Edit Book</h2>
<form method="post" action="{{route('books.update')}}">
    @csrf
    @method('put')
    <input type="hidden" name="id" value="{{$book->id}}">
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Title" value="{{old('title',$book->title)}}">

        @error('title')
        <span class="text-danger">{{ $message }}</span>
        @enderror

    </div>
    <div class="mb-3">
        <label class="form-label">Author</label>
        <input type="text" class="form-control" name="author" value="{{old('author',$book->author)}}" placeholder="Author">

        @error('author')
        <span class="text-danger">{{ $message }}</span>
        @enderror

    </div>
    <div class="mb-3">
        <label class="form-label">ISBN</label>
        <input type="text" class="form-control" name="isbn" value="{{old('isbn',$book->isbn)}}" placeholder="ISBN">

        @error('isbn')
        <span class="text-danger">{{ $message }}</span>
        @enderror

    </div>
    <div class="mb-3">
        <label class="form-label">Stock</label>
        <input type="text" class="form-control" name="stock" value="{{old('stock',$book->stock)}}" placeholder="Stock">

        @error('stock')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="text" class="form-control" name="price" value="{{old('price',$book->price)}}" placeholder="price">

        @error('price')
        <span class="text-danger">{{ $message }}</span>
        @enderror

    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" title="Submit">
        <a href="{{route('books.index')}}" class="btn btn-danger">Cancel</a>
    </div>
</form>
@endsection