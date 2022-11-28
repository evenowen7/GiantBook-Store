@extends('navbar')

{{-- @section('title', 'Home') --}}

@section('content')
<div>
    <h1 class="p-3 mb-2 bg-secondary text-white">Category #4</h1>
    <div class="card" style="width:15rem">
        <img class="card-img-top" src="https://static-cse.canva.com/blob/921489/RedandBeigeCuteIllustrationYoungAdultBookCover.jpg">
        <div class="card-body">
            <p>Book Title</p>
            <p>by</p>
            <p>Author name</p>
            <a href="/detail" class="btn btn-primary">Detail</a>
        </div>
    </div>
</div>
@endsection
