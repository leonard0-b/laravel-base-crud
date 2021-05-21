@extends("layouts.app")

@section("title")
Details
@endsection

@section("content")
    <section class="show flex">
        <div class="card flex">
            <div class="w-50l">
                <img src="{{$comic->thumb}}" alt="">
            </div>
            <div class="w-50r">
                <div class="title"><h1>{{$comic->title}}</h1></div>
                <div class="description"><p>{{$comic->description}}</p></div>
                <div class="price"><p>{{$comic->price}}$</p></div>
                <a class="details" href="{{route('comics.show', ['comic' => $comic->id])}}">Details</a>
            </div>
        </div>
        <div class="cmd flex">
            <a href="">Edit</a> 
            <div class="delete">
                <form action="{{route('comics.destroy', ['comic' => $comic->id])}}" method='post'>
                @csrf
                @method('DELETE')
                <input onclick="return confirm('Are you sure?')" type="submit" name='Delete :(' value='Delete :('>
                </form>
            </div>          
        </div>
    </section>
@endsection