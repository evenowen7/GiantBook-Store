@extends('navbar')

{{-- @section('title', 'Home') --}}

@section('content')
<div>
    <h4 class="p-3 mb-2 bg-secondary text-white">Publisher Name<br>Address - Palmerah, Jakarta - Indonesia<br>Phone - 02100000111<br>Email - publisher@publish.com </h4>

    <div class="card" style="width:15rem">
        <img class="card-img-top" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/yellow-business-leadership-book-cover-design-template-dce2f5568638ad4643ccb9e725e5d6ff.jpg?ts=1637017516">
        <div class="card-body">
            <p>Book Title</p>
            <p>by</p>
            <p>Author name</p>
            <a href="/detail" class="btn btn-primary">Detail</a>
        </div>
    </div>
</div>



@endsection
