@extends('layout')

@section('page-content')

<h1>Book Shop</h1>
<div class="row">
    <div class="col-lg-10">
        <form method="get" action="{{route('books.index')}}">
            <div class="input-group mb-3">
                <input type="text" name="search" value="{{request('search')}}" class="form-control" placeholder="Search for books" aria-label="Search books" aria-describedby="button-addon2">
                <button class="btn btn-secondary" type="submit" id="button-addon2"><i class="bi bi-search"></i> Search</button>
            </div>
        </form>
    </div>
    <div class="col-lg-2">
        <p class="text-end">
            <a href="{{route('books.create')}}" class="btn btn-primary">Create</a>
        </p>
    </div>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book )
        <tr>
            <!-- Display the row number -->
            <td>{{$book->id}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->price}}</td>
            <td>
                <a class="btn btn-dark" href="{{route('books.show',$book->id)}}">View</a>
                <a class="btn btn-dark" href="{{route('books.edit',$book->id)}}">Edit</a>
                <form onsubmit="return confirm('Are sure want to delete');" method="post" action="{{route('books.delete')}}">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="id" value="{{$book->id}}">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$books->links()}}
@endsection