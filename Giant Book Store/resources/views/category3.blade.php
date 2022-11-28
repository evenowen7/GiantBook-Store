@extends('navbar')

{{-- @section('title', 'Home') --}}

@section('content')
<div>
    <h1 class="p-3 mb-2 bg-secondary text-white">Category #3</h1>
    <div class="card" style="width:15rem">
        <img class="card-img-top" src="http://bukovero.com/wp-content/uploads/2016/07/Harry_Potter_and_the_Cursed_Child_Special_Rehearsal_Edition_Book_Cover.jpg">
        <div class="card-body">
            <p>Book Title</p>
            <p>by</p>
            <p>Author name</p>
            <a href="/detail" class="btn btn-primary">Detail</a>
        </div>
    </div>
</div>

@endsection
