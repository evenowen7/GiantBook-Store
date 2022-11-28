@extends('navbar')

{{-- @section('title', 'Home') --}}

@section('content')
<div>
    <h1 class="p-3 mb-2 bg-secondary text-white">Book List</h1>
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

<div>
    <h1 class="p-3 mb-2 bg-secondary text-white"> </h1>
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

<div>
    <h1 class="p-3 mb-2 bg-secondary text-white"> </h1>
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

<div>
    <h1 class="p-3 mb-2 bg-secondary text-white"> </h1>
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
