@extends("layouts.app")

@section("title")
Welcome
@endsection

@section("content")
    <section class="flex home">
        <h1>Mitici Fumettoni</h1>   
        <a class="uppercase" href="{{route('comics.index')}}">-> fumetti <-</a>
    </section>
@endsection


