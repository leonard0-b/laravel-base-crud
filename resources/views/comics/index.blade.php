@extends("layouts.app")

@section("title")
Comics
@endsection

@section("content")
    <section class="index flex">
        <div class="container flex wrapper">
            <div class="news">
                <h1>Ultimi Arrivi</h1>
                <hr>
            </div>
            @foreach ($comics as $comic)
            <div class="card flex">
                <div class="w-50l">
                    <img src="{{$comic->thumb}}" alt="">
                </div>
                <div class="w-50r">
                    <div class="serie"><p>{{$comic->series}}</p></div>
                    <div class="title"><h1><a href="{{route('comics.show', ['comic' => $comic->id])}}">{{$comic->title}}</a></h1></div>
                    <div class="price"><p>{{$comic->price}}$</p></div>
                    <a class="details" href="{{route('comics.show', ['comic' => $comic->id])}}">Details</a>
                </div>
            </div>
            @endforeach
        </div>
        <a href="{{route('comics.create')}}">Send us your Comic!</a>
    </section>
@endsection