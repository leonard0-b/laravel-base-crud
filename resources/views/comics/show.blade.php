@extends("layouts.app")

@section("title")
Details
@endsection

@section("content")
    <section class="show flex">
        <div class="container flex">
            <div class="w-50l">
                <img src="{{$comic->thumb}}" alt="">
            </div>
            <div class="w-50r">
                <div class="title"><h1>{{$comic->title}}</h1></div>
                <div class="description"><p>{{$comic->description}}</p></div>
                <div class="price"><p>Price: {{$comic->price}}$</p></div>
            </div>
        </div>
        <div class="cmd flex">
            <a href="{{route('comics.edit', ['comic' => $comic->id])}}">Edit</a> 
            <div class="delete">
                <form action="{{route('comics.destroy', ['comic' => $comic->id])}}" method='post'>
                @csrf
                @method('DELETE')
                <input onclick="return confirm('Are you sure?')" type="submit" name='Delete :(' value='Delete :('>
                </form>
            </div> 
            <a class="back" href="{{route('comics.index')}}">Back</a>         
        </div>
    </section>
@endsection