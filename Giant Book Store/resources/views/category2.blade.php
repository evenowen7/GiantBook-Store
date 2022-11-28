@extends('navbar')

{{-- @section('title', 'Home') --}}

@section('content')
<div>
    <h1 class="p-3 mb-2 bg-secondary text-white">Category #2</h1>
    <div class="card" style="width:15rem">
        <img class="card-img-top" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/teal-and-orange-fantasy-book-cover-design-template-056106feb952bdfb7bfd16b4f9325c11.jpg?ts=1637018051">
        <div class="card-body">
            <p>Book Title</p>
            <p>by</p>
            <p>Author name</p>
            <a href="/detail" class="btn btn-primary">Detail</a>
        </div>
    </div>
</div>



@endsection
