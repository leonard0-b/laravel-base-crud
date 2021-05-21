@extends("layouts.app")

@section("title")
Details
@endsection

@section("content")
    <section class="index flex">
        <p>{{$comic->title}}</p>
        <a href="{{route('comics.edit', ['comic' => $comic->id])}}">Edit</a>
        
    </section>
@endsection