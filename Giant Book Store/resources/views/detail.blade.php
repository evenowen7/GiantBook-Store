@extends('navbar')

{{-- @section('title', 'Home') --}}

@section('content')
<div>
    <h1 class="p-3 mb-2 bg-secondary text-white">Book Detail</h1>
    <div class="card" style="width:80rem">
        <img class="card-img-top" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/yellow-business-leadership-book-cover-design-template-dce2f5568638ad4643ccb9e725e5d6ff.jpg?ts=1637017516">
        <div class="card-body">
            <p>Title: THE MIND OF A LEADER</p>
            <p>Author name: Kevin Anderson</p>
            <p>Publisher: Even Owen Thamrin</p>
            <p>Year: 2022</p>
            <p>Synopsis: Lorem Ipsum</p>
            {{-- <a href="#" class="btn btn-primary">Detail</a> --}}
        </div>
    </div>
</div>



@endsection
